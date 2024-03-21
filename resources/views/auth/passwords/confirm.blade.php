<x-AuthLayout>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card rounded-4 mt-5">
                <div class="text-center mt-5 mb-5">
                    <i class="fa-duotone fa-lock fa-5x"></i>
                </div>
                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="mb-2">رمز عبور</label>
                            <input id="password" type="password" class="form-control rounded-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary rounded-5">
                            <i class="fa-duotone fa-send"></i> ثبت رمز عبور
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-decoration-none text-danger" href="{{ route('password.request') }}">
                                فراموشی رمز عبور؟
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-AuthLayout>
