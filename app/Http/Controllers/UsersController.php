<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
	// INDEX
    public function index() {
    	return view('users.index', [ 'users' => \App\User::all() ]); 
    }
    // SHOW
    public function show($userId) {
        return view('users.show', [ 'user' => \App\User::findOrFail($userId) ]);
    }
    
    // EDIT & UPDATE
    public function edit($userId) {
        return view('users.edit', [ 'user' => \App\User::findOrFail($userId) ]);
    } 
    
    public function update($userId) {
        $user = \App\User::findOrFail($userId);

        $attributes = request()->validate([
        	'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'birthday' => 'required',
            'fiscalCode' => ['required', 'string', 'max:255'],
            'residency' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'avatar' => ['image'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }
        
        $user->update($attributes);

        return redirect(route('users.show', $user->id ));
    }

    // DESTROY
    public function destroy($userId) {    
        $user = \App\user::findOrFail($userId);
        $user->delete();
        if( $user->role == 'staff' ) {
            return back();    
        }
        else {
            return redirect(route('users.index'));
        }
    }

    
    // FILTER
    public function filter() {
        $name = request('name');

        return view('users.index', [ 'users' => \App\User::where( 'name', 'LIKE','%'.$name.'%' )->get() ]);   
    }



}