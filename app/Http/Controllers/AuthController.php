<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function user_signup_action(Request $request){
        $validate = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'unique:users', 'email'],
            'password' => 'required|min:6'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        $register = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);
        if ($register) {
            // $send_verification_email = event(new Registered($register));
            // dd($send_verification_email);
            return json_encode([
                'success' => true,
                'message' => 'Registered Successfully , please verify your email to login'
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
}
