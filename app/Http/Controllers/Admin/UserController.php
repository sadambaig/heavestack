<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
class UserController extends Controller
{
    //
    public function users(){
    	$users=User::all();
    	return view('users.index',compact('users'));
    }
    public function change_status($id){
    	$user=User::findOrFail($id);
    	
    	$save='';
    	if($user->status=="active"){
    		$user->status='off';
    		$save=$user->save();
    	}else if($user->status=='in-active'){
    		$user->status='on';
    		$save=$user->save();
    	}
    	
    	if($save){
    		return redirect()->back()->with('success','user status changed ');
    	}else{
    		return redirect()->back()->with('info','somethig went wrong please try again ');
    	}
    	
    }

    public function add_new(){
    	$roles=Role::all();
    	return view('users.create',compact('roles'));
    }
    public function store(Request $request){
    	$validateDate=$request->validate([
    		'name'=>'required',
    		'username'=>'required|unique:users,username',
    		'email'=>'required|unique:users,email',
    		'icon'=>'required|image|mimes:jpg,png,gif,jpeg',
    		'role'=>'required',
    	]);
    	$password=uniqid();
    	$user=User::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'username'=>$request->username,
    		'status'=>$request->status,
    		'password'=>Hash::make($password),
    	]);
    	
    	$user->role()->attach($request->role);
    	if($request->has('icon')){
    		$icon=$request->icon;
    		$icon_name=time().'.'.$icon->getClientOriginalExtension();
    		$path=public_path().'/images/user_images/';
    		$icon->move($path,$icon_name);
    		$user->image=$icon_name;
    		$user->save();
    	}
    	if($user){
    		
	    	$data = [
	    	'name'=>$request->name,
	        'password' => $password,
	        'username' => $request->username,
	        'loging_url'=>route('login'),
	    ];
	    
	   
	    $mail=\Mail::to($request->email)->send(new \App\Mail\UserNotification($data));
    
    		return redirect('/users')->with('success','user added successfully');
    	}else{
    		return redirect()->back()->with('info','something went wrong please try again');
    	}
    }
    public function edit($id){
    	$user=User::findOrFail($id);
    	$roles=Role::all();

    	return view('users.update',compact('user','roles'));
    }
    public function update(Request $request){
    	$user=User::find($request->id);
    	$validateDate=$request->validate([
    		'name'=>'required',
    		'username'=>'required|exists:users,username',
    		'email'=>'required|exists:users,email',
    		
    		
    	]);
    	$user->name=$request->name;
    	$user->status=$request->status;
    	$user->role()->sync($request->role);
    	if($request->has('icon')){
    		$delte_path=public_path().'/images/user_images/'.$user->image;
    		if(file_exists($delte_path)){
    			unlink($delte_path);
    		}
    		$icon=$request->icon;
    		$icon_name=time().'.'.$icon->getClientOriginalExtension();
    		$path=public_path().'/images/user_images/';
    		$icon->move($path,$icon_name);
    		$user->image=$icon_name;
    		$user->save();
    	}
    	$user->save();
    	return redirect('users')->with('success','user updated successfully');
    }
    public function destroy($id){
    	$user=User::findOrFail($id);
    	$path=public_path().'/images/user_images/'.$user->image;

    	if(file_exists($path)){
    		unlink($path);
    	}
    	if($user->role){
    		$user->role()->detach();
    	}
    	$user->delete();
    	return redirect('/users')->with('users');
    }

}
