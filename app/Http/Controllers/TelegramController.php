<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;


class TelegramController extends Controller
{

    //for chatUpdate
    public function chatUpdate(){

        $telegram = new Api('5201780219:AAFFdPCdH7V7_ig2dBx3O8XR0z_MizpW6a0');
        $response = $telegram->getUpdates();

        //dd($telegram);
    }

    //sent message
    public function sendMessage(Request $request){
        //$apiToken = 5201780219:AAFFdPCdH7V7_ig2dBx3O8XR0z_MizpW6a0
        $telegram = new Api('5201780219:AAFFdPCdH7V7_ig2dBx3O8XR0z_MizpW6a0');
        $response = $telegram->sendMessage([
        'chat_id' => env('TELEGRAM_CHAT_ID'),
        'text' => 'Hello World Lawal Yusuf'
        ]);

        $messageId = $response->getMessageId();

        //$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }


    public function setWebhook(){
    $telegram = new Api('5201780219:AAFFdPCdH7V7_ig2dBx3O8XR0z_MizpW6a0');
    $response = $telegram->setWebhook(['url' => 'http://127.0.0.1:8000/5201780219:AAFFdPCdH7V7_ig2dBx3O8XR0z_MizpW6a0/webhook']);

    // Or if you are supplying a self-signed-certificate
    $response = $telegram->setWebhook([
    'url' => 'http://127.0.0.1:8000/5201780219:AAFFdPCdH7V7_ig2dBx3O8XR0z_MizpW6a0/webhook',
    'certificate' => '/path/to/public_key_certificate.pub'
    ]);

    //for update too
    //https://api.telegram.org/bot5201780219:AAFFdPCdH7V7_ig2dBx3O8XR0z_MizpW6a0/getUpdates
    }

}
