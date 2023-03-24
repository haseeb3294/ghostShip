<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $slack = [];
        $slack_access = auth()->user()->slack_access;
        if(!empty($slack_access)){
            $slack_api_call = \Http::withToken($slack_access)->get('https://slack.com/api/conversations.list');
            $get_slack_data = $slack_api_call->collect()->toArray();
            if($get_slack_data['ok'] == true){
                $slack['channels'] = $get_slack_data['channels'];
                $slack['response_metadata'] = $get_slack_data['response_metadata'];
            }
        }
        return view('pages.index',compact('slack_access','slack'));
    }
}
