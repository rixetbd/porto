<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Flasher\Notyf\Prime\NotyfFactory;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function index(){
        $data = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.index',[
           'data'=>$data,
        ]);
    }

    public function addPage()
    {
        return view('admin.blog.new');
    }

    public function trashPage()
    {
        $data = Blog::onlyTrashed()->get();
        return view('admin.blog.trash',[
            'data'=>$data,
        ]);
    }

    public function create(Request $request, NotyfFactory $flasher)
    {
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'thumbnail'=>'required',
            'description'=>'required',
            'status'=>'required',
        ]);

        $new_id = Blog::insertGetId([
            'author'=>Auth::id(),
            'title'=>$request->title,
            'category'=>$request->category,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        $file_name = $new_id.'_Blog_'.uniqid().'.'.$request->thumbnail->getClientOriginalExtension();
        Image::make($request->thumbnail)->fit(960, 540)->save(public_path('uploads/blog/'.$file_name));

        Blog::withoutTrashed()->find($new_id)->update([
            'thumbnail'=>$file_name,
            'status'=>$request->status,
        ]);

        $flasher->addSuccess('Blog create successfully!');
        return back();
    }


    public function status($id)
    {
        $info = Blog::find($id);
        if ($info->status == 0) {
            Blog::find($id)->update([
                'status'=>1,
            ]);
        }else{
            Blog::find($id)->update([
                'status'=>0,
            ]);
        }
        return back();
    }

    public function softdelete($id, NotyfFactory $flasher)
    {
        Blog::find($id)->update([
            'status'=>0,
        ]);
        Blog::find($id)->delete();
        $flasher->addSuccess('Moved To Trash');
        return back();
    }

    public function forcedelete($id, NotyfFactory $flasher)
    {
        $img = Blog::onlyTrashed()->find($id);
        unlink(public_path('uploads/blog/'.$img->thumbnail));
        Blog::onlyTrashed()->find($id)->forcedelete();
        $flasher->addSuccess('Delete Successfully');
        return back();
    }

    public function restore($id, NotyfFactory $flasher)
    {
        Blog::onlyTrashed()->find($id)->restore();
        $flasher->addSuccess('Restore Successfully');
        return back();
    }
}
