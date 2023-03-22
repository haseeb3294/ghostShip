<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SlackController extends Controller
{
    public function slack_access_process(Request $request){
        try {
            $access_code = $request->code;
            $client_id = \Config::get('slack.client_id');
            $client_secret = \Config::get('slack.client_secret');
            if(empty($access_code)){
                return abort(404);
            }
            $oauthV2Access = \Http::asForm()->post('https://slack.com/api/oauth.v2.access', [
                'code' => $access_code,
                'client_id' => $client_id,
                'client_secret' => $client_secret
            ]);
            $getData = $oauthV2Access->collect()->toArray();
            if(isset($getData['authed_user']['access_token']) && !empty($getData['authed_user']['access_token'])){
                $save_token = User::where('id',auth()->id())->update([
                    'slack_access' => $getData['authed_user']['access_token']
                ]);
                if($save_token){
                    return redirect()->route('index');
                }else{
                    return abort(404);
                }
            }
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
}
