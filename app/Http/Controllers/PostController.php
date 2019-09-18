<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB; 
use App\Post;

class PostController extends Controller
{
    
    public function index(){
        
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        
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
    
    
    
    public function show($post_id){
        $post = Post::findOrFail($post_id);
        
        return view('commune.post.show',['post'=>$post]);
    }
    
    
    
    public function edit($post_id){
        $post = Post::findOrFail($post_id);
        
        return view('commune.post.edit', [
            'post' =>$post,
            ]);
    }
    
    
    
    public function update($post_id, Request $request){
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
            ]);
            
            $post = Post::findOrFail($post_id);
            $post->fill($params)->save();
            
            return redirect()->route('post.show', ['post' => $post]);
    }
    
    
    
    public function destroy($post_id){
    $post = Post::findOrFail($post_id);

    DB::transaction(function () use ($post) {
        $post->comments()->delete();
        $post->delete();
    });

    return redirect()->route('post.index');
    }
}
