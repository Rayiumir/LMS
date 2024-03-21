<x-AuthLayout>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card rounded-4 mt-5">
                <div class="text-center mt-5 mb-5">
                    <i class="fa-duotone fa-envelope fa-5x"></i>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="mb-2">آدرس ایمیل</label>
                            <input id="email" type="email" class="form-control rounded-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary rounded-5">
                            <i class="fa-duotone fa-send"></i> ارسال تغییر رمز عبور
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-AuthLayout>
