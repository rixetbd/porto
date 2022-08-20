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
        ClientsMail::where('id', $id)->update([
            'status' => 1
        ]);
        return view('admin.email.read_email',[
            'all_mail'=>$all_mail,
            'mail_id'=>$mail_id,
        ]);
    }

    function markasread($id)
    {
        ClientsMail::where('id', $id)->update([
            'status' => 0
        ]);
        return redirect(route('admin.email.inbox'));
    }

    function single_delete($id)
    {
        ClientsMail::find($id)->delete();
        return redirect(route('admin.email.inbox'));
    }

    function compose()
    {
        $all_mail = ClientsMail::orderBy('id', 'DESC')->get();
        return view('admin.email.email_compose',[
            'all_mail'=>$all_mail,
        ]);
    }

}
