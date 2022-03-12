<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ClientsMail;
use Carbon\Carbon;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;

class MailController extends Controller
{
    function mail_post(Request $request, NotyfFactory $flasher)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'link'=>'required',
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
        return back();
    }
}
