@extends('frontend.layout.default')
@section('content')

<div class="container-fluid cust-pade"></div>
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card1">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <img src="{{ url('assets/images/pipal_crm.svg') }}" class="logoImg" style="width: 250px;">
                            <!-- <img src="{{ asset('frontend/images/pipal_crm_logo.svg') }}" width="150px"> -->
                        </div>
                        @if( session('success'))
                            <div class="alert alert-success pt10 pb10 mt10 mb10">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if( session('error'))
                            <div class="alert alert-danger mt10 mb10  pt10 pb10">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                <input type="email" name="email" id="emailaddress" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email"/>
                                @error('email')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password"/>
                                <input type="hidden" name="auth_role" value="{{ \Crypt::encryptString('admin') }}">
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <input type="hidden" name="decice_token" id="decice_token">
                                <button class="btn btn-primary btn-block btn-custom" type="submit"> Log In </button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="container-fluid bluee-div">
    <div class="row">
        <div class="col-sm-12">
            <div class="brr-continer">
                <span>
                    Please book a quick consulation call with our Expert
                </span>
            </div>
        </div>
    </div>
</div>


@endsection