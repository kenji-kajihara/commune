<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Post;

class PostController extends Controller
{
    
    public function index(){
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('commune.post.index', ['posts' => $posts]);
    }
    
    
    
    public function create(){
        return view('commune.post.create');
    }
    
    
    
    public function store(Request $request){
        
        $user_id = Auth::id();
        $params = $request->validate([
                'title' => 'required|max:50',
                'body' => 'required|max:2000',
            ]);
        
        $post=Post::create([
            'user_id'=>$user_id,
            'title' => $request->title,
            'body' => $request->body
            ]);
        return redirect('commune/post');
        
    }
}
