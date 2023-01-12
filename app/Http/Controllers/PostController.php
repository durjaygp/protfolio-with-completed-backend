<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public $post;

    public function post(){

        $this->post =DB::table('posts')
            ->join('categories','posts.category_id','=','categories.id')
            ->select('posts.*','categories.category_title')
            ->get();

        return view('admin.post.posts',[
            'posts'=>$this->post,
        ]);
    }


    public function addPost(){
        return view('admin.post.add_post',[
            'categories'=>Category::all(),
        ]);
    }
    public function savePost(Request $request){
        $this->validate($request,[
            'post_title'=>'required',
            'category_id'=>'required',
            'description'=>'required',
        ]);

        Post::savePost($request);
        return back()->with('success', 'Post Created Successfully');
    }

    public function editPost($id){
        $this->post =Post::find($id);
        return view('admin.post.edit_posts',[
           'categories'=> Category::all(),
            'posts'=>$this->post,
        ]);
    }

    public function updatePost(Request $request){
        $this->validate($request,[
            'post_title'=>'required',
            'category_id'=>'required',
            'description'=>'required',
        ]);

        Post::updatePost($request);
        return back()->with('success', 'Post Updated Successfully');
    }
    public function deletePost(Request $request){
        $this->post = Post::find($request->id);
//        if ($this->post->image != null){
//            unlink($this->post->image);
//        }
        $this->post->delete();
        return back()->with('success', 'Post Deleted Successfully');

    }
}
