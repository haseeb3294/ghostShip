<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slack_user;

class IndexController extends Controller
{
    public function index(){
        try {
            $slack = [];
            $slack_access = auth()->user()->slack_access;
            if(!empty($slack_access)){
                $slack_api_call = \Http::withToken($slack_access)->get('https://slack.com/api/conversations.list');
                $get_slack_data = $slack_api_call->collect()->toArray();
                if($get_slack_data['ok'] == true){
                    $slack['channels'] = $get_slack_data['channels'];
                    $slack['response_metadata'] = $get_slack_data['response_metadata'];
                }
                $channel_count = 0;
                foreach ($slack['channels'] as $k => $c) {
                    $slack_messages_api_call = \Http::withToken($slack_access)->get('https://slack.com/api/conversations.history',['channel' => $c['id'] ]);
                    $get_slack_messages_data = $slack_messages_api_call->collect()->toArray();
                    if($get_slack_messages_data['ok'] == true){
                        foreach($get_slack_messages_data['messages'] as $key => $value){
                            $check_user = Slack_user::where('user_unique_id',$value['user'])->count();
                            if($check_user == 0){
                                $slack_get_user_api_call = \Http::withToken($slack_access)->get('https://slack.com/api/users.info',['user' => $value['user'] ]);
                                $slack_user_data_api_call = $slack_get_user_api_call->collect()->toArray();
                                $slack_user = Slack_user::create([
                                    'user_unique_id' => $slack_user_data_api_call['user']['id'],
                                    'team_id' => $slack_user_data_api_call['user']['team_id'],
                                    'username' => $slack_user_data_api_call['user']['name'],
                                    'real_name' => $slack_user_data_api_call['user']['real_name'],
                                    'color' => $slack_user_data_api_call['user']['color']
                                ]);
                                $get_slack_messages_data['messages'][$key]['user_info'] = $slack_user;
                            }else{
                                $slack_user = Slack_user::where('user_unique_id',$value['user'])->first();    
                                $get_slack_messages_data['messages'][$key]['user_info'] = $slack_user;
                            }
                        }
                        $slack['channels'][$k]['messages'] = $get_slack_messages_data;
                    }
                }
            }
            return view('pages.index',compact('slack_access','slack'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
