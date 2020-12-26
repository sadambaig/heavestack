<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
class ProfileController extends Controller
{
    //
    public function profile(){
    	$user=User::findOrFail(Auth::user()->id);
    	return view('users.profile',compact('user'));
    }
    public function update_iamge(Request $request){
    	$user=User::findOrFail(Auth::user()->id);
    	$request->validate([
    		'image'=>'required|image|mimes:jpg,png,gif,jpeg',
    	]);

    	if($request->has('image')){
    		$delte_path=public_path().'/images/user_images/'.$user->image;
    		if(file_exists($delte_path)){
    			unlink($delte_path);
    		}
    		$icon=$request->image;
    		$icon_name=time().'.'.$icon->getClientOriginalExtension();
    		$path=public_path().'/images/user_images/';
    		$icon->move($path,$icon_name);
    		$user->image=$icon_name;
    		$user->save();
    		return redirect()->back()->with('success','image updated');
    	}

    }
    public function updatePassword(Request $request){
    	$user=User::findOrFail(Auth::user()->id);

    	$request->validate([
    		'current'=>'required',
    		'newpass'=>'required',
    		'c_pass'=>'required|same:newpass'
    	]);

    	$user->password=Hash::make($request->newpass);
    	$user->save();
    	return redirect()->back()->with('success','updated');
    }
    public function upatePersonal(Request $request){
    	$user=User::findOrFail(Auth::user()->id);

    	$request->validate([
    		'name'=>'required',
    		'username'=>'required|exists:users,username',
    		'email'=>'required|exists:users,email',
    	]);

    	$user->name=$request->name;
    	$user->save();
    	return redirect()->back()->with('success','updated');

    }
}
