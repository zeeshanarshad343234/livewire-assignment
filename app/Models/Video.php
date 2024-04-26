<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
        
    use HasFactory;

    protected $fillable = ['path'];


    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_video_comments');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'post_video_comments');
    }
}
