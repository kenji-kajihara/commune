<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Follow;
use Illuminate\Support\Facades\Auth;

class Community extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        // 'user_id' => 'required',
        'name' => 'required',
        'description' => 'required'
        
        );
        
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function follows(){
        return $this->hasMany('App\Follow');
    }
}
