<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // INDEX
    public function index() {
        return view('blogs.index', ['blogs' => \App\Blog::all() ]); 
    }
    // SHOW
    public function show($blogId) {
        return view('blogs.show', [ 'blog' => \App\Blog::findOrFail($blogId) ]);
    }

    // CREATE & STORE
    public function create() {
        if ( \Auth::user()->blog ) {
            return abort(401);
        }    
        else {    
    	    return view('blogs.create');
        }
    }

    public function store() {
    	$attributes = request()->validate([
    		'title' => 'required|max:255',
    		'description' => 'required',
        ]);

    	\App\Blog::create([
            'user_id' => auth()->id(),
            'title' => $attributes['title'],
            'description' => $attributes['description'],    
        ]);

        return redirect(route('users.show', $userId = \Auth::user()->id ));
    }
    
    // EDIT & UPDATE
     public function edit($blogId) {
        if ($blogId == \Auth::user()->id) {
            return view('blogs.edit', [ 'blog' => \App\Blog::findOrFail($blogId) ]);
        }
        else {
            return abort(401);
        }
    }

    public function update($blogId) {
        $blog = \App\Blog::findOrFail($blogId);

        $attributes = request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => 'required',            
        ]);
        
        $blog->update($attributes);

        return redirect(route('blogs.show', $blogId ));
    }


    // DESTROY
    public function destroy($blogId) {
        \App\Blog::findOrFail($blogId)->delete();
        return redirect(route('users.show', $userId = \Auth::user()->id ));
    }

}
