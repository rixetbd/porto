<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Address;
use App\Models\Admin\Social;
use App\Models\User;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    function index()
    {
        $address_info = Address::all();
        $social_info = Social::all();
        return view('admin.profile.index',[
            'address_info'=>$address_info,
            'social_info'=>$social_info,
        ]);
    }

    function addPage()
    {
        return view('admin.profile.add');
    }

    public function downloadCVPdfFile(NotyfFactory $flasher)
    {
        $user = User::find(Auth::id());

        if(!empty($user->resume)){
            $filepath = public_path('uploads/resume/'.$user->resume);
            if (file_exists($filepath)) {
                return Response()->download($filepath);
            }else{
                $flasher->addError('Resume Not Uploaded Yet.');
                return back();
            }
        }else{
            $flasher->addError('Resume Not Uploaded Yet.');
            return back();
        }

    }

    public function userUpdate(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);

        $user = User::find(Auth::id());

        User::find(Auth::id())->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        if(!empty($request->picture)){
            if ($user->picture != '') {
                if (file_exists(public_path('uploads/user/'.$user->picture))) {
                    unlink(public_path('uploads/user/'.$user->picture));
                }
            }
            $picture = $user->name.'.'.$request->picture->getClientOriginalExtension();
            Image::make($request->picture)->fit(600, 600)->save(public_path('uploads/user/'.$picture));
            User::find(Auth::id())->update([
                'picture'=>$picture,
            ]);
        }

        if(!empty($request->resume)){
            if ($user->resume != '') {
                if (file_exists(public_path('uploads/resume/'.$user->resume))) {
                    unlink(public_path('uploads/resume/'.$user->resume));
                }
            }
            $resume = $user->name.'.'.$request->resume->getClientOriginalExtension();
            $request->resume->move('uploads/resume/', $resume);
            User::find(Auth::id())->update([
                'resume'=>$resume,
            ]);
        }

        if(!empty($request->password) && !empty($request->confirm_password)){
            if (Hash::check($request->password, $user->password)) {
                User::find(Auth::id())->update([
                    'password'=>Hash::make($request->confirm_password),
                ]);
            }else{
                echo "Old password doesn't match";
            }
        }

        return back();

    }
}
