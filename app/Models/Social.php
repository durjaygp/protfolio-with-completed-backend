<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    public static $social;
    public static function saveSocial($request){
        self::$social = new Social();
        self::$social->social_title= $request->social_title;
        self::$social->social_icon= $request->social_icon;
        self::$social->social_link= $request->social_link;
        self::$social->save();
    }
    public static function updateSocial($request){
        self::$social = Social::find($request->id);
        self::$social->social_title= $request->social_title;
        self::$social->social_icon= $request->social_icon;
        self::$social->social_link= $request->social_link;
        self::$social->save();
    }
}
