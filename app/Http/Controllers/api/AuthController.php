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
			$token = $user->createToken('ghost-ship')->plainTextToken;
			$user->token = $token;
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
			if (!$user) {
				return response()->json([
					'success' => false,
					'message' => 'Invalid credentials'
				]);
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
}
