<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function addtag(Request $request){
         

    
        $this->validate($request,[
            'tag_name'=>'required'
        ]);

        $tag = new Tag();
        $tag->name = $request->input('tag_name');
        $tag->save();
        return redirect()->back();

    }
}