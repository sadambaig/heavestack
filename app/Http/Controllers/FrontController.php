<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class FrontController extends Controller
{
    //
    public function index(){
    	return view('front.index');
    }
    public function career(){
    	$jobs=Job::where('active','1')->get();
    	return view('front.career',compact('jobs'));
    }
    public function contact(){
    	return view('front.contact');
    }
    public function detail($id){
    	$job=Job::find($id);
    	return view('front.details',compact('job'));
    }
}
