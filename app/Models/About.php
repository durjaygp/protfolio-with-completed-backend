<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class About extends Model
{
    use HasFactory;
    public static $about, $image, $imageName, $imageUrl, $directory;
    public static function updateAbout($request){
        self::$about = About::find(1);
        self::$about->name = $request->name;
        self::$about->title = $request->title;
        self::$about->short_intro = $request->short_intro;
        self::$about->description = $request->description;
        if ($request->file('image')!=null){
            self::$about->image = self::saveImg($request);
        }
        self::$about->save();


    }

    public static function saveImg($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'backEnd/upload/profile-image/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;

    }


}
