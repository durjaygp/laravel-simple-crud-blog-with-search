<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
//use App\Models\Blog;

class HomeController extends Controller
{
    public $blog;
    public function index(){

//        $this->blog =DB::table('blogs')
//            ->join('categories','blogs.category_id','=','categories.id')
//            ->select('blogs.*','categories.name')
//            ->orderBy('created_at','desc')
//            ->paginate(20);
//            ->get();
         $this->blog = Blog::with('category:id,name')->latest()->paginate(20);

        return view('frontEnd.home.home',[
            'blogs'=>$this->blog,
        ]);

    }

    public function blogDetails($slug){
        $blog = Blog::where('slug', $slug)->first();
        $blogs = Blog::orderBy('created_at','desc')->take(5)->get();
        return view('frontEnd.blog.blog-details',compact('blog','blogs'));
    }

    public function categoryBlog($slug){
        $cat = Category::where('slug',$slug)->first();
        if ($cat){
            $blogs = Blog::where('category_id',$cat->id)->orderBy('created_at','desc')->paginate(20);
            return view('frontEnd.category.category', compact('cat','blogs'));
        }else{
            return redirect()->route('home');
        }

    }


}
