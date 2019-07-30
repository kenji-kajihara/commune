<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'user_id' => 'required',
        'community_id' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        
        );
}
