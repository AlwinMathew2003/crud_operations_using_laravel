<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestUser;

class UserController extends Controller
{
    public function index(){
       $title = "Laravel";
       return view('pages.demo',compact('title'));
    }

    public function home(){
        return view('pages.home');
    }

    public function get(){
        $users = TestUser::all();
        // dd($users);
        return view('pages.demo',compact('users'));
    }

    public function edit($id){
        $user = TestUser::find($id);
        return view('pages.edit',compact('user'));

    }

    public function update(Request $request,$id){
        $user = TestUser::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->update();
        return redirect('')->with('status',"Updated Successfully");
    }

    public function delete($id){
        $user = TestUser::find($id);
        $user->delete();
        return redirect('')->with('status','Deleted Successfully');
    }
    public function store(Request $request){
        $user = new TestUser;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect('')->with('status',"User added successfully");
    }
}
