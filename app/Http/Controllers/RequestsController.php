<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller
{
    // STORE
    public function store($blogId) {
    	$asking = \Auth::user();
    	$responding = \App\Blog::find($blogId)->user;
    	$responding->requesting()->save($asking);

    	return back();
    }

    // INDEX
    public function index() {
    	return view('requests.index'); 
    }

    // CONVERT
    public function accept($askingId) {
        $responding = \Auth::user();
        $responding->requesting()->detach($askingId);

        $asking = \App\User::find($askingId);
    	$blog = \Auth::user()->blog;
    	$blog->admitted()->save($asking);

    	return back();
    }

    // DESTROY
    public function refuse($askingId) {
        $responding = \Auth::user(); 
        $responding->requesting()->detach($askingId);

        return back();
    }
}
