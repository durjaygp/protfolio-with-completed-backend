<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public $social;
    public function socialMedia(){
        return view('admin.social.manage_social',[
            'socials'=>Social::all(),
        ]);
    }
    public function addSocial(){
        return view('admin.social.add_social');
    }

    public function saveSocial(Request $request){
        $this->validate($request,[
            'social_title'=>'required',
            'social_icon'=>'required',
            'social_link'=>'required',
        ]);

        Social::saveSocial($request);
        return back()->with('success', 'New Social Media created Successfully');

    }
    public function editSocial($id){
        return view('admin.social.edit_social',[
            'social'=>Social::find($id),
        ]);
    }
    public function updateSocial(Request $request){
        Social::updateSocial($request);
        return back()->with('success','Social Media updated Successfully');
    }

    public function deleteSocial(Request $request){
        $this->social = Social::find($request->id);
        $this->social->delete();
        return back()->with('success', 'Social Media Deleted Successfully');
    }
}
