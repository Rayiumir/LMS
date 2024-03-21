<x-AuthLayout>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card rounded-4 mt-5">
                <div class="text-center mt-5 mb-5">
                    <i class="fa-duotone fa-user-plus fa-5x"></i>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="mb-2">نام و نام خانوادگی</label>
                            <input id="name" type="text" class="form-control rounded-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="mb-2">ایمیل</label>
                            <input id="email" type="email" class="form-control rounded-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="m-2">رمز عبور</label>
                            <input id="password" type="password" class="form-control rounded-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="mb-2">رمز عبور مجدد</label>
                            <input id="password-confirm" type="password" class="form-control rounded-5" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-primary rounded-5">
                            <i class="fa-duotone fa-plus"></i> عضویت
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-AuthLayout>
