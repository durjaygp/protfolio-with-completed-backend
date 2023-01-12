<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;
    public static $news,$image, $imageName, $imageUrl, $directory;
    public static function saveNews($request){
        self::$news = new News();
        self::$news->blog_title = $request->blog_title;
        self::$news->slug = Str::slug($request->blog_title,'-');
        self::$news->description = $request->description;
        //self::$news->image = self::saveImg($request);
        self::$news->save();
    }
//    public static function saveImg($request){
//        self::$image = $request->file('image');
//        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
//        self::$directory = 'backEnd/upload/blog-image/';
//        self::$imageUrl = self::$directory.self::$imageName;
//        self::$image->move(self::$directory,self::$imageName);
//        return self::$imageUrl;
//    }

    public static function updateNews($request){
        self::$news = News::find($request->id);
        self::$news->blog_title = $request->blog_title;
        self::$news->slug = Str::slug($request->blog_title,'-');
        self::$news->description = $request->description;
//        if ($request->file('image')!= null){
//            self::$news->image = self::saveImg($request);
//        }

        self::$news->save();

    }

    public function about(){
        return $this->belongsTo(About::class);
    }




}
