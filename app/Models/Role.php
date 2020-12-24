<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';
    public function user(){
    	return $this->belongsToMany('App\Models\User');
    }
    public function hasAccess(array $permissions){
        foreach($permissions as $permission){
            if($this->hasPermission($permission)){
                return true;
            }  
        }
        return false;
    }
    protected function hasPermission(string $permission){
         $permissions = json_decode($this->permissions,true);
         return $permissions[$permission] ?? false ;
    }
}
