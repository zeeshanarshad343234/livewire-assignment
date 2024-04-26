<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function videos()
    {
        return $this->belongsToMany(Video::class, 'post_video_comments');
    }
    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'post_video_comments');
    }
}
