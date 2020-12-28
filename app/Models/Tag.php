<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostTag;

class Tag extends Model
{
    use HasFactory;
    protected $table ='tags';



    public function tag_rel(){
    
   return $this->hasMany(PostTag::class,'tags_id','id');

    }
}