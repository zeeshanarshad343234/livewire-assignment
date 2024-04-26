@extends('layouts.app')

@section('content')

<main role="main">
      <section class="jumbotron text-center">
        <div class="container">
           <h1 class="jumbotron-heading"><small>Post Title</small> : {{$post->name ?? ''}}</h1>
           <h1 class="jumbotron-heading"><small>Videos </small> : {{$post->videos !==  null ? count($post->videos)  : 0}}</h1>
           <h1 class="jumbotron-heading"><small>Comments</small> : {{$post->comments !==  null ? count($post->comments)  : 0}}</h1>
        </div>
      </section>

      <div class="album py-2 bg-light">
        <div class="container">

            @if(count($post->videos) > 0)
          <div class="row">

              @foreach ($post->videos as $video)
              <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18f1a75945b%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18f1a75945b%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7109375%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
              </div>
            </div>      
              @endforeach
            
          </div>
          @else
          <div>
              No Videos For This Post
          </div>
          @endif
        </div>
      </div>

    </main>

    @endsection