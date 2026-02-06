<style>
.py-50{
    padding: 50px 0 !important;
}
    @media(max-width:768px){
    .luxury-home .image img {
    height: 350px;
    }
    .seo-content h1 {
    font-size: 28px;
    line-height: 34px;
    }
    .slider.home7 .wrap-slider{
    height:70vh !important;
    }
    .flat-testimonial > .divider {
    margin: 50px 0 50px 0;
    }
    .slider.home7 .wrap-slider .slider-item .slider-content .text{
    margin-bottom: 5px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    /* optional: control width */
    display: block;          /* or inline-block */
    max-width: 100%;
    }
    .slider.home7 .wrap-slider .slider-item .slider-content .text-1{
    margin: 15px 0;
    }
    .list .group-form {
    width: 30% !important;
    }
    .slider .wrap-slider .slider-content{
    padding: 156px 50px 100px !important;
    }
    .slider.home7 > form{
    gap:20px;
    max-width: 95%;
    }
    .form-search-home5 > .list{
    gap:15px;
    }
    h2 {
    font-size: 22px !important;
    }
    .heading-section {
    margin-bottom: 20px;
    }
    .form-search-home5{
    padding: 19px 10px 19px 20px;
    }
    .tf-button-filter{
    padding: 10px 30px;
    }
    .form-search-home5 .button-submit button{
    padding: 13px 30px;
    }
    .style-icon-default i {
    display: none;
    }
    .nice-select > span{
    font-size: 14px;
    }
    .nice-select:after{
    display: none;
    }
    .tf-section {
    padding: 20px 6px !important;
    }
    .selectize-dropdown-content .option{
    font-size: 12px !important;
    }
    .selectize-dropdown .option{
    padding: 0 !important;
    }
    .selectize-input{
    padding: 5px !important;
    }
    .flaticon-hotel{
    font-size: 20px !important;
    }
    .box-dream .content .icon-box .item i, .box-dream .content .icon-box .item p{
    font-size: 16px;
    }
    .box-dream .content .location p{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    /* optional: control width */
    display: block;          /* or inline-block */
    max-width: 100%; 
    }
    .perfect-home .wrap-image .box{
    display: none;
    }
    .tf-button-primary {
    gap: 10px;
    padding: 15px 15px;
    font-size: 12px;
    line-height: 12px;
}
.testimonials-item .description {
    font-weight: 400;
    font-size: 15px;
    line-height: 25px;
}
.flat-question .flat-accordion{
    max-width: 100%;
}
.flat-title {
        padding-top: 15px !important;
        padding-bottom: 50px !important;
        border-radius: 0 !important;
    }
}
.box-dream .content .head
 {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 11px;
    flex-direction: column;
}
</style>

  <!-- header -->
            <header id="header_main" class="header header-fixed type-home2 style-bg-white {{ request()->is('/') ? 'style-absolute' : '' }}">
                <div class="header-inner"> 
                    <div class="header-inner-wrap">
                        <div id="site-logo">
                            <a href="{{ url('/') }}" rel="home">
                                <img style="width:180px;" class="d-block" id="logo-header" src="{{url('frontend/assets/images/logo/logo.svg')}}"  alt="">
                            </a>
                        </div>
                        <nav class="main-menu">
                            <ul class="navigation">
                                <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a> </li>
                                <li class="{{ request()->is('off-plans') ? 'current' : '' }}"><a href="{{url('off-plans')}}">Off-Plan</a>  </li>
                                <!--<li class="{{ request()->is('ready') ? 'current' : '' }}"><a href="{{url('ready')}}">Ready</a> </li>-->
                                <!--<li class="{{ request()->is('rent') ? 'current' : '' }}"><a href="{{url('rent')}}">Rent</a></li>-->
                                <li class="{{ request()->is('services') ? 'current' : '' }}"><a href="{{url('services')}}">Services</a></li>
                                <li class="{{ request()->is('about-us') ? 'current' : '' }}"><a href="{{url('about-us')}}">About Us</a></li>
                                <li class="{{ request()->is('invest-in-dubai') ? 'current' : '' }}"><a href="{{ url('invest-in-dubai') }}">Invest In Dubai</a></li>
                                <li class="{{ request()->is('contact-us') ? 'current' : '' }}">
                                    <a href="{{url('contact-us')}}">Contact</a>
                                </li>
                                
                                <li class="">
                                    <a href="#">International</a>
                                    <ul>
                                        <li class="{{ request()->is('geneva') ? 'current' : '' }}">
                                    <a href="{{url('geneva')}}">Geneva Office</a>
                                </li>
                                <li class="{{ request()->is('uk') ? 'current' : '' }}">
                                    <a href="{{url('uk')}}">UK Office</a>
                                </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-right">
                            <div class="header-call">
                                <div class="icon">
                                    <i class="flaticon-whatsapp"></i>
                                </div>
                                <div class="number"><a target="blank" href="https://api.whatsapp.com/send/?phone=971522983469">Whatsapp Us</a></div>
                            </div>
                            <!--<div data-bs-toggle="modal" data-bs-target="#modallogin" class="header-user">
                                <div class="icon">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div> -->
                            <div class="header-btn">
                                <a href="{{ url('list-your-property') }}" class="tf-button-default">Add Listing</a>
                            </div>
                        </div>
                        <a class="mobile-nav-toggler mobile-button" href="#menu"></a>
                    </div>
                </div>
                <nav id="menu">
                    <a class="close" aria-label="Close menu" href="#mm-22">
                        <i class="icon-close"></i>
                    </a>
                    <ul>
                        <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a> </li>
                                <li class="{{ request()->is('off-plans') ? 'current' : '' }}"><a href="{{url('off-plans')}}">Off-Plan</a>  </li>
                                <!--<li class="{{ request()->is('ready') ? 'current' : '' }}"><a href="{{url('ready')}}">Ready</a> </li>-->
                                <li class="{{ request()->is('rent') ? 'current' : '' }}"><a href="{{url('rent')}}">Rent</a></li>
                                <li class="{{ request()->is('services') ? 'current' : '' }}"><a href="{{url('services')}}">Services</a></li>
                                <li class="{{ request()->is('about-us') ? 'current' : '' }}"><a href="{{url('about-us')}}">About Us</a></li>
                                <li class="{{ request()->is('invest-in-dubai') ? 'current' : '' }}"><a href="{{ url('invest-in-dubai') }}">Invest In Dubai</a></li>
                                <li>
                                    <span>International</span>
                                    <ul>
                                        <li class="{{ request()->is('geneva') ? 'current' : '' }}">
                                    <a href="{{url('geneva')}}">Geneva Office</a>
                                </li>
                                <li class="{{ request()->is('uk') ? 'current' : '' }}">
                                    <a href="{{url('uk')}}">UK Office</a>
                                </li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('contact-us') ? 'current' : '' }}">
                                    <a href="{{url('contact-us')}}">Contact</a>
                                </li>
                    </ul>
                </nav>
            </header>
            <!-- /header -->