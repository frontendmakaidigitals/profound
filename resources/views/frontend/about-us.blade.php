@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'About Us')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif
@section('content')
<style>
.ceo-content h2{
font-size:33px;
}
.ceo-content h5{
color: #e7c873 !important;
    text-transform: uppercase;
    font-size: 16px;
    text-decoration: underline;
    font-weight: 400;
    margin-top: -10px;
}
.luxury-home .image img {
    height: 626px;
    object-fit: cover;
}
.ceo-para p{
color:#fff;
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
@media(max-width:768px){
.luxury-home .image img {
    height: 350px;
}
.ceo-content{
margin-top:50px
}
}
</style>

  <div class="main-content px-20 default">

                <div class="space-20"></div>

                <!-- flat-title 
                <section class="flat-title inner-page" style="background:url({{asset('frontend/assets/images/2151279237-ezgif.com-jpg-to-webp-converter.webp')}});background-repeat:no-repeat;background-size:cover;background-position:center;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>About Us</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->


                 <!-- luxury-home -->
                <section class="tf-section luxury-home style-5 mt-5" style="background: #000;padding: 0px 0px 0 30px;overflow:hidden;">
                    <div class="">
                        <div class="row justify-between flex-row-reverse">
                            
                            <div class="col-md-6 text-end" style="padding:0 !important;">
                                <div class="wow fadeInLeft">
                                    <img src="{{ asset('frontend/assets/images/ashfaq-ezgif.com-png-to-webp-converter.webp') }}" alt="">
                                </div>
                            </div>

                            <div class="col-xl-5 col-md-6">
                                <div class="content ceo-content">
                                    <h2 style="text-transform:uppercase" class="wow fadeInUp text-white mb-0">Muhammad Ashfaq Hussain</h2>
                                    <h5 class="wow fadeInUp">CEO & Founder | Profound Realtors</h5>
                                    <div class="text-content wow fadeInUp ceo-para mt-5" style="text-align:justify">
                                     {!! !empty($about) ? $about->ceoMsg : 'Life is beautiful when your dreams come true. We at Profound Realtors know how busy 
                                life can get and how easy it is for people to lose sight of their dreams. Profound Realtors offers the best services in Real Estate, 
                                helping you find the right home or Investment. So, sit back, relax and trust us to turn your dreams into reality' !!}
                                    </div>
                                   
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->


                <!-- luxury-home -->
                <section class="tf-section luxury-home py-100 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/312-ezgif.com-jpg-to-webp-converter.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Our Mission, Vision, and Core Values</h2>
                                    <div class="text-content wow fadeInUp">
                                     {!! !empty($about) ? $about->mission_desc : '<p>Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty. We offer one of the best real estate investment opportunities in the UAE. We have a highly motivated and determined team, who has been providing for the diverse needs of its clients with deliberate, strategic, and innovative solutions. We have more than 3000 luxury exclusive properties in our portfolio.</p>
                                    <p>We provide stellar real estate services to all our clients from the Sale, Purchase, and Lease of properties. Furthermore, we provide in-depth guidance on investment in both residential and commercial real estate.</p>
                                    ' !!}
                                    </div>
                                   <!-- <ul class="list">
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Excellent Price-quality Correlation</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Integrity</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Innovation & Creativity</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Commitment</li>
                                    </ul>-->
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->
                

                <!-- work-with-us -->
                <section class="tf-section work-with-us style-2 py-100">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Why You Should Work With Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-center">
                           <div class="col-xl-10">
                            <div class="wrap">
                                <div class="box-icon style-1 wow fadeInUp">
                                    <div class="icon has-ellipse">
                                        <i class="flaticon-house-1"></i>
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Wide Range of Properties</a> 
                                        <p>We offer expert legal help for all related <br> property items in Dubai.</p>
                                    </div>
                                </div>
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="icon has-ellipse">
                                        <i class="flaticon-home"></i>
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Buy or Rent Homes</a> 
                                        <p>We sell your home at the best market price <br> and very quickly as well.</p>
                                    </div>
                                </div>
                                <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon has-ellipse">
                                        <i class="flaticon-shield"></i>
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">Trusted by Thousands</a> 
                                        <p>We offer you free consultancy to get a loan <br> for your new home.</p>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </section>
                <!-- /work-with-us -->

               
                <div class="cl-container py-100">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <div class="text">Thousands of world’s leading companies trust Space</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="flat-brand">
                                    <div class="swiper-container slider-brand">                            
                                        <div class="swiper-wrapper">
                                          @foreach($developers as $developer)
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{ asset($developer->dev_logo) }}" alt="">
                                                    </a>
                                                </div>                         
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


 <!-- flat-experts -->
                <section class="tf-section flat-experts py-100">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Meet Our Team Of Experts</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row wrap-experts mb-0">
                            <div class="col-12">
                                <div class="">
                                    <div class="row">
                                        @foreach($agents as $agent)
                                        <div class="col-md-3 col-6 my-5">
                                            <div class="experts-item wow fadeInUp">
                                                <div class="image">
                                                    <a href="team/{{ $agent->slug }}">
                                                    <img src="{{ $agent->image }}" alt="{{ $agent->first_name }}">
                                                    </a>
                                                </div>
                                                <a href="team/{{ $agent->slug }}">
                                                <h4>{{ $agent->first_name }}</h4>
                                                </a>
                                                <p>{{ $agent->designation }}</p>
                                                <p><a href="tel:{{ $agent->phone }}" class="text-decoration-none">{{ $agent->phone }}</a></p>
                                                <p>{{ $agent->languages }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-experts -->



            </div>

@endsection
