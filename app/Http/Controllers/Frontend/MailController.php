<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ClientsMail;
use Carbon\Carbon;
use Flasher\Notyf\Prime\NotyfFactory;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function mail_post(Request $request, NotyfFactory $flasher)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            // 'link'=>'required',
            'message'=>'required',
        ]);

        ClientsMail::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'link'=>$request->link,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);

        $flasher->addSuccess('Thanks for contact.');

        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'link'=>$request->link,
            'Bodymessage'=>$request->message,
        );

        Mail::send('emails.contactMail', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mdrabiulislam.r12@gmail.com');
            $message->subject($data['subject']);
        });

        return back();
    }
}
