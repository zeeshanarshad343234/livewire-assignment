@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class='' >
                    <div class="d-flex align-items-center justify-content-between card-header">{{ __('Posts') }}
                        <a href="{{route('posts.create')}}" class='btn btn-primary'>Create Post</a>
                </div>
                </div>
                <div class="card-body">
                    
                <livewire:posts />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
