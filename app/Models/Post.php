<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;
    public static $post, $image, $imageName, $imageUrl, $directory;
    public static function savePost($request){
        self::$post = new Post();
        self::$post->post_title = $request->post_title;
        self::$post->slug = Str::slug($request->post_title, '-');
        self::$post->category_id = $request->category_id;
       // self::$post->image = self::saveImg($request);
        self::$post->description = $request->description;
        self::$post->save();
    }

//    public static function saveImg($request){
//        self::$image = $request->file('image');
//        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
//        self::$directory = 'backEnd/upload/post-image/';
//        self::$imageUrl = self::$directory.self::$imageName;
//        self::$image->move(self::$directory,self::$imageName);
//        return self::$imageUrl;
//
//    }

    public static function updatePost($request){
        self::$post = Post::find($request->id);
        self::$post->post_title = $request->post_title;
        self::$post->slug = Str::slug($request->post_title, '-');
        self::$post->category_id = $request->category_id;
//        if ($request->file('image')!= null){
//            self::$post->image = self::saveImg($request);
//        }
        self::$post->description = $request->description;
        self::$post->save();

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
