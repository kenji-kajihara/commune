<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Post;

class CommentController extends Controller
{
    public function store(Request $request){
        
        $user_id = Auth::id();
        $params = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'body' => 'required|max:2000',
            ]);
            
        $post = Post::findOrFail($params['post_id']);
        $post->comments()->create([
                'user_id' => $user_id,
                'body' => $request->body]);

        return redirect()->route('post.show',['post' => $post]);
        
    }
}
