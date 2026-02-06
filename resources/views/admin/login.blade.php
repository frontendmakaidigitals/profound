<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Admin | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" />
<meta content="" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('frontend/images/pipal_crm_logo.svg') }}">

<!-- App css -->
<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<style>
.darkbg{
    background:#06112C;
}
</style>
</head>
<body  style="background-image: url(' {{ asset('backend/images/loginpage.jpg') }}');">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-right" style="justify-content: right;">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mb-4 darkbg">
                                <img src="{{ asset('/frontend/assets/images/logo.png') }}" width="250px">
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
                                </div?>
                                <div class="form-group mb-0 text-center">
                                    <input type="hidden" name="decice_token" id="decice_token">
                                    <button class="btn btn-primary btn-block1" type="submit"> Log In </button>
                                    <a href="{{ url('/') }}" class="btn btn-danger btn-block1" type="button"> Back </a>
                                </div>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>
<!-- App js -->
<script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
</body>
</html>