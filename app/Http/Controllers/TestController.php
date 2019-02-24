<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){
        return view('text');
    }


    public function send(){
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => false
        );
        $pusher = new \Pusher\Pusher(
            'dc22364468bb6ca48c74',
            '7e1827d639be4875568a',
            '703946',
            $options
        );

        $data['message'] = 'hello world';
        $pusher->trigger('text-channel', 'text-event', $data);

    }
}
