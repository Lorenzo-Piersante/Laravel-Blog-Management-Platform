<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StaffsController extends Controller
{
    // INDEX
    public function index() {
        return view('staffs.index', ['users' => \App\User::where('role', 'staff')->get() ]); 
    }

    
    // CREATE & STORE
    public function create() {
    	return view('staffs.create');
    }

    public function store() {
    	$attributes = request()->validate([
    		'username' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'birthday' => 'required',
            'fiscalCode' => ['required', 'string', 'max:255'],
            'residency' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

    	\App\User::create([
            'username' => $attributes['username'],
            'name' => $attributes['name'],
            'birthday' => $attributes['birthday'],
            'fiscalCode' => $attributes['fiscalCode'],
            'residency' => $attributes['residency'],
            'description' => $attributes['description'],
            'email' => $attributes['email'],
            'role' => 'staff',
            'password' => Hash::make($attributes['password']),    
        ]);

        return redirect(route('staffs.index'));
    }
    
}