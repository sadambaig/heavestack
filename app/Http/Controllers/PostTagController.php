<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag; 
use App\Models\Categorie; 
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostTagController extends Controller
{
    //
        public function addpost(Request $request){
    
    
          $current_id= Auth::user()->id;
    
            $cat = Categorie::all();
            $tag =Tag::all();
          return view('admin.blog.addpost' ,compact('cat','tag','current_id'));
        }
    
    
        public function addposts(Request $request){
         
    
              $this->validate($request,[
               'title'=>'required',
               'slug'=>'required|unique:posts',
               'image'=>'required|max:1024px',
               'post_categorie'=>'required',
               'post_tag'=>'required',
               'description'=>'required',
               'body'=>'required',
              
              ]);
              

              $posttag = New Post();

              $posttag->users_id = $request->input('user_id');
              $posttag->title = $request->input('title');
              
              $posttag->slug = Str::slug($request->slug);
              
              $img = $request->file('image');
              $file_name = rand(555, 99999) . '.' . $img->getClientOriginalExtension();
              $img->move(public_path('upload/blogs/'), $file_name);

              $posttag->image = $file_name;
              $posttag->tags_id = $request->input('post_tag');
              $posttag->categories_id = $request->input('post_categorie');
              $posttag->meta_desc = $request->input('description');
              $posttag->description = $request->input('body');
              
              $posttag->save();
                
              return redirect()->back();
              }


              public function destroy($id)
              {
                  $user = Post::find($id);
                  $user->delete();
          
                  return redirect()->back();
              }
    }