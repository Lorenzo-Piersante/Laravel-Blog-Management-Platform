<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store($blogId)
    {
    	$attributes = request()->validate([
    		'title' => 'required|max:255',
    		'body' => 'required',
        ]);

    	\App\Post::create([
            'user_id' => auth()->id(),
            'blog_id' => $blogId,
            'title' => $attributes['title'],
            'body' => $attributes['body'],    
        ]);

         return redirect(route('blogs.show', $blogId ));
    }

    public function destroy($postId) {
        \App\Post::findOrFail($postId)->delete();
        
        return back();
    }
}
