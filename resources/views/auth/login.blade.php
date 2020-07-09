@extends('backend_layout.app')

@section('content')



<div class="content-body">
    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <img width="150px" src=" {{asset('/images/logo2.png') }} " alt="logo" />
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input id="user-name" type="email" class="form-control round @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email" autofocus>
                                    <div class="form-control-position">
                                        <i class="ft-mail"></i>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>

                                <fieldset class="form-group position-relative has-icon-left">
                                    <input id="user-password" type="password" class="form-control round @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Enter Password" required>
                                    <div class="form-control-position">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-md-6 col-12 text-center text-sm-left">
                                        <fieldset>
                                            <input class="chk-remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember-me"> Remember Me</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">

                                        @if (Route::has('password.request'))
                                            <a class="card-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-outline-info btn-block btn-round">
                                    <i class="ft-unlock"></i>
                                    {{ __('Login') }}
                                </button>

                            </form>


                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection
