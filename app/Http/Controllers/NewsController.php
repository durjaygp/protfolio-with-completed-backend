<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public $news;
    public function news(){
        return view('admin.news.news',[
            'blogs'=>News::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    public function addNews(){
        return view('admin.news.add_news');
    }
    public function saveNews(Request $request){
        $this->validate($request,[
            'blog_title'=>'required',
            'description'=>'required',
        ]);

        News::saveNews($request);
        return back()->with('success', 'New Blog Created Successfully');
    }

    public function editNews($id){
        return view('admin.news.edit',[
            'news'=>News::find($id),
        ]);
    }

    public function updateNews(Request $request){
        $this->validate($request,[
            'blog_title'=>'required',
            'description'=>'required',
        ]);

        News::updateNews($request);
        return back()->with('success', 'Blog Updated Successfully');
    }

    public function deleteNews(Request $request){
        $this->news = News::find($request->id);
//        if ($this->news->image != null){
//            unlink($this->news->image);
//        }
        $this->news->delete();
        return back()->with('success', 'Blog Deleted Successfully');
    }



}
