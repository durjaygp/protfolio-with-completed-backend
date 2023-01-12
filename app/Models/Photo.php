<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    public static $photo,$image, $imageName, $imageUrl, $directory;
    public static function savePhoto($request){
        self::$photo = new Photo();
        self::$photo->title = $request->title;
        self::$photo->image = self::saveImg($request);
        self::$photo->save();

    }

    private static function saveImg($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'backEnd/upload/blog-image/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }


}
