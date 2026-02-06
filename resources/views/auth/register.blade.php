<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title>Register | PIPAL CRM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/pipal_crm_logo.svg') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style-res.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome-4.7/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}">
</head>
<body id="bodyContainer" class="bg">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12" style="display: flex;">
                <div class="top-div">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend/images/pipal_crm_logo.svg') }}" width="150px">
                    </a>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light ml-auto desk">
                    <a class="navbar-brand navs" href="{{ url('login') }}" style="color:#fff">Login</a>
                    <!-- <a class="navbar-brand navs" href="{{ url('register') }}" style="color:#fff">Register</a> -->
                </nav>

                <a href="{{ url('login') }}" class="btn btn-primary ml-auto login-btn">Login</a>
            </div>
        </div>
    </div>
    
    <div class="container-fluid  container-ht ">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="ML">
                    <label class="free-text">Free Trail Registartion for new User</label>
                    <label class="free-texts">No Installation Needed/ No Credit Card Required</label>
                    <label class="second-text">
                        *This app requires some basic profile information. PIPAL CRM will save your information
                        for next time.
                    </label>
                </div>
                <div class="pipal-form">
                    <div class="errors"></div>
                    {{ Form::open(array('route' => 'customer.register.store', 'id'=>'form')) }}
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="first_name" class="col-sm-12 col-form-label pipal-lable">
                                        <span style="color:red">*</span>First Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="first_name" class="form-control" required id="first_name">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="last_name" class="col-sm-12 col-form-label pipal-lable">
                                        <span style="color:red">*</span>Last Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="last_name" class="form-control" required id="last_name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="email" class="col-sm-12 col-form-label pipal-lable">
                                        <span style="color:red">*</span>Email Address</label>
                                    <div class="col-sm-12">
                                        <input type="email" name="email" class="form-control" required id="email">
                                    </div>
                                </div>
                                 <div class="col-sm-6 mb-3 pLR0">
                                    <label for="password" class="col-sm-12 col-form-label pipal-lable">
                                        <span style="color:red">*</span>Password</label>
                                    <div class="col-sm-12">
                                        <input type="password" name="password" class="form-control" required id="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="job_title" class="col-sm-12 col-form-label pipal-lable">
                                        <span style="color:red">*</span>Job Title</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="job_title" class="form-control" required id="job_title">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="no_of_users_required" class="col-sm-12 col-form-label pipal-lable"><span style="color:red">*</span>No of Users required</label>
                                    <div class="col-sm-12">
                                        <input type="number" required min="1" max="3" name="no_of_users_required" required class="form-control" id="no_of_users_required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="company_name" class="col-sm-12 col-form-label pipal-lable"><span style="color:red">*</span>Company Name</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="company_name" class="form-control" required id="company_name">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="company_logo" class="col-sm-12 col-form-label pipal-lable"><span style="color:red">*</span>Company Logo</label>
                                    <div class="col-sm-12">
                                        <input type="file" name="company_logo" required class="form-control" id="company_logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="state_province" class="col-sm-12 col-form-label pipal-lable"><span style="color:red">*</span>State/Province</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="state_province" class="form-control" id="state_province" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="postal_code" class="col-sm-12 col-form-label pipal-lable"><span style="color:red">*</span>Postal Code</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="postal_code" required class="form-control" id="postal_code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="website" class="col-sm-12 col-form-label pipal-lable"><span style="color:red">*</span>Website</label>
                                    <div class="col-sm-12">
                                        <input type="url" name="website" required class="form-control" id="website">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 pLR0">
                                    <label for="about_us" class="col-sm-12 col-form-label pipal-lable"><span style="color:red">*</span>How did you find out about us?</label>
                                    <div class="col-sm-12">
                                        <select id="about_us" required name="about_us" class="form-control" style="font-size:14px;">
                                            <option value="Reference" selected="">  Reference </option>
                                            <option value="Websites">  Websites </option>
                                            <option value="Google">  Google </option>
                                            <option value="Friends">  Friends </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-check">
                                    <input type="checkbox" required name="agree_tnc" value="Yes" class="form-check-input" id="agree_tnc">
                                    <label class="form-check-label desk-check" for="agree_tnc">I give mPHATEK permission to use my account information so that mPHATEK can contact me regarding this product and related products. I agree to the provider's privacy policy <br> and terms of use</label>
                                    <label class="form-check-label desk-checks" for="agree_tnc">I give mPHATEK permission to use my account information so that mPHATEK can contact me regarding this product and related products. I agree to the provider's privacy policy and terms of use</label>
                                </div>
                            </div>
                        </div>
                        <div class="two-btn text-center">
                            <button type="button" class="btn btn-primary blu-btn">Reset </button>
                            <button type="submit" class="btn btn-primary blue-btn">Get Started Free <i class="fa fa-spinner fa-spin" style="display:none;"></i></button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pLR0">
                <div class=" ipad-bg">
                    <div class=" left-ctn">
                        <label class=" left-text ipad-text">Enhanced ProductivitySimplified</label>
                        <label class=" left-text desk-t">Enhanced Productivity<br>Simplified</label>
                        <label class="left-texts ">
                            Secure, Efficient & User Friendly | Access from Anywhere | <br>Sales & Marketing Automation Easy Customization | <br>360-degree view | Business Process Management |<br> Low Operating Cost
                        </label>
                        <div class="ills-img">
                            <img src="{{ asset('frontend/images/illustartion_registartion_mobile.png') }}" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pLR0">
        <div class="mobile-img">
            <label class="left-text">Enhanced Productivity<br>Simplified</label>
            <label class="left-texts">
                Secure, Efficient & User Friendly
                | Access from Anywhere | Sales & Marketing Automation Easy Customization | 360-degree view | Business Process Management | Low Operating Cost
            </label>
            <div>
                <img src="{{ asset('frontend/images/illustartion_registartion_mobile.png') }}" width="100%">
            </div>
        </div>
    </div>

    <div class="footer" style="margin-top:0px;">
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="t-c   displayBlock">
                            <ul class="mediaList">
                                <li class="fb-box" title="Facebook">
                                    <a href="https://www.facebook.com/obseyetech/">
                                        <img src="{{ asset('frontend/svg/04_fb_icon.svg') }}">
                                    </a>
                                </li>
                                <li class="tw-box" style="padding: 1px 8px;" title="Twitter">
                                    <a href="https://twitter.com/obseyetech/">
                                        <img src="{{ asset('frontend/svg/06_twitter_icon.svg') }}" style="width:15px;">
                                    </a>
                                </li>
                                <li class="you-box" style="padding: 1px 8px;" title="YouTube">
                                    <a href="https://www.youtube.com/channel/UCbQ9HkHDjJRpHFbY_OGC3Bw">
                                        <img src="{{ asset('frontend/svg/07_you_icon.svg') }}" style="width:15px;">
                                    </a>
                                </li>
                                <li class="insta-box" style="padding: 1px 8px;" title="Instagram">
                                    <a href="https://www.instagram.com/obseyetech/">
                                        <img src="{{ asset('frontend/svg/instagram.svg') }}" style="width:15px;">
                                    </a>
                                </li>
                                <li class="link-box" style="padding: 1px 8px;" title="Linkedin">
                                    <a href="https://www.linkedin.com/in/obseyetech/">
                                        <img src="{{ asset('frontend/svg/05_linkdIn_icon.svg') }}" style="width:15px;">
                                    </a>
                                </li>
                                <li class="pi-box" style="padding: 1px 8px;" title="Pinrest">
                                    <a href="#">
                                        <img src="{{ asset('frontend/svg/08_pinInterest.svg') }}" style="width:15px;">
                                    </a>
                                </li>
                            </ul>
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <p class="widget_con_detail">
                        </p><div class="powered">
                            Powered By  <img class="new-logo" src="{{ asset('frontend/images/mphatek_logo_white.png') }}">
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    <!--<script type="text/javascript" src="scripts/scrollTotop.js"></script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

    <!-- custom js -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>
</html>