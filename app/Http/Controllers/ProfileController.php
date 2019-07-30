<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use App\User;


class ProfileController extends Controller
{
    
       public function add(){
           
        
        return view('commune.profile.create');
    }
    
    public function create(Request $request){
        $this->validate($request, Profile::$rules);
        $form = $request->all();
        $profile = new Profile;
    
        unset($form['_token']);
        
        $user = Auth::user();
        
        $profile->fill($form);
        
        $profile->user_id = $user->id;
        
        $profile->save();
        
        return redirect('commune/profile/create');
    }
    
    public function index(Request $request){
        $cond_name=$request->cond_name;
        if($cond_name != NULL){
            $posts= Profile::where('name',$cond_name)->get();
        }else{
            $posts=Profile::all();
        }
        return view('commune.profile.index',['posts'=>$posts,'cond_name'=>$cond_name]);
        
    }
    
    public function edit(Request $request){
        $profile=Profile::find($request->id);
        if(empty($profile)){
            abort(404);
        }
        return view('commune.profile.edit',['profile_form'=>$profile]);
        
    }
    
    public function update(Request $request){
        $this->validate($request,Profile::$rules);
        $profile=Profile::find($request->id);
        $profile_form=$request->all();
        unset($profile_form['_token']);
        $profile->fill($profile_form)->save();
        return redirect('commune/profile');
        
    }
    
    public function delete(Request $request){
        $profile = Profile::find($request->id);
        $profile->delete();
        return redirect('commune/profile');
        
    }
}
 