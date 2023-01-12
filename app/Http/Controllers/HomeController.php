<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\News;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Social;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $category;
    public $categories;
    public function index(){

        return view('frontEnd.home.home',[
            'about'=>About::find(1),
            'social'=>Social::all(),
        ]);
    }

    public function service($slug){
        $post = Post::with('category')->where('slug', $slug)->first();
        $posts = Post::with('category')->latest()->limit(9)->get();


        return view('frontEnd.service.service_details',compact('post','posts'),[
            'about'=>About::find(1),
            'social'=>Social::all(),
        ]);
    }
    public function services($slug){
        $category = Category::where('slug', $slug)->first();
        if ($category){
            $posts = Post::where('category_id',$category->id)->paginate(9);
            return view('frontEnd.service.services',compact('category','posts'),[
                'about'=>About::find(1),
                'social'=>Social::all(),
            ]);
        }else{
            return redirect()->route('home');
        }





    }

    public function about(){
        return view('frontEnd.about.about',[
            'about'=>About::find(1),
            'social'=>Social::all(),
        ]);
    }
//    public function teaching(){
//        return view('frontEnd.teaching.teaching',[
//            'about'=>About::find(1),
//            'social'=>Social::all(),
//        ]);
//    }


    public function blog(){
        return view('frontEnd.blog.blog',[
            'about'=>About::find(1),
            'social'=>Social::all(),
            'blogs'=> News::all(),
        ]);
    }

    public function blogDetails($slug){
        $blog = News::with('about')->where('slug', $slug)->first();
        //$blog = News::find($slug);
        return view('frontEnd.blog.blog_details',compact('blog'),[
            'about'=>About::find(1),
            'social'=>Social::all(),
        ]);
    }

    public function contact(){
        return view('frontEnd.contact.contact',[
            'about'=>About::find(1),
            'social'=>Social::all(),
        ]);
    }

    public function photo(){
        return view('frontEnd.photo.photo',[
            'about'=>About::find(1),
            'social'=>Social::all(),
            'photos'=>Photo::all(),
        ]);
    }


    public function cv(){
        return view('frontEnd.cv.cv',[
            'about'=>About::find(1),
            'social'=>Social::all(),
        ]);
    }








}
