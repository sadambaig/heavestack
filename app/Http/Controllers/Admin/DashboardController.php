<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;
use App\Models\Job;
class DashboardController extends Controller
{
    //
    public function dashboard(){
    	$user=User::count();
    	$job=Job::count();
    	$app=Application::count();
    	return view('admin.dashboard',compact('user','job','app'));
    }
}
