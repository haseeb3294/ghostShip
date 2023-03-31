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
            if($save_otp){
                \Mail::send('emails.verify_email',$data,function($messages) use ($register){
                    $messages->to($register->email);
                    $messages->subject('Email verification code');
                });
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
                'message' => 'Error : Please try again later'
            ]);
        }
    }

    public function user_logout(){
        auth()->logout();
        return redirect()->route('user_login');
    }

    public function resend_otp($user_id){
        $explode_id = explode("-",$user_id);
        $userID = decrypty($explode_id[1]);
        $user = User::where('id',$userID)->first();
        $otp = \Str::random(6);
        $otp_expires_at = now()->addMinutes(10);
        $save_otp = User::where('id',$user->id)->update([
            'otp' => $otp,
            'otp_expires_at' => $otp_expires_at
        ]);
        if($save_otp){
            \Mail::to($user->email)->send(new Verify_email($otp));
        }
    }

    public function verify_email($user_id){
        $userID = $user_id;
        return view('pages.verify_email',compact('userID'));
    }
}
