<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Job;
use Alert;
use App\Models\Application;
class CareerController extends Controller
{
    //
    public function career(){
    	$jobs=Job::all();
    	 return view('admin.career.index',compact('jobs'));
    }
    public function create(){
    	return view('admin.career.create');
    }
    public function store(Request $request){
    	$validateData=$request->validate([
    		'title'=>'required',
    		'icon'=>'required|image|mimes:jpg,png,jpeg,gif',
    		'desc'=>'required',
    		's_desc'=>'required',
    		'type'=>'required',
    		'last_date'=>'required',
    		'tags'=>'required',
    		'salary'=>'required',

    	]);

    	
    	
    	$jobs=Job::create([
    		'user_id'=>Auth::user()->id,
    		'title'=>$request->title,
    		's_desc'=>$request->s_desc,
    		'type'=>$request->type,
    		'desc'=>$request->desc,
    		'last_date'=>$request->last_date,
    		'salary'=>$request->salary,
    		'tags'=>json_encode($request->tags),
    		'active'=>$request->active,
    	]);
    	if($jobs){
    		if($request->has('icon')){
    		$icon=$request->icon;
    		$name=time().'.'.$icon->getClientOriginalExtension();
    		$path=public_path().'/images/job_images/';
    		$icon->move($path,$name);
    		$jobs->icon=$name;
    		$jobs->save();
    	   }
    	   return redirect('/careers')->with('success','successfully created');
    	}else{
    		return redirect()->back()->with('info','something went wrong please try again');
    	}
    	

    }
    public function changeJobStatus($id){
    	$job=Job::findOrFail($id);
    	if($job->active=='active'){
    		$job->active='off';
    	}else if($job->active=='in-active'){
    		$job->active='on';
    	}
    	$job->save();
    	return redirect()->back()->with('success','job status changed ');
    }
    public function destroy($id){
    	$job=Job::findOrFail($id);
    	
    	$path=public_path().'/images/job_images/'.$job->icon;
    	if(file_exists($path)){
    		unlink($path);
    	}
    	$job->delete();
    	return redirect()->back()->with('success','job deleted');
    }
    public function show($id){

    	$job=Job::findOrFail($id);
        return view('admin.career.update',compact('job'));
    }
    public function update(Request $request){
    	
    	$jobs=Job::findOrFail($request->id);
    	$validateData=$request->validate([
    		'title'=>'required',
    		'desc'=>'required',
    		's_desc'=>'required',
    		'type'=>'required',
    		'last_date'=>'required',
    		'salary'=>'required',

    	]);
    	if($request->has('icon')){
    		$request->validate([
    			'icon'=>'image|mimes:jpg,png,jpeg',
    		]);
    		$delete_path=public_path().'/images/job_images/'.$jobs->icon;
    		if(file_exists($delete_path)){
    			unlink($delete_path);
    		}
    		$icon=$request->icon;
    		$name=time().'.'.$icon->getClientOriginalExtension();
    		$path=public_path().'/images/job_images/';
    		$icon->move($path,$name);
    		$jobs->icon=$name;
    		$jobs->save();

    	   }
    	   if($request->tags){
    	   	$jobs->tags=json_encode($request->tags);
    	   	$jobs->save();
    	   }
    	   $jobs->title=$request->title;
    	   $jobs->s_desc=$request->s_desc;
    	   $jobs->desc=$request->desc;
    	   $jobs->type=$request->type;
    	   $jobs->last_date=$request->last_date;
    	   
    	   $jobs->salary=$request->salary;
    	   $jobs->active=$request->active;
    	   $save=$jobs->save();
    	   if($save){
    	   	return redirect('/careers')->with('success','updated successfully');
    	   }else{
    	   	return redirect()->back()->with('info','something went wrong please try again');
    	   }

    }
    public function getApplications(){
    	$applications=Application::all();
    	return view('admin.applications.index',compact('applications'));
    }
    public function change_pending($id){
        $app=Application::find($id);
        $app->status=1;
        $app->save();
        $data['title']='Congrats';
        $data['message']='you are short listed for interview';
        $mail=\Mail::to($app->email)->send(new \App\Mail\JobStatus($data));
        return redirect()->back()->with('sucess','status changed');

    }
    public function change_process($id){
        $app=Application::find($id);
        $app->status=2;
        $app->save();
        $data['title']='Congrats';
        $data['message']='select for the post of '.$app->job->title;
        $mail=\Mail::to($app->email)->send(new \App\Mail\JobStatus($data));
        return redirect()->back()->with('sucess','status changed');

    }
    public function application_destroy($id){
        $app=Application::find($id);
        $app->delete();
        return redirect()->back()->with('info','job deleted successfully');
    }
}
