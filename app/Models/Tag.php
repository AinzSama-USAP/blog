<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function post_tags() {
        return $this->belongsToMany(Post_tag::class, 'tag_id');
    }
}
