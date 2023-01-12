<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('admin.about.about',[
            'about'=>About::find(1),
        ]);
    }


    public function aboutMe(){
        return view('admin.about.about_me',[
            'about'=>About::find(1),
        ]);
    }

    public function updateAbout(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required',
            'short_intro'=>'required',
            'description'=>'required',
        ]);

        About::updateAbout($request);
        return back()->with('success','About Yourself Updated Successfully');
    }

}
