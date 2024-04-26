@extends('layouts.auth')

@section('authcontent')

    
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    
                    <div class="card-body">
                    <livewire:login />
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
