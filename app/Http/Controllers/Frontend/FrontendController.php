<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutInfo;
use App\Models\Admin\Address;
use App\Models\Admin\Blog;
use App\Models\Admin\Counter;
use App\Models\Admin\Education;
use App\Models\Admin\Experience;
use App\Models\Admin\HomePage;
use App\Models\Admin\HomePageBG;
use App\Models\Admin\Portfolio;
use App\Models\Admin\Service;
use App\Models\Admin\Skills;
use App\Models\Admin\Social;
use App\Models\Admin\Testimonials;
use App\Models\frontend\BlogComment;
use App\Models\frontend\PortfolioComment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $data = HomePage::where('status' ,'=' , '1')->get();
        $dataBG = HomePageBG::where('status' ,'=' , '1')->first();

        $user_info = '';
        if ($data != '' ) {
            foreach ($data as $user) {
                $user_info = $user;
            }
        }
        return view('frontend.index',[
            'user_info'=>$user_info,
            'dataBG'=>$dataBG,
        ]);
    }

    function about(){
        $basic_info = AboutInfo::where('status', '=', '1')->first();
        $counter = Counter::where('status', '=', '1')->first();
        $skills = Skills::where('status', '1')->get();
        $education = Education::where('status', '1')->get();
        $experience = Experience::where('status', '1')->get();
        $service = Service::where('status', '1')->get();
        $testimonials = Testimonials::all();
        return view('frontend.about',[
            'basic_info'=>$basic_info,
            'counter'=>$counter,
            'skills'=>$skills,
            'education'=>$education,
            'experience'=>$experience,
            'service'=>$service,
            'testimonials'=>$testimonials,
        ]);
    }

    function contactPage()
    {
        $address_info = Address::where('status', '=' ,'1' )->first();
        $social_info = Social::where('status', '=' ,'1' )->first();
        return view('frontend.contact',[
            'address_info'=>$address_info,
            'social_info'=>$social_info,
        ]);
    }

    function portfolio()
    {
        $portfolio_info = Portfolio::where('status', 1)->orderBy('id', 'DESc')->simplePaginate(6);
        return view('frontend.portfolio',[
            'portfolio_info'=>$portfolio_info,
        ]);
    }

    public function portfolioView($id)
    {
        $portfolio = Portfolio::withoutTrashed()->find($id);
        $portfolio_comment = PortfolioComment::where('portfolio_id', $id)->get();
        return view('frontend.portfolio-single', [
            'portfolio'=>$portfolio,
            'portfolio_comment'=>$portfolio_comment,
        ]);
    }

    public function portfolioComment(Request $request)
    {
        $request->validate([
            'portfolio_id'=>'required',
            'viewer_name'=>'required',
            'viewer_email'=>'required',
            'comment'=>'required',
        ]);

        PortfolioComment::insert([
            'portfolio_id'=>$request->portfolio_id,
            'viewer_name'=>$request->viewer_name,
            'viewer_email'=>$request->viewer_email,
            'comment'=>$request->comment,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }

    public function blogPage()
    {
        $blog = Blog::where('status', 1)->orderBy('updated_at', 'DESC')->paginate(6);
        return view('frontend.blog',[
            'blog'=>$blog,
        ]);
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);
        $blog_comment = BlogComment::where('blog_id', $id)->get();

        return view('frontend.blog-post',[
            'blog'=>$blog,
            'blog_comment'=>$blog_comment,
        ]);
    }

    public function blogComment(Request $request)
    {
        $request->validate([
            'blog_id'=>'required',
            'viewer_name'=>'required',
            'viewer_email'=>'required',
            'comment'=>'required',
        ]);

        BlogComment::insert([
            'blog_id'=>$request->blog_id,
            'viewer_name'=>$request->viewer_name,
            'viewer_email'=>$request->viewer_email,
            'comment'=>$request->comment,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }
}
