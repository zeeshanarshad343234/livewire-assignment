<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show The Posts Index Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('posts.index');
    }


    /**
     * Show  Create Page For Creating Post.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('posts.create');
    }


    /**
     * Show Single Page Of Post.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {   
        $post = Post::with('videos','comments')->findOrFail($id);

        return view('posts.show',compact('post'));
    }






}
