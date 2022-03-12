<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Address;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function admin_address_new(Request $request)
    {
        $request->validate([
            'location'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'website'=>'required',
        ]);

        Address::insert([
            'location'=>$request->location,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'website'=>$request->website,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    public function status($id)
    {
        $data = Address::find($id);

        if ($data->status == 0) {

            Address::where('id' ,'!=', $id)->update([
                'status'=>0,
            ]);

            Address::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Address::find($id)->update([
                'status'=>0,
            ]);
        }
        return back();
    }

    public function delete($id){
        Address::find($id)->delete();
        return back();
    }
}
