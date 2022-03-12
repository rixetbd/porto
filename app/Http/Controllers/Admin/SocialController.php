<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Social;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function admin_social_new(Request $request)
    {
        $request->validate([
            'facebook'=>'required',
            'linkedin'=>'required',
            'instagram'=>'required',
            'whatsapp'=>'required',
        ]);

        Social::insert([
            'facebook'=>$request->facebook,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram,
            'whatsapp'=>$request->whatsapp,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    public function status($id)
    {
        $data = Social::find($id);

        if ($data->status == 0) {

            Social::where('id' ,'!=', $id)->update([
                'status'=>0,
            ]);

            Social::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Social::find($id)->update([
                'status'=>0,
            ]);
        }
        return back();
    }

    public function delete($id){
        Social::find($id)->delete();
        return back();
    }
}
