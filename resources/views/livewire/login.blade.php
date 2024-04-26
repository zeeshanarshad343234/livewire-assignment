
    <form  wire:submit.prevent="submit">

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <div class='d-flex align-items-center justify-content-between' >
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <div class='mt-3' >
                        <small class='fs-3' >Don't have a account?</small>
                        <a href="{{route('register')}}" >Register</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
