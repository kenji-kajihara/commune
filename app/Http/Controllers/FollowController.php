<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Community;
use App\Profile;
use App\Follow;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 

class FollowController extends Controller
{
    public function join(Request $request){
        $follow= new Follow;

        $user_id=Auth::user()->id;
        $community_id = $request->id;
        $follow->created_at=Carbon::now();
        $checkFollow=Follow::where('community_id',$community_id)
        ->where('user_id',$user_id)->get();
        if(!$checkFollow->isEmpty()){
            return view('commune.community.error');        
        }else{

        $follow->fill([ 'user_id'=>$user_id, 
                        'community_id'=>$community_id]);
        $follow->save();
        return redirect()->route('community.show',['id'=>$community_id]);
        }
        
    }
    
    public function leave(Request $request){
        $community_id = $request->id;
        $active_user_id = Auth::user()->id;
        $followers = Follow::where('community_id',$community_id)
                            ->where('user_id',$active_user_id)->get();
        if($followers->isEmpty()){
            return view('commune.community.error2');
        }else{
            foreach($followers as $follow){
            $follow->delete();
            return redirect()->route('community.show',['id'=>$community_id]);
            }
        }
    }
}
