<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\News;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $contact;

    public function index()
    {
        $category_count=Category::count();
        $post_count=Social::count();
        $blog_count=News::count();
        $photo_count=Photo::count();

        return view('admin.dashboard.dashboard',compact('category_count','post_count','blog_count','photo_count'),[
            'messages'=>Contact::orderBy('created_at','desc')->get(),
        ]);
    }

    public function message($id){
       $this->contact =  Contact::find($id);
        return view('admin.message.messages', [
            'message'=> $this->contact,
        ]);
    }

    public function deleteMessage(Request $request){
        $this->contact = Contact::find($request->id);
        $this->contact->delete();
        return back()->with('success', 'Message Deleted Successfully');
    }
    public function user_edit(){
        $user = User::find(1);

        return view('admin.user_edit.user_edit',[
            'user'=>$user,
        ]);

    }
    public function saveUserEdit(Request $request, User $user){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'sometimes|nullable|min:8',
        ]);

        User::saveUserEdit($request);
        return redirect()->back()->with('success', 'User Information Updated Successfully');
    }



}
