<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutInfo;
use App\Models\Admin\Counter;
use App\Models\Admin\Education;
use App\Models\Admin\Experience;
use App\Models\Admin\Service;
use App\Models\Admin\Skills;
use Carbon\Carbon;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function index(){
        $basic_info = AboutInfo::all();
        return view('admin.about.index',[
            'basic_info'=>$basic_info,
        ]);
    }

    function aboutNew(Request $request, NotyfFactory $flasher){
        $request->validate([
            'name'=>'required',
            'designation'=>'required',
            'email'=>'required',
            'date'=>'required',
            'phone'=>'required',
            'nationality'=>'required',
            'description'=>'required',
            'picture'=>'required',
        ]);

        $new_id = AboutInfo::insertGetId([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'email'=>$request->email,
            'date'=>$request->date,
            'phone'=>$request->phone,
            'nationality'=>$request->nationality,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $img_name = $new_id.'__'.date('Y-m-d').'.'.$request->picture->getClientOriginalExtension();
        Image::make($request->picture)->save(public_path('uploads/about/'.$img_name));

        AboutInfo::find($new_id)->update([
            'picture'=>$img_name,
        ]);

        $flasher->addSuccess('Successfully Insert.');
        return back();
    }

    public function basicStatus($id, NotyfFactory $flasher){
        $skill = AboutInfo::find($id);

        if($skill->status == 0){
            foreach(AboutInfo::all() as $status){
                AboutInfo::find($status->id)->update([
                    'status'=>0,
                ]);
            }
            AboutInfo::find($id)->update([
                'status'=>1,
            ]);
        }else{
            AboutInfo::find($id)->update([
                'status'=>0,
            ]);
        }

        $flasher->addSuccess('Status Update Successfully');
        return back();
    }

    function basicDelete($id, NotyfFactory $flasher){
        $info = AboutInfo::find($id);

        if(!empty($info->picture)){
            $img = public_path('uploads/about/'.$info->picture);
            if(file_exists($img)){
                unlink($img);
            }
        }

        AboutInfo::find($id)->delete();
        $flasher->addSuccess('Delete Successfully');
        return back();
    }

    public function counterPage(){
        $counters = Counter::all();
        return view('admin.about.counter',[
            'counters'=>$counters,
        ]);
    }

    public function counterNew(Request $request, NotyfFactory $flasher)
    {
        $request->validate([
            'projects'=>'required',
            'coffee'=>'required',
            'clients'=>'required',
            'exprience'=>'required',
            'awards'=>'required',
            'codes'=>'required',
        ]);

        Counter::insert([
            'projects'=>$request->projects,
            'coffee'=>$request->coffee,
            'clients'=>$request->clients,
            'exprience'=>$request->exprience,
            'awards'=>$request->awards,
            'codes'=>$request->codes,
        ]);
        $flasher->addSuccess('Successfully Insert.');
        return back();
    }

    public function counterStatus($id, NotyfFactory $flasher){
        $skill = Counter::find($id);

        if($skill->status == 0){
            foreach(Counter::all() as $status){
                Counter::find($status->id)->update([
                    'status'=>0,
                ]);
            }
            Counter::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Counter::find($id)->update([
                'status'=>0,
            ]);
        }

        $flasher->addSuccess('Status Update Successfully');
        return back();
    }

    function counterDelete($id, NotyfFactory $flasher){
        Counter::find($id)->delete();
        $flasher->addSuccess('Delete Successfully');
        return back();
    }

    // Skills Methods
    public function skillPage(){
        $data = Skills::all();
        return view('admin.about.skills',[
            'data'=>$data,
        ]);
    }

    public function skillNew(Request $request, NotyfFactory $flasher){
        $request->validate([
            'subject'=>'required',
            'performance'=>'required',
            'description'=>'required',
        ]);

        Skills::insert([
            'subject'=>$request->subject,
            'performance'=>$request->performance,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $flasher->addSuccess('Skills Add Successfully');
        return back();
    }

    public function skillStatus($id, NotyfFactory $flasher){
        $skill = Skills::find($id);

        if($skill->status == 0){
            Skills::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Skills::find($id)->update([
                'status'=>0,
            ]);
        }

        $flasher->addSuccess('Status Update Successfully');
        return back();
    }

    public function skillDelete($id, NotyfFactory $flasher){
        Skills::find($id)->delete();
        $flasher->addSuccess('Skills Delete Successfully');
        return back();
    }

    // Education Methods
    public function educationPage(){
        $data = Education::all();
        return view('admin.about.education',[
            'data'=>$data,
        ]);
    }

    public function educationNew(Request $request, NotyfFactory $flasher){
        $request->validate([
            'degree'=>'required',
            'institute'=>'required',
            'start_year'=>'required',
            'end_year'=>'required',
            'description'=>'required',
        ]);

        Education::insert([
            'degree'=>$request->degree,
            'institute'=>$request->institute,
            'start_year'=>$request->start_year,
            'end_year'=>$request->end_year,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $flasher->addSuccess('Education Add Successfully');
        return back();
    }

    public function educationStatus($id, NotyfFactory $flasher){
        $skill = Education::find($id);

        if($skill->status == 0){
            Education::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Education::find($id)->update([
                'status'=>0,
            ]);
        }

        $flasher->addSuccess('Status Update Successfully');
        return back();
    }

    public function educationDelete($id, NotyfFactory $flasher){
        Education::find($id)->delete();
        $flasher->addSuccess('Education Delete Successfully');
        return back();
    }

    // Experience
    public function experiencePage(){
        $data = Experience::all();
        return view('admin.about.experience',[
            'data'=>$data,
        ]);
    }

    public function experienceNew(Request $request, NotyfFactory $flasher){
        $request->validate([
            'position'=>'required',
            'organization'=>'required',
            'start_year'=>'required',
            'end_year'=>'required',
            'description'=>'required',
        ]);

        Experience::insert([
            'position'=>$request->position,
            'organization'=>$request->organization,
            'start_year'=>$request->start_year,
            'end_year'=>$request->end_year,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $flasher->addSuccess('Experience Add Successfully');
        return back();
    }

    public function experienceStatus($id, NotyfFactory $flasher){
        $skill = Experience::find($id);

        if($skill->status == 0){
            Experience::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Experience::find($id)->update([
                'status'=>0,
            ]);
        }

        $flasher->addSuccess('Status Update Successfully');
        return back();
    }

    public function experienceDelete($id, NotyfFactory $flasher){
        Experience::find($id)->delete();
        $flasher->addSuccess('Experience Delete Successfully');
        return back();
    }

    // Services Methods
    public function servicesPage(){
        $data = Service::all();
        return view('admin.about.service',[
            'data'=>$data,
        ]);
    }

    public function servicesNew(Request $request, NotyfFactory $flasher){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        Service::insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $flasher->addSuccess('Service Add Successfully');
        return back();
    }

    public function servicesStatus($id, NotyfFactory $flasher){
        $skill = Service::find($id);

        if($skill->status == 0){
            Service::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Service::find($id)->update([
                'status'=>0,
            ]);
        }

        $flasher->addSuccess('Status Update Successfully');
        return back();
    }

    public function servicesDelete($id, NotyfFactory $flasher){
        Service::find($id)->delete();
        $flasher->addSuccess('Service Delete Successfully');
        return back();
    }

}
