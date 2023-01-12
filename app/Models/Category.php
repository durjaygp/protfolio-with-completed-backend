<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    public static $category;
    public static function saveCategory($request){
        self::$category = new Category();
        self::$category->category_title = $request->category_title;
        self::$category->slug =  Str::slug($request->category_title, '-');
        self::$category->save();
    }

    public static function updateCategory($request){
        self::$category = Category::find($request->id);
        self::$category->category_title = $request->category_title;
        self::$category->slug = Str::slug($request->slug, '-');
        self::$category->save();

    }


}
