@extends('backend_layout.main')

@section('content')


<div class="content-body">
  <section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-6 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
          <div class="card-header border-0 pb-0">
                    <div class="card-title text-center">
                      <h1> Add Member</h1>
                    </div>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('store_user') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="user-name" type="text" class="form-control round @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="User Name" autofocus>
                            <div class="form-control-position">
                                <i class="ft-user"></i>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                              <input id="email" type="user-email" class="form-control round @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                              <div class="form-control-position">
                                  <i class="ft-mail"></i>
                              </div>
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </fieldset>
                      </div>
                  </div>
                    <div class="row">
        <div class="col-md-6">
            <fieldset class="form-group position-relative has-icon-left">
                <input id="user-password" type="password" class="form-control round @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">
                <div class="form-control-position">
                    <i class="fa fa-key"></i>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </fieldset>
        </div>
        <div class="col-md-6">
            <fieldset class="form-group position-relative has-icon-left">
                <input id="password-confirm" type="password" class="form-control round" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password">
                <div class="form-control-position">
                    <i class="fa fa-key"></i>
                </div>
            </fieldset>
        </div>
    </div>


                    <div class="row">
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-outline-info btn-block btn-round"><i class="ft-user"></i> Register</button>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


@endsection
