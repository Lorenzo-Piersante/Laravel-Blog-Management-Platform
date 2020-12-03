<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdmittedsController extends Controller
{
    // INDEX
    public function index() {
    	return view('admitteds.index'); 
    }
    public function index_admin($blogId) {
        return view( 'users.index', [ 'users' => \App\Blog::findOrfail($blogId)->admitted ]);
    }
    

    // DESTROY
    public function destroy($userId) { 
        $blog = \Auth::user()->blog; 
        $blog->admitted()->detach($userId);

        return back();
    }

}
