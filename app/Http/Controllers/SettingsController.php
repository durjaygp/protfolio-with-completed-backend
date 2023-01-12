<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function setting(){

        return view('admin.settings.settings',[
           'set'=> Settings::find(1),
        ]);
    }
    public function saveSettings(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'google'=>'required',
            'author'=>'required',
            'tags'=>'required',
            'footer'=>'required',
            'cv'=>'nullable',
            'image'=>'nullable',
        ]);

        Settings::saveSettings($request);
        return redirect()->back()->with('success', 'Settings Updated Successfully');
    }


}
