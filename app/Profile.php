<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
            'name' => 'required',
            'gender' => 'required',
            'hobby' => 'required',
            'introduction' => 'required',
        );
        
    public function users(){
       return $this->belongsTo('App\User');
    }
}
