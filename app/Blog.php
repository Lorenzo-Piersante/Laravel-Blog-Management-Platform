<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function posts() {
    	return $this->hasMany(Post::class);
    }

    public function admitted() {
        return $this->belongsToMany(User::class, 'admitted', 'blog_id', 'user_id');
    }
}
