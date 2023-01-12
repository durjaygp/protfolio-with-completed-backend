<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    public static $setting,$image, $imageName, $imageUrl, $directory;
    public static function saveSettings($request){
        self::$setting = Settings::find(1);
        self::$setting->name= $request->name;
        self::$setting->description= $request->description;
        self::$setting->google= $request->google;
        self::$setting->author= $request->author;
        self::$setting->tags= $request->tags;
        self::$setting->footer= $request->footer;
        self::$setting->cv= $request->cv;
        if ($request->file('image')!=null){
            self::$setting->image = self::saveImg($request);
        }
        self::$setting->save();


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
