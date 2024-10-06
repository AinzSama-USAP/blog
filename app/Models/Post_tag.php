<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    use HasFactory;

    public function post() {
        return $this->belongsToMany(Post::class, 'id');
    }

    public function tag() {
        return $this->belongsToMany(Tag::class, 'id');
    }
}
