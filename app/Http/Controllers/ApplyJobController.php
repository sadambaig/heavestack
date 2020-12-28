<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\Application;
class ApplyJobController extends Controller
{
    //
    public function redirect(){
    	return Socialite::driver('linkedin')->redirect();
    }
    public function callBack(){
    	 try {
            $linkdinUser = Socialite::driver('linkedin')->user();
            dd($linkdinUser);
            // $existUser = User::where('email',$linkdinUser->email)->first();
            // if($existUser) {
            //     Auth::loginUsingId($existUser->id);
            // }
            // else {
            //     $user = new User;
            //     $user->name = $linkdinUser->name;
            //     $user->email = $linkdinUser->email;
            //     $user->linkedin_id = $linkdinUser->id;
            //     $user->password = md5(rand(1,10000));
            //     $user->save();
            //     Auth::loginUsingId($user->id);
            // }
            // return redirect()->to('/home');
        } 
        catch (Exception $e) {
            return 'error';
        }

    }
    public function Apply(Request $request){
    	
    	$application=Application::create([
    		'job_id'=>$request->job_id,
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'phone'=>$request->phone,
    		'about'=>$request->about,
    	]);
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['document']=$request->cv;
    	$data['phone']=$request->phone;
    	$data['about']=$request->about;

    	$mail=\Mail::to($request->email)->send(new \App\Mail\SendResume($data));
    	if($mail){
    		return redirect()->back();
    	
    	}else{
    		return redirect()->back();
    	}
    }
}
