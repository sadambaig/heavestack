<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;


class CategorieController extends Controller
{
    public function addcategorie(Request $request){
   

        $this->validate($request,[
            'categorie_name'=>'required'
        ]);

        $cat = new Categorie();
        $cat->cat_name = $request->input('categorie_name');
        $cat->save();

        return redirect()->back();

    }
}