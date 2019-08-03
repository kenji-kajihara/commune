<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;
use App\User;
use App\Follow;
use Illuminate\Support\Facades\Auth;    #追加してください。


class CommunityController extends Controller
{
       public function add(){

        return view('commune.community.create');
    }
    
    public function create(Request $request){
        $this->validate($request, Community::$rules);
        
        $form = $request->all();
        $community = new Community;

        unset($form['_token']);
        
        $user = Auth::user();
        
        $community->fill($form);
        $community->user_id = $user->id;
        $community->save();
        
        return redirect('commune/community/create');
    }
    
    public function index(Request $request){
        $cond_name=$request->cond_name;
        if($cond_name != NULL){
            $posts= Community::where('name',$cond_name)->get();
            
        }else{
            $posts=Community::all();
            
        }
        return view('commune.community.index',['posts'=>$posts,'cond_name'=>$cond_name]);
        
    }
    
    public function edit(Request $request){
        $community=Community::find($request->id);
        if(empty($community)){
            abort(404);
        }
        return view('commune.community.edit',['community_form'=>$community]);
        
    }
    
    public function update(Request $request){
        $this->validate($request,Community::$rules);
        $community=Community::find($request->id);
        $community_form=$request->all();
        unset($community_form['_token']);
        $community->fill($community_form)->save();
        return redirect('commune/community');
        
    }
    
    public function delete(Request $request){
        $community = Community::find($request->id);
        $community->delete();
        return redirect('commune/community');
        
    }
    
    public function description(Request $request){
        
        $community = Community::find($request->id);
        $user_id = $community->user_id;
        $user= User::find($user_id);
        $followers = Follow::where('community_id',$community->id)->get();
        return view('commune.community.description',[
                    "community"=>$community,
                    "user"=>$user,
                    "followers"=>$followers]);
        
    }
}
