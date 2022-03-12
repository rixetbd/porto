<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Portfolio;
use Carbon\Carbon;
use Flasher\Notyf\Prime\Notyf;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function index(){
        $data = Portfolio::orderBy('id', 'DESC')->get();
        return view('admin.portfolio.index',[
           'data'=>$data,
        ]);
    }

    public function addPage()
    {
        return view('admin.portfolio.new');
    }

    public function trashPage()
    {
        $data = Portfolio::onlyTrashed()->get();
        return view('admin.portfolio.trash',[
            'data'=>$data,
        ]);
    }

    public function create(Request $request, NotyfFactory $flasher)
    {
        $request->validate([
            'title'=>'required',
            'technology'=>'required',
            'thumbnail'=>'required',
            'description'=>'required',
        ]);

        $new_id = Portfolio::insertGetId([
            'author'=>Auth::id(),
            'title'=>$request->title,
            'technology'=>$request->technology,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $file_name = $new_id.'_Project_'.uniqid().'.'.$request->thumbnail->getClientOriginalExtension();
        Image::make($request->thumbnail)->fit(960, 540)->save(public_path('uploads/portfolio/'.$file_name));

        Portfolio::withoutTrashed()->find($new_id)->update([
            'thumbnail'=>$file_name,
        ]);

        if ($request->preview_link != '') {
            Portfolio::withoutTrashed()->find($new_id)->update([
                'preview_link'=>$request->preview_link,
            ]);
        }

        $flasher->addSuccess('Portfolio create successfully!');
        return back();
    }


    public function status($id)
    {
        $info = Portfolio::find($id);
        if ($info->status == 0) {
            Portfolio::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Portfolio::find($id)->update([
                'status'=>0,
            ]);
        }
        return back();
    }

    public function softdelete($id, NotyfFactory $flasher)
    {
        Portfolio::find($id)->update([
            'status'=>0,
        ]);
        Portfolio::find($id)->delete();
        $flasher->addSuccess('Moved To Trash');
        return back();
    }

    public function forcedelete($id, NotyfFactory $flasher)
    {
        $img = Portfolio::onlyTrashed()->find($id);
        unlink(public_path('uploads/portfolio/'.$img->thumbnail));
        Portfolio::onlyTrashed()->find($id)->forcedelete();
        $flasher->addSuccess('Delete Successfully');
        return back();
    }

    public function restore($id, NotyfFactory $flasher)
    {
        Portfolio::onlyTrashed()->find($id)->restore();
        $flasher->addSuccess('Restore Successfully');
        return back();
    }




}
