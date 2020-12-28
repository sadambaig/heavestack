<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostTag;

class Categorie extends Model
{
    use HasFactory;
    protected $table ='categories';


    
public function categ(){

    $this->hasMany(PostTag::class,'categories_id','id');
}
}