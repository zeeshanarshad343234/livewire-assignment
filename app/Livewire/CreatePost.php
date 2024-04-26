<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Video;
use App\Models\PostVideoComment;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreatePost extends Component
{

    use LivewireAlert,WithFileUploads;

    public $title;
    public $videos = [];

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255',
            'videos.*' => 'required|file|mimetypes:video/mp4,video/quicktime|max:102400',
        ]);

        try {
            $post = Post::create([
                'name' => $validatedData['title'],
            ]);
            foreach ($this->videos as $video) {
    
                $path = $video->store('public/videos');
            
                $video = Video::create([
                    'path' => $path 
                ]);
    
                // $post->videos()->attach($video->id); // another method to attach videos to single post
    
                PostVideoComment::create([
                    'post_id' => $post->id,
                    'video_id' => $video->id,
                ]);
    
    
            }
    
            $this->alert('success', 'Post Created Successfully!');
            
            // Reset form fields
            $this->reset(['title', 'videos']);
            return redirect()->route('posts.index');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
