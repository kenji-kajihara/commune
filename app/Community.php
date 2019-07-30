<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Auth;

class Community extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        // 'user_id' => 'required',
        'name' => 'required',
        'description' => 'required'
        
        );
        
    public function users(){
        return $this->belongsTo('App\User');
    }
}
