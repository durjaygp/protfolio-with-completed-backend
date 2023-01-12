<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public static $profile,$image, $imageName, $imageUrl, $directory;
    public static function saveProfileImage($request){
        self::$profile = Profile::find(1);
        if ($request->file('image')!=null){
            self::$profile->image = self::saveImg($request);
        }
        self::$profile->save();


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
