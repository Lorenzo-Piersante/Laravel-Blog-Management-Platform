<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // The attributes that are mass assignable.    
    protected $guarded = [];

    //The attributes that should be hidden for arrays.
    protected $hidden = [
        'password', 'remember_token',
    ];

    //The attributes that should be cast to native types.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function blog() {
        return $this->hasOne(Blog::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function admitted() {
        return $this->belongsToMany(Blog::class, 'admitted', 'user_id', 'blog_id');
    }
    
    // Richieste di accesso al blog
    public function requested() {
        return $this->belongsToMany(User::class, 'requests', 'asking_id', 'responding_id');
    }

    public function requesting() {
        return $this->belongsToMany(User::class, 'requests', 'responding_id', 'asking_id');
    }

}
