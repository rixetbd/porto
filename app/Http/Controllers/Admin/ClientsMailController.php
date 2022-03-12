<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\frontend\ClientsMail;
use Illuminate\Http\Request;

class ClientsMailController extends Controller
{
    function inbox()
    {
        $all_mail = ClientsMail::orderBy('id', 'DESC')->paginate(10);
        return view('admin.email.inbox', [
            'all_mail'=>$all_mail,
        ]);
    }

    function readpage($id)
    {
        $all_mail = ClientsMail::orderBy('id', 'DESC')->get();
        $mail_id = ClientsMail::find($id);
        return view('admin.email.read_email',[
            'all_mail'=>$all_mail,
            'mail_id'=>$mail_id,
        ]);
    }

    function compose()
    {
        $all_mail = ClientsMail::orderBy('id', 'DESC')->get();
        return view('admin.email.email_compose',[
            'all_mail'=>$all_mail,
        ]);
    }

}
