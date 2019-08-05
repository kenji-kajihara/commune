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
    public function add(Request $request){
        $follow= new Follow;

        $user_id=Auth::user()->id;
        $community_id = $request->id;
        $follow->created_at=Carbon::now();
        $checkCommunity=Follow::where('community_id',$community_id)->get();
        $checkUser=$checkCommunity->contains('user_id',$user_id);
        if(!$checkUser){
        $follow->fill([
                        'user_id'=>$user_id, 
                        'community_id'=>$community_id]);
        $follow->save();
        return redirect()->route('community.show',['id'=>$community_id]);
        }else{
            return view('commune.community.error');
        }
        
    }
    
    public function delete(Request $request){
        $follow = Follow::find($request->id);
        $follow->delete();
        return redirect('commune/community/description')->withInput();;
    }
}
