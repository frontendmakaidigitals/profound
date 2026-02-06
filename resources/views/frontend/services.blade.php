@extends('frontend.layout.default')

@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Services')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif

@section('content')

<style>
.luxury-home .image img {
    height: 626px;
    object-fit: cover;
}
.flat-title.inner-page::after {
    content: '';
    background: #0000004d;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    border-radius: 20px;
    right: 0;
}
ul.list {
    flex-direction: column;
}
ul.list li {
    display: flex;
    align-items: center;
    font-size: 15px;
    gap: 9px;
}
.features-box-image.icon {
    background: #e7c873;
    padding: 6px 5px;
    width: 25px;
    border-radius: 52px;
    height: 25px;
}
.pt-10{
padding-top:50px;
}
.mt-10{
margin-top:50px;
}
.py-50{
padding:50px 0 !important;
}
.py-100{
padding:100px 0 !important;
}
.my-50{
margin:50px 0;
}
@media(max-width:768px){
.luxury-home .image img {
    height: 350px;
}
}
</style>

  <div class="main-content px-20 default">

                <div class="space-20"></div>

                <!-- flat-title -->
                <section class="flat-title inner-page" style="background:url({{ !empty($service) ? asset($service->banner_image)  : (!empty($banner) ? $banner->image : asset('frontend/assets/images/list-your-property.webp'))  }});background-repeat:no-repeat;background-size:cover;background-position:center;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{!empty($service) ? $service->banner_heading  :(!empty($banner) ? $banner->heading_one : 'Services') }}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                <!-- work-with-us -->
                <section class="tf-section work-with-us pb-0">
                    <div class="cl-container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">What we offer?</h2>
                                    <div class="text wow fadeInUp"> {!! !empty($service) ? $service->offer_desc : '<p>With our multicultural environment and exceptional team, we leave no stone unturned in offering our 
                            clients across the globe , the utmost care and convenience. Our services help them to successfully achieve their goal of owning a home or investing in properties with ease</p>' !!}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-center">
                           <div class="col-xl-10">
                            <div class="row">
                            <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp">
                                    <div class="icon has-ellipse">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Scheduled tours to Dubai's latest attractions</a> 
                                    </div>
                                </div>
                                </div>
                                
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="icon has-ellipse">
                                        <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/plane-departure.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Airport transfers</a> 
                                    </div>
                                </div>
                                </div>

                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                        <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/search-house.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Tour of latest launches in Dubai</a> 
                                    </div>
                                </div>
                                </div>

                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                        <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/officer.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Chauffer driven site visits to developers office</a> 
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                        <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/mortgage.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Investment Consultation</a> 
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                       <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/convenience.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Exclusive Unit availability</a> 
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                       <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/estate.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Dedicated Wealth/Property Advisor</a> 
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                       <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/property.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Residential Property Management</a> 
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                       <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/residential.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Commercial Property Management</a> 
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                       <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/property-management.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Building Property Management</a> 
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-3 pt-5">
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                       <img style="z-index: 1;position: relative;" src="{{ asset('frontend/assets/images/icon/business-and-trade.png') }}" />
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Facility Management of Full Buildings</a> 
                                    </div>
                                </div>
                                </div>
                                
                                
                            </div>
                           </div>
                        </div>
                    </div>
                </section>
                <!-- /work-with-us -->




                <!-- luxury-home -->
                <section class="tf-section luxury-home style-5">
                    <div class="cl-container">
                        <div class="row justify-content-around">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{ asset('frontend/assets/images/Image-4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">At Profound Realtors, We Care.</h2>
                                    <div class="text-content wow fadeInUp">
                                     {!! !empty($service) ? $service->care_desc : '<p>Profound Realtors has been helping clients buy, sell and rent properties in Dubai for the last 23 years. We offer complete real estate services ranging from Residential, Commercial Sales, leases, to and Real Estate Management Supervision. List your property with us, whether it is for sale or rent,and enjoy highly professional and personalized services.</p>

                            <p>We offer a broad variety of services to our premium clients and corporations. Our International network of clients and business partners is unparalleled. Our properties accommodate
                            local and international based potential buyers, without restrictions.</p>' !!}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->

               
             <section class="tf-section choose-us has-bg-vector py-100">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Why Choose Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-house"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Experience In The International And UAE Property Markets</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-seller"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Generating Maximum Returns & Capital Appreciation</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-buy-home"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Ensuring Long Term Savings</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-buildings-1"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Managing Real Estate Assets Locally And Internationally</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-city"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Broad Platform & Gathering Market Data</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-file"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Responsive & Adaptive to Market Changes</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


  <section class="tf-section flat-testimonial style-1 py-100 mt-5">
                    <div class="testimonials">
                        <div class="cl-container">
                            <div class="row justify-between">
                                <div class="col-xl-4 col-md-6">
                                    <div class="testimonials-inner">
                                        <h2 class="wow fadeInUp">Your home-buying journey should be smooth and stress-free</h2>
                                        <div class="text wow fadeInUp">Speak to our in-house mortgage team today and get access the best rates in the UAE.</div>
                                     <div class="flex gap20">
                                                   <a href="{{url('mortgage-calculator')}}" class="tf-button-primary w-full style-bg-white">Mortage Calculator<i class="flaticon-phone"></i></a>
                                                    <a href="{{url('contact-us')}}" class="tf-button-primary w-full style-bg-white">Contact Team<i class="flaticon-whatsapp"></i></a>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="swiper-container padding-bottom-80 slider-testimonials arrow-style-1 pagination-style-number">
                                        <div class="swiper-wrapper">
                                            @foreach($testimonials as $row)
                                            <div class="swiper-slide">
                                                <div class="testimonials-item">
                                                    <div class="head">
                                                        <div>
                                                            <div class="title wow fadeInUp">
                                                                <a href="#">{{$row->name}}</a>
                                                            </div>
                                                            <p class="wow fadeInUp">{{$row->designation}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="description wow fadeInUp">{{$row->feedback}}</div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                                        <g filter="url(#filter0_d_249_14836)">
                                                        <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                                        </g>
                                                        <defs>
                                                        <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                        <feOffset dx="6" dy="6"></feOffset>
                                                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                                        </filter>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="bottom-wrap">
                                            <div class="testimonials-prev has-border swiper-button-prev"></div>
                                            <div class="swiper-pagination testimonials-pagination"></div>
                                            <div class="testimonials-next has-border swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>


            </div>


@endsection