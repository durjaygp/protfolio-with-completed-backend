<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Courses;
use App\Models\Philosophy;
use App\Models\Professional;
use App\Models\Social;
use App\Models\Teaching;
use Illuminate\Http\Request;

class TeachingController extends Controller
{

    public $teaching, $courses,$philosophy,$professional;

    public function teachingDetails(){
        return view('frontEnd.teaching.teaching_details',[
            'about'=>About::find(1),
            'social'=>Social::all(),
            'teaching'=>Teaching::find(1),
        ]);
    }

    public function coursesDetails(){
        return view('frontEnd.teaching.courses_details',[
            'about'=>About::find(1),
            'social'=>Social::all(),
            'courses'=>Courses::find(1),
        ]);
    }
    public function philosophyDetails(){
        return view('frontEnd.teaching.philosophy_details',[
            'about'=>About::find(1),
            'social'=>Social::all(),
            'philosophy'=>Philosophy::find(1),
        ]);
    }
    public function professionalDetails(){
        return view('frontEnd.teaching.professional_details',[
            'about'=>About::find(1),
            'social'=>Social::all(),
            'professional'=>Professional::find(1),
        ]);
    }


    public function gTeaching(){
        return view('admin.teaching.add_teaching',[
            'teaching'=>Teaching::find(1),
        ]);
    }

    public function saveTeaching(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]);

        $this->teaching= Teaching::find(1);
        $this->teaching->title = $request->title;
        $this->teaching->description = $request->description;
        $this->teaching->save();
        return back()->with('success','Teaching Post Saved Successfully');
    }


    public function coursesTeaching(){
        return view('admin.teaching.add_courses',[
            'courses'=>Courses::find(1),
        ]);
    }

    public function saveCoursesTeaching(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]);

        $this->courses= Courses::find(1);
        $this->courses->title = $request->title;
        $this->courses->description = $request->description;
        $this->courses->save();
        return back()->with('success','Courses Saved Successfully');
    }

    public function philosophyTeaching(){
        return view('admin.teaching.add_philosophy',[
            'philosophy'=>Philosophy::find(1),
        ]);
    }

    public function savePhilosophyTeaching(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]);

        $this->philosophy= Philosophy::find(1);
        $this->philosophy->title = $request->title;
        $this->philosophy->description = $request->description;
        $this->philosophy->save();
        return back()->with('success','Philosophy Teaching Saved Successfully');
    }

    public function professionalTeaching(){
        return view('admin.teaching.add_professional',[
            'professional'=>Professional::find(1),
        ]);
    }

    public function saveProfessionalTeaching(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]);

        $this->professional= Professional::find(1);
        $this->professional->title = $request->title;
        $this->professional->description = $request->description;
        $this->professional->save();
        return back()->with('success','Professional Teaching Saved Successfully');
    }
















}


