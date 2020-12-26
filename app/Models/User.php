<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'image',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function role(){
        return $this->belongsToMany('App\Models\Role');
    }
    public function hasAccess(array $permissions){
        foreach($this->role as $rol){
            if($rol->hasAccess($permissions)){
                return true;
            }
        }
    }
    public function setStatusAttribute($value)
    {
        if($value=='on'){
            $active=1;
        }else{
            $active=0;
        }
        $this->attributes['status'] = $active;
    }
    public function getStatusAttribute($value){
        if($value==1){
            return $value='active';
        }else{
            return $value='in-active';
        }
    }
}
