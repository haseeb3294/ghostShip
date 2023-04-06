<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $validate = \Validator::make($request->all(),[
			'name' => 'required',
            'email' => ['required', 'unique:users', 'email'],
            'username' => ['required', 'unique:users'],
            'password' => 'required|min:6',
            'phone' => 'required|numeric'
		]);
		if($validate->fails())
		{
			return response()->json([
				'success' => false,
				'message' => $validate->errors()->first()
			]);
		}
		try {
			$password = \Hash::make($request->password);
			$user = User::create([
				'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
                'phone' => $request->phone,
                'username' => $request->username
			]);
            $otp = \Str::random(6);
            $otp_expires_at = now()->addMinutes(10);
            $save_otp = User::where('id',$user->id)->update([
                'otp' => $otp,
                'otp_expires_at' => $otp_expires_at
            ]);
            $data['otp'] = $otp;
            $data = json_encode($data);
            $information = [
                'email' => $user->email,
                'subject' => 'Email verification code'
            ];
            $information = json_encode($information);
            if($save_otp){
                $send_otp = \Http::asForm()->post('https://becktesting.site/mailto.becktesting.site/api/send-mail', [
                    'data' => $data,
                    'information' => $information
                ]);
                $get_mail_data = $send_otp->collect()->toArray();
            }
			return response()->json([
				'success' => true,
				'message' => 'Account Created Successfully.',
				'data' => $user
			]);
		} catch (Exception $e) {
			return response()->json([
				'success' => false,
				'message' => 'Internal Server Error'
			]);
		}
    }

    public function login(Request $request){
        $validate = \Validator::make($request->all(),[
			'email' => 'required|email',
            'password' => 'required'
		]);
		if($validate->fails())
		{
			return response()->json([
				'success' => false,
				'message' => $validate->errors()->first()
			]);
		}
		try {
			$user = User::where('email',$request->email)->first();
			if(!empty($user)){
                $password_check = \Hash::check($request->password, $user->password);
                if($password_check == true){
                    if(empty($user->email_verified_at)){
                        $otp = \Str::random(6);
                        $otp_expires_at = now()->addMinutes(10);
                        $save_otp = User::where('id',$user->id)->update([
                            'otp' => $otp,
                            'otp_expires_at' => $otp_expires_at
                        ]);
                        $data['otp'] = $otp;
                        $data = json_encode($data);
                        $information = [
                            'email' => $user->email,
                            'subject' => 'Email verification code'
                        ];
                        $information = json_encode($information);
                        if($save_otp){
                            $send_otp = \Http::asForm()->post('https://becktesting.site/mailto.becktesting.site/api/send-mail', [
                                'data' => $data,
                                'information' => $information
                            ]);
                            $get_mail_data = $send_otp->collect()->toArray();
                        }
                        return response()->json([
                            'success' => 'verification-required',
                            'message' => 'Please verify your email to login'
                        ]);
                    }
                }
            }
			if(\Hash::check($request->password,$user->password))
			{
				$token = $user->createToken('ghost-ship')->plainTextToken;
				$user->token = $token;
				return response()->json([
					'success' => true,
					'message' => 'Login Successfull',
					'data' => $user
				]);
			}else{
				return response()->json([
					'success' => false,
					'message' => 'Invalid credentials'
				]);
			}
		} catch (Exception $e) {
			return response()->json([
				'success' => false,
				'message' => 'Internal Server Error'
			]);
		}
    }

	public function resend_verification_email(Request $request){
		try {
			$user = User::where('id',$request->user_id)->first();
			if(!empty($user)){
				if(!empty($user->email_verified_at)){
					return response()->json([
						'success' => false,
						'message' => 'Email already verified'
					]);
				}
			}
			$otp = \Str::random(6);
			$otp_expires_at = now()->addMinutes(10);
			$save_otp = User::where('id',$user->id)->update([
				'otp' => $otp,
				'otp_expires_at' => $otp_expires_at
			]);
			$data['otp'] = $otp;
			$data = json_encode($data);
			$information = [
				'email' => $user->email,
				'subject' => 'Email verification code'
			];
			$information = json_encode($information);
			if($save_otp){
				$send_otp = \Http::asForm()->post('https://becktesting.site/mailto.becktesting.site/api/send-mail', [
					'data' => $data,
					'information' => $information
				]);
				$get_mail_data = $send_otp->collect()->toArray();
			}
			return response()->json([
				'success' => true,
				'message' => 'Verification email send successfully'
			]);
		} catch (\Throwable $th) {
			return response()->json([
				'success' => false,
				'message' => 'Internal Server Error'
			]);
		}
	}

	public function verify_email(Request $request){
		$validate = \Validator::make($request->all(), [
            'otp' => 'required',
            'user_id' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
		try {
            $userID = $request->user_id;
            $user = User::where('id',$userID)->first();
			if(!empty($user)){
				if(!empty($user->email_verified_at)){
					return response()->json([
						'success' => false,
						'message' => 'Email already verified'
					]);
				}
			}
            if ($user->otp === $request->otp && $user->otp_expires_at > now()) {
                $currentTimeStamp = now();
                $user_email_verify = User::where('id',$user->id)->update([
                    'email_verified_at' => $currentTimeStamp
                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Email verified Successfully'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'The OTP entered is invalid'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Error : Please try again later'
            ]);
        }
	}
}
