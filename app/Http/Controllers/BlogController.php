<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Blog;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function blog(){

      

      $posts = DB::table('posts')
      ->join('categories', 'posts.categories_id', '=', 'categories.id')
      ->join('tags', 'posts.tags_id', '=', 'tags.id')
      ->get();


    
    return view('admin.blog.index',compact('posts'));
    }

    
    public function addblog(){
        return view('admin.blog.addblog');
        }


  // Add Blogs details

        public function addblogs(Request $req){

            $this->validate($req,[
                'title'=>'required',
                'slug'=>'required',
                'image'=>'required|max:1024',
              ]);

            if($req->isMethod('post')){

              $data=  $req->all();

              $img = $req->file('image');
              $file_name = rand(555, 99999) . '.' . $img->getClientOriginalExtension();
              $img->move(public_path('upload/blogs/'), $file_name);
            
              $blog = new Blog();
              $blog->user_id =1;
              $blog->title =$data['title'];
              $blog->slug =$data['slug'];
              $blog->image =$file_name;
              $blog->short_description=$data['description'];
              $blog->body =$data['body'];
               
              $blog->save();
              Alert::success('Sucessfully Added', 'Success Message');
              return redirect()->back();

            }
        }
}