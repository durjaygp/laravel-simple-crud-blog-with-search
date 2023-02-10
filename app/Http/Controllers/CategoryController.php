<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $cate;
    public function index(){
        return view('admin.category.add_category');
    }
    public function saveCategory(Request $request){
        $request->validate([
            'name'=> 'required|unique:categories,name',
        ]);
        Category::saveCategory($request);
        return redirect()->back()->with('success','Category Created Successfully');

    }
    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manage_category',compact('categories'));
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit_category',compact('category'));
    }

    public function updateCategory(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        Category::updateCategory($request);
        return redirect()->back()->with('success', 'Category Updated Successfully');
    }

    public function deleteCategory($id){
        $this->cate = Category::find($id);
        $this->cate->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }


}
