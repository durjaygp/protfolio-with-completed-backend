<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public $profile;
    public function profileImage(){
        return view('admin.user_edit.profile_image',[
            'menu'=>Profile::find(1),
        ]);
    }

    public function saveProfileImage(Request $request){
        $this->validate($request,[
            'image'=>'required',
        ]);

        Profile::saveProfileImage($request);
        return redirect()->back()->with('success', 'Menu Image Updated Successfully');

    }



}
