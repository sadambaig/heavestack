<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\FrontController;
Use App\Http\Controllers\ApplyJobController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostTagController;
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

Route::get('/',[FrontController::class,'index']);
Route::get('/career',[FrontController::class,'career'])->name('front.career');
Route::get('/contact',[FrontController::class,'contact'])->name('front.contact');
Route::get('/detail/{id}',[FrontController::class,'detail'])->name('fornt.detail');
Route::get('/blog',[FrontController::class,'blog'])->name('front.blog');
Route::get('/social',[ApplyJobController::class,'redirect']);
Route::get('/callback',[ApplyJobController::class,'callback']);
Route::post('/apply-job',[ApplyJobController::class,'Apply'])->name('job.apply');
//////////////////////////////////////////////////////////////////////////////
Route::group(['middleware'=>['auth','active']],function(){
	Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
	Route::get('/careers',[CareerController::class,'career'])->name('admin.career');
	Route::get('/create-job',[CareerController::class,'create'])->name('job.create');
	Route::post('/job-store',[CareerController::class,'store'])->name('job.store');
	Route::get('/change-job-status/{id}',[CareerController::class,'changeJobStatus'])->name('change.job.status');
	Route::get('/job-delete/{id}',[CareerController::class,'destroy'])->name('job-delete');
	Route::get('/job-show/{id}',[CareerController::class,'show'])->name('job.show');
	Route::post('/job-update',[CareerController::class,'update'])->name('job.update');
	Route::get('/users',[UserController::class,'users'])->name('users');
	Route::get('/change-user-status/{id}',[UserController::class,'change_status'])->name('change.user.status');
	Route::get('add-new-user',[UserController::class,'add_new'])->name('add.new.user');
	Route::post('/user-store',[UserController::class,'store'])->name('user.store');
	Route::get('/user-edit/{id}',[UserController::class,'edit'])->name('user.edit');
	Route::post('/user-update',[UserController::class,'update'])->name('user.update');
	Route::get('/user-delete/{id}',[UserController::class,'destroy'])->name('user.delete');
	Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
	Route::post('/update-personal',[ProfileController::class,'upatePersonal'])->name('update.personal');
	Route::post('/update-password',[ProfileController::class,'updatePassword'])->name('update.password');
	Route::post('/update-image',[ProfileController::class,'update_iamge'])->name('update.image');
	Route::get('/applications',[CareerController::class,'getApplications'])->name('applications');
	Route::get('/change-pending/{id}',[CareerController::class,'change_pending'])->name('change.pending');
	Route::get('/change-process/{id}',[CareerController::class,'change_process'])->name('change.process');
	Route::get('/application-delete/{id}',[CareerController::class,'application_destroy'])->name('application.delete');
	//////////////////////blog route ////////////////////
	Route::get('/blog',[BlogController::class,'blog'])->name('blog');
	Route::get('/addblog',[BlogController::class,'addblog'])->name('addblog');
	Route::post('/addblogs',[BlogController::class,'addblogs'])->name('addblogs');
	Route::post('/addcategorie',[CategorieController::class,'addcategorie'])->name('addcategorie');
	Route::post('/addtag',[TagController::class,'addtag'])->name('addtag');
	Route::get('/addpost',[PostTagController::class,'addpost'])->name('addpost');
	Route::post('/addposts',[PostTagController::class,'addposts'])->name('addposts');
	Route::post('/posts/destroy/{id}', [PostTagController::class,'destroy']) ->name('posts.destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
