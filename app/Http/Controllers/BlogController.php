<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Cache;

class BlogController extends Controller
{
    public $blog;
    public function manageBlog(){

        $this->blog =DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->select('blogs.*','categories.name')
            ->orderBy('created_at','desc')
            ->get();

        return view('admin.blog.manage_blog',[
            'blogs'=>$this->blog,
        ]);
    }

    public function addBlog(){
        $categories = Category::all();
        return view('admin.blog.add_blog',compact('categories'));
    }

    public function saveBlog(Request $request){
        $request->validate([
           'title'=>'required|unique:blogs,title',
           'category_id'=>'required',
           'image'=>'required',
           'description'=>'required',
        ]);

        Blog::saveBlog($request);
        return redirect()->back()->with('success', 'Blog Created Successfully');
    }
    public function editBlog($id){
        $categories = Category::all();
        $blog = Blog::find($id);
        return view('admin.blog.edit_blog',compact('blog','categories'));
    }

    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        //if ($this->blog->image!=null)
        return redirect()->back()->with('success','Blog Updated Successfully');
    }

    public function deleteBlog(Request $request){
        $this->blog = Blog::find($request->id);
        if ($this->blog->image!=null){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('success','Blog Deleted Successfully');
    }

}
