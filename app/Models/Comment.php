<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment'];


    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_video_comments');
    }
}
