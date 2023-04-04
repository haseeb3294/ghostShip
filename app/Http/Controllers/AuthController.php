<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Mail\Verify_email;

class AuthController extends Controller
{
    public function user_signup_action(Request $request){
        $validate = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'unique:users', 'email'],
            'username' => ['required', 'unique:users'],
            'password' => 'required|min:6',
            'phone' => 'required|numeric',
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        $register = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'phone' => $request->phone,
            'username' => $request->username
        ]);
        if ($register) {
            $otp = \Str::random(6);
            $otp_expires_at = now()->addMinutes(10);
            $save_otp = User::where('id',$register->id)->update([
                'otp' => $otp,
                'otp_expires_at' => $otp_expires_at
            ]);
            $data['otp'] = $otp;
            $data = json_encode($data);
            $information = [
                'email' => $register->email,
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
            $encrypt_user_id = encrypt('ghost-ship',10).'-'.encrypt($register->id,10).'-'.encrypt('application',10);
            return json_encode([
                'success' => true,
                'message' => 'Registered Successfully , please verify your email to login',
                'session_id' => $encrypt_user_id
            ]);
        } else {
            return json_encode([
                'success' => false,
                'message' => 'Error : Please try again later'
            ]);
        }
    }

    public function user_signin_action(Request $request){
        $validate = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        try {
            $get_user = User::where('email',$request->email)->first();
            $password_check = \Hash::check($request->password, $get_user->password);
            if($password_check == true){
                if(empty($get_user->email_verified_at)){
                    $encrypt_user_id = encrypt('ghost-ship',10).'-'.encrypt($get_user->id,10).'-'.encrypt('application',10);
                    return json_encode([
                        'success' => 'verification',
                        'message' => 'Please verify your email to login',
                        'session_id' => $encrypt_user_id
                    ]);
                }
            }
            $login_attempt = \Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if ($login_attempt) {
                return json_encode([
                    'success' => true,
                    'message' => 'Login Successfully'
                ]);
            } else {
                return json_encode([
                    'success' => false,
                    'message' => 'Invalid credentials , please try again'
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function user_logout(){
        auth()->logout();
        return redirect()->route('user_login');
    }

    public function resend_otp($user_id){
        $explode_id = explode("-",$user_id);
        $userID = decrypt($explode_id[1]);
        $user = User::where('id',$userID)->first();
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
        return redirect()->route('verify_email',$user_id)->with('message','Verification code sended again');
    }

    public function verify_email($user_id){
        $userID = $user_id;
        return view('pages.verify_email',compact('userID'));
    }

    public function user_verify_email(Request $request){
        $validate = \Validator::make($request->all(), [
            'otp' => 'required',
            'user_id' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        try {
            $explode_id = explode("-",$request->user_id);
            $userID = decrypt($explode_id[1]);
            $user = User::where('id',$userID)->first();
            if ($user->otp === $request->otp && $user->otp_expires_at > now()) {
                $currentTimeStamp = now();
                $user_email_verify = User::where('id',$user->id)->update([
                    'email_verified_at' => $currentTimeStamp
                ]);
                return json_encode([
                    'success' => true,
                    'message' => 'Email verified Successfully'
                ]);
            } else {
                return json_encode([
                    'success' => false,
                    'message' => 'The OTP entered is invalid'
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                'success' => false,
                'message' => 'Error : Please try again later'
            ]);
        }
    }

}
