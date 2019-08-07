<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'user_id' => 'required',
        'community_id' => 'required',
        );
    
    public function users(){
        return $this->belongsTo('App\User');
    }
    
    public function communities(){
        return $this->belongsTo('App\Community');
    }
    
}
