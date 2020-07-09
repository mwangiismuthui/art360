@extends('backend_layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h3> {{ __('Verify Your Email Address') }} </h3></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <h5> {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email,') }} </h5>

                    <hr/>

                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-round btn-success btn-block" href="{{ route('verification.resend') }}">{{ __('Click here to request another') }}</a>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
