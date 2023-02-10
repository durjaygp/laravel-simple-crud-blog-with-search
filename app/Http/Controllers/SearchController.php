<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;
class SearchController extends Controller
{
    public function search(Request $request){
//        return $request;
//        $this->blog =DB::table('blogs')
//            ->join('categories','blogs.category_id','=','categories.id')
//            ->select('blogs.*','categories.name')
//            ->orderBy('created_at','desc')->where('blogs.title','%'.$request->search.'%')->orWhere('blogs.description','%'.$request->search.'%')
//            ->paginate(20);
        $this->blog = Blog::with('category:id,name')->where('title','like','%'.$request->search.'%')->orWhere('description','like','%'.$request->search.'%')->latest()->paginate(20);
//        return $this->blog;
        return view('frontEnd.home.home',[
            'blogs'=>$this->blog,
        ]);
    }
}
