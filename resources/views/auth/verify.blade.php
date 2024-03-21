<x-AuthLayout>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card rounded-4 mt-5">
                <div class="text-center mt-5 mb-5">
                    <i class="fa-duotone fa-signature-lock fa-5x"></i>
                </div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            یک پیوند برای تایید به آدرس ایمیل شما ارسال شد
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><i class="fa-duotone fa-send"></i> برای درخواست عملیات کلیک کنید </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-AuthLayout>
