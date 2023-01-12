<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Session;
class CategoryController extends Controller
{
    public function category(){
        return view('admin.category.manage_category',[
            'categories'=>Category::all(),
        ]);
    }
    public function addCategory(){
        return view('admin.category.add_category');
    }
    public function saveCategory(Request $request){
        $this->validate($request,[
            'category_title'=>'required',
        ]);
        Category::saveCategory($request);
        return back()->with('success', 'Category Created Successfully');
    }

    public function editCategory($id){
        $this->category = Category::find($id);
        return view('admin.category.edit_category',[
            'category'=>$this->category,
        ]);
    }

    public function updateCategory(Request $request){
        $this->validate($request,[
            'category_title'=>'required',
        ]);
        Category::updateCategory($request);
        return redirect(route('category'))->with('success', 'Category Updated Successfully');
    }

    public function deleteCategory(Request $request){
        $this->category = Category::find($request->id);
        $this->category->delete();
        return back()->with('success', 'Category Deleted Successfully');
    }

}
