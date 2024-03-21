<x-AuthLayout>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card rounded-4 mt-5">
                <div class="text-center mt-5 mb-5">
                    <i class="fa-duotone fa-user fa-5x"></i>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="mb-2">ایمیل</label>
                            <input id="email" type="email" class="form-control rounded-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="mb-2">رمز عبور</label>
                            <input id="password" type="password" class="form-control rounded-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                مرا به خاطر بسپار
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-5">
                            <i class="fa-duotone fa-sign-in"></i> ورود
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
