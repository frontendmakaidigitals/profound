<nav class="navbar navbar-expand-lg navbar-light navBG bg-transparent forPC">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('frontend/assets/images/profound-logo.png') }}" alt="logo" class="img-fluid" width="350px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto  text-white mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link {{ request()->is('properties') ? 'active' : '' }}" href="{{url('properties')}}">Properties</a>
                </li>-->
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link {{ request()->is('off-Plans') ? 'active' : '' }}" href="{{url('off-Plans')}}">Properties</a>-->
                <!--</li>-->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('off-plans') ? 'active' : '' }}" href="{{url('off-plans')}}">Off-Plan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('ready') ? 'active' : '' }}" href="{{url('ready')}}">Ready</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('list-your-property') ? 'active' : '' }}" href="{{url('list-your-property')}}">List Your Property</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('rent') ? 'active' : '' }}" href="{{url('rent')}}">Rent</a>
                </li>
                <!--li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Properties
                    </a>
                    <ul class="dropdown-menu mainDropNav border-0 bg-transparent" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Sell</a></li>
                        <li><a class="dropdown-item" href="#">Rent</a></li>
                        <li><a class="dropdown-item" href="{{url('off-Plans')}}">Off-Plan</a></li>
                    </ul>
                </li-->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{url('services')}}">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu mainDropNav border-0 bg-transparent" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('about-us')}}">About Us</a></li>
                        <li><a class="dropdown-item" href="{{url('career')}}">Careers</a></li>
                    </ul>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{url('about-us')}}">About Us</a>-->
                <!--</li>-->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('invest-in-dubai') ? 'active' : '' }}" href="{{ url('invest-in-dubai') }}">Invest In Dubai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{url('contact-us')}}">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btnQuickSear"><i class="fa fa-search text-white"></i></button>

            </div>
            <div class="d-flex">
                <div class="trans-section">
                    <div id="google_translate_element" style="display: none;"></div>
                    <select class="selectpicker" data-width="fit" onchange="translateLanguage(this.value);">
                        <option class="notranslate" data-content="<span class=&quot;flag-icon flag-icon-gb&quot;></span> English" value="إنجليزي"> English</option>
                        <option class="notranslate" data-content="<span class=&quot;flag-icon flag-icon-ae&quot;></span> Arabic" value="العربية"> Arabic</option>
                        <option class="notranslate" data-content="<span class=&quot;flag-icon flag-icon-cn&quot;></span> Chinese" value="فرنسي"> Chinese</option>
                        <!--<option class="notranslate" data-content='<span class="flag-icon flag-icon-fr"></span> French' value="فرنسي"> French </option>-->
                        <option class="notranslate" data-content="<span class=&quot;flag-icon flag-icon-it&quot;></span> Italian" value="فرنسي"> Italian </option>
                        <option class="notranslate" data-content="<span class=&quot;flag-icon flag-icon-ru&quot;></span> Russian" value="فرنسي"> Russian</option>
                        <option class="notranslate" data-content="<span class=&quot;flag-icon flag-icon-es&quot;></span> Spanish" value="فرنسي"> Spanish</option>
                        <option class="notranslate" data-content="<span class='flag-icon flag-icon-nl'></span> Dutch" value="فرنسي"> Dutch</option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-cn"></span>  Mandari' value="فرنسي"> Mandarin</option>
                        <option class="notranslate" data-content="<span class=&quot;flag-icon flag-icon-ro&quot;></span> Romanian" value="فرنسي"> Romanian</option>
                    </select>
                    <!--<select class="selectpicker" data-width="fit" onchange="translateLanguage(this.value);">
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-gb"></span> English' value="إنجليزي"> English</option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-ae"></span> Arabic'  value="العربية"> Arabic</option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-cn"></span> Chinese' value="فرنسي"> Chinese</option>
                        
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-it"></span> Italian' value="فرنسي"> Italian </option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-ru"></span> Russian' value="فرنسي"> Russian</option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-es"></span> Spanish' value="فرنسي"> Spanish</option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-nl"></span> Dutch' value="فرنسي"> Dutch</option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-ro"></span> Romanian' value="فرنسي"> Romanian</option>
                    </select>-->
                </div>
            </div>

        </div>

    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark navBG bg-primary forMobile">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('frontend/assets/images/profound-logo.png') }}" alt="logo" width="250px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto  text-white mb-2 mb-lg-0"  style="flex-direction: column !important;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('off-plans') ? 'active' : '' }}" href="{{url('off-plans')}}">Properties</a>
                </li>
                <!--<li class="nav-item dropdown">-->
                <!--    <a class="nav-link dropdown-toggle" href="{{url('/properties')}}" id="navbarDropdown" role="button"-->
                <!--        data-bs-toggle="dropdown" aria-expanded="false">-->
                <!--        Properties-->
                <!--    </a>-->
                <!--    <ul class="dropdown-menu border-0 bg-transparent" aria-labelledby="navbarDropdown">-->
                <!--        <li><a class="dropdown-item" href="#">Sell</a></li>-->
                <!--        <li><a class="dropdown-item" href="#">Rent</a></li>-->
                <!--        <li><a class="dropdown-item" href="#">Off-Plan</a></li>-->
                <!--    </ul>-->
                <!--</li>-->
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/services')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/about-us')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('invest-in-dubai') ? 'active' : '' }}" href="{{ url('invest-in-dubai') }}"  >Invest In Dubai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/contact-us')}}">Contact Us</a>
                </li>
            </ul>
            <!--<div class="d-flex">
                <button class="btn"><i class="fa fa-search text-white"></i></button>
            </div>-->
            <div class="d-flex">
                <div class="trans-section">
                    <div id="google_translate_element" style="display: none;"></div>
                    <select class="selectpicker" data-width="fit" onchange="translateLanguage(this.value);">
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-us"></span> English' value="إنجليزي"> <img src="{{ asset('frontend/assets/images/flags/uk.svg') }}" alt="" class="img-fluid" width="50"> </option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-ae"></span> Arabic' value="العربية"> <img src="{{ asset('frontend/assets/images/flags/ae.svg') }}" alt="" class="img-fluid" width="50"> </option>
                        <option class="notranslate" data-content='<span class="flag-icon flag-icon-fr"></span> French' value="فرنسي"> <img src="{{ asset('frontend/assets/images/flags/fa.svg') }}" alt="" class="img-fluid" width="50"> </option>
                    </select>
                </div>
            </div>

        </div>

    </div>
</nav>
