@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class='' >
                    <div class="card-header">{{ __('Create Post') }}
                </div>
                </div>
                <div class="card-body">
                    
                <livewire:create-post />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection