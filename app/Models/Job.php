<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table='jobs';
    protected $fillable=['user_id','title','icon','desc','s_desc','type','last_date','tags','active','salary'];

   public function setActiveAttribute($value)
    {
        if($value=='on'){
            $active=1;
        }else{
            $active=0;
        }
        $this->attributes['active'] = $active;
    }
    public function getActiveAttribute($value){
        if($value==1){
            return $value='active';
        }else{
            return $value='in-active';
        }
    }

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }
    public function applications(){
        return $this->hasMany('App\Model\Application');
    }
}
