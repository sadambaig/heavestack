<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table='applications';
    protected $fillable=['job_id','name','email','phone','about','status','email_sent'];
    public function job(){
    	return $this->belongsTo('App\Models\Job');
    }
    public function getStatusAttribute($value){
    	if($value==0){
            return $value='Pending';
        }else if($value==1){
            return $value='Process';
        }else{
        	return $value='Accepted';
        }
    }
    public function getEmailSentAttribute($value){
    	if($value==0){
    		return $value='Email Sent';
    	}
    }
}
