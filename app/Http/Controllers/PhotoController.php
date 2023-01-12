<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public $photo;
    public function addPhoto(){
        return view('admin.photo.add_photo');
    }

    public function managePhoto(){
        return view('admin.photo.manage_photo',[
            'photos'=>Photo::all(),
        ]);
    }
    public function savePhoto(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required',
        ]);

        Photo::savePhoto($request);
        return back()->with('success', 'Photo Uploaded Successfully');

    }

}
