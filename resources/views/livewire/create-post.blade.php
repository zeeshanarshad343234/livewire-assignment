<form wire:submit.prevent="submit">

    <div class="row mb-3">
        <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
        <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="videos" class="col-md-4 col-form-label text-md-end">{{ __('Videos') }}</label>
        <div class="col-md-6">
            <input id="videos" type="file" class="form-control @error('videos.*') is-invalid @enderror" wire:model="videos" name="videos[]" multiple>
            @error('videos.*')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <div class='d-flex align-items-center justify-content-between'>
                <button type="submit" class="btn btn-primary">
                    {{ __('Create Post') }}
                </button>
            </div>
        </div>
    </div>
</form>
