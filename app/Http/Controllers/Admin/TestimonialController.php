<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Testimonials;
use Illuminate\Http\Request;
use Flasher\Notyf\Prime\NotyfFactory;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class TestimonialController extends Controller
{
    // Skills Methods
    public function index(){
        $data = Testimonials::all();
        return view('admin.testimonial.index',[
            'data'=>$data,
        ]);
    }

    public function testimonial_new(Request $request, NotyfFactory $flasher){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'designations'=>'required',
            'description'=>'required',
        ]);

        $new_id = Testimonials::insertGetId([
            'name'=>$request->name,
            'email'=>$request->email,
            'designations'=>$request->designations,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        if(!empty($request->picture)){
            $img_name = $new_id.'.'.$request->picture->getClientOriginalExtension();
            Image::make($request->picture)->fit(400)->save(public_path('uploads/clients/'.$img_name));
            Testimonials::find($new_id)->update([
                'picture'=>$img_name,
            ]);
        }

        $flasher->addSuccess('Testimonial Add Successfully');
        return back();
    }


    public function testimonial_delete($id, NotyfFactory $flasher){

        $check_id = Testimonials::find($id);
        if(!empty($check_id->picture)){
            $file = public_path('uploads/clients/'.$check_id->picture);
            if(file_exists($file))
            unlink($file);
        }

        Testimonials::find($id)->delete();
        $flasher->addSuccess('Testimonial Delete Successfully');
        return back();
    }
}
