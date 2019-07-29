<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
       public function add(){
        return view('comune.community.create');
    }
    
    public function create(Request $request){
        $this->validate($request,Community::$rules);
        $community=new Community;
        $form = $request->all();
        unset($form['user_id']);
        unset($form[_token]);
        $community->fill($form)->save();
        return direction('comune/community/create');
    }
    
    public function edit(){
        
    }
    
    public function update(){
        
    }
    
    public function delete(){
        
    }
}
