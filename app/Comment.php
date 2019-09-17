<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        
        'body',
        
        ];
        
        
    public functionposy()
    {
        return $this->belongsTo('App\Post')
    }
}
