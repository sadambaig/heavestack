<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CareerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'auth'],function(){
	Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
	Route::get('/careers',[CareerController::class,'career'])->name('admin.career');
	Route::get('/create-job',[CareerController::class,'create'])->name('job.create');
	Route::post('/job-store',[CareerController::class,'store'])->name('job.store');
	Route::get('/change-job-status/{id}',[CareerController::class,'changeJobStatus'])->name('change.job.status');
	Route::get('/job-delete/{id}',[CareerController::class,'destroy'])->name('job-delete');
	Route::get('/job-show/{id}',[CareerController::class,'show'])->name('job.show');
	Route::post('/job-update',[CareerController::class,'update'])->name('job.update');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
