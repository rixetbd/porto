<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomePage;
use App\Models\Admin\HomePageBG;
use Carbon\Carbon;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomePageController extends Controller
{
    public function index()
    {
        $data = HomePage::all();
        $dataBG = HomePageBG::all();
        return view('admin.home_page.index', [
            'data'=>$data,
            'dataBG'=>$dataBG,
        ]);
    }

    function addPage()
    {
        return view('admin.home_page.new');
    }

    function trashPage()
    {
        $data = HomePage::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        $dataBG = HomePageBG::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('admin.home_page.trash',[
            'data'=>$data,
            'dataBG'=>$dataBG,
        ]);
    }

    // information Related Methods

    public function create(Request $request, NotyfFactory $flasher)
    {
        $request->validate([
            'heading'=>'required',
            'starting'=>'required',
            'skills'=>'required',
            'description'=>'required',
            'btnOneText'=>'required',
            'btnOneUrl'=>'required',
            'btnTowText'=>'required',
            'btnTowUrl'=>'required',
        ]);

        HomePage::insertGetId([
            'heading'=>$request->heading,
            'starting'=>$request->starting,
            'skills'=>$request->skills,
            'description'=>$request->description,
            'btnOneText'=>$request->btnOneText,
            'btnOneUrl'=>$request->btnOneUrl,
            'btnTowText'=>$request->btnTowText,
            'btnTowUrl'=>$request->btnTowUrl,
            'created_at'=>Carbon::now(),
        ]);

        $flasher->addSuccess('Information create successfully!');
        return redirect(route('admin.homepage'));
    }

    public function edit($id)
    {
        $data = HomePage::find($id);
        return view('admin.home_page.edit',[
            'data'=>$data,
        ]);
    }

    public function update(Request $request){
        $request->validate([
            'heading'=>'required',
            'starting'=>'required',
            'description'=>'required',
            'btnOneText'=>'required',
            'btnOneUrl'=>'required',
            'btnTowText'=>'required',
            'btnTowUrl'=>'required',
        ]);

        HomePage::find($request->id)->update([
            'heading'=>$request->heading,
            'starting'=>$request->starting,
            'skills'=>$request->skills,
            'description'=>$request->description,
            'btnOneText'=>$request->btnOneText,
            'btnOneUrl'=>$request->btnOneUrl,
            'btnTowText'=>$request->btnTowText,
            'btnTowUrl'=>$request->btnTowUrl,
        ]);

        return redirect(route('admin.homepage'));
    }

    public function status(Request $request){

        $info = HomePage::find($request->id);

        if ($info->status == 0) {
            foreach(HomePage::all() as $status){
                HomePage::find($status->id)->update([
                    'status'=>0,
                ]);
            }
            HomePage::find($request->id)->update([
                'status'=>1,
            ]);
        }else{
            HomePage::find($request->id)->update([
                'status'=>0,
            ]);
        }
        return Response::json($info);
    }

    public function softdelete($id){
        HomePage::withoutTrashed()->find($id)->update([
            'status'=>0,
        ]);
        HomePage::withoutTrashed()->find($id)->delete();
        return back();
    }

    public function restore($id){
        HomePage::onlyTrashed()->find($id)->restore();
        return back();
    }

    public function forcedelete($id){
        HomePage::onlyTrashed()->find($id)->forceDelete();
        return back();
    }



    // Background Related Methods

    public function createBg(Request $request)
    {
        $request->validate([
            'image'=>'required',
        ]);

        $imageName = 'home_bg_'.uniqid().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads/bg/'), $imageName);

        HomePageBG::insert([
            'image'=>$imageName,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }

    public function statusbg($id){

        $info = HomePageBG::find($id);

        if ($info->status == 0) {
            foreach(HomePageBG::all() as $status){
                HomePageBG::find($status->id)->update([
                    'status'=>0,
                ]);
            }
            HomePageBG::find($id)->update([
                'status'=>1,
            ]);
        }else{
            HomePageBG::find($id)->update([
                'status'=>0,
            ]);
        }
        return back();
    }

    public function softdeletebg($id){
        HomePageBG::withoutTrashed()->find($id)->update([
            'status'=>0,
        ]);
        HomePageBG::withoutTrashed()->find($id)->delete();
        return back();
    }

    public function restoreBG($id){
        HomePageBG::onlyTrashed()->find($id)->restore();
        return back();
    }

    public function forcedeleteBG($id){
        unlink(public_path('uploads/bg/'.HomePageBG::onlyTrashed()->find($id)->image));
        HomePageBG::onlyTrashed()->find($id)->forceDelete();
        return back();
    }

}
