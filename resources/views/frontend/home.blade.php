@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Realtors in Dubai & UAE - Top Real Estate Agency In Dubai')
	 @section('pageDescription', 'Best real estate to buy, sell property in UAE. Profound Realtors is one of the best leading top real estate agency in Dubai.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers,Top Real Estate Agency In Dubai')
 @endif

@section('content')
<?php
$currency = session()->get('currency');

if (empty($currency)) {

  $currency =  'AED';

}
?>

<style>
#searchForm input::placeholder {
    color: #000 !important;
    font-family: "Poppins", sans-serif !important;
    font-size: 13px;
}
.form-search-home5 .button-submit button{
    border-radius: 0px !important;
}
#searchForm {
    background-color: #ffffffa6;
    box-shadow: 0px 1px 10px 3px #0000004d;
    backdrop-filter: blur(2px);
    border-radius: 0px !important;
    align-items: center;
}
.form-style-has-title .title{
     color: #000;
     font-weight: 500;
     font-size: 14px;
    font-family: "Poppins", sans-serif !important;
}
.slider.home7 > form > .list .group-form.form-search-content {
    width: 445px;
}

.form-search-home5 > .list > .divider-1
 {
    background-color: #000000;
    width: 0.5px !important;
}
  #text{
    display:none;
    }
    #toggle1{
        cursor:pointer;
    }
    .py-100{
    padding:100px 0 !important;
    }
    .my-100{
    margin:100px 0 !important;
    }
    .seo-content h1 {
    font-size: 40px;
}
.seo-content h3, .seo-content h4{
    margin: 15px 0;
}
a#toggle1 {
    font-size: 20px;
    font-weight: 500;
    display: block;
    margin: 20px 0;
}
.luxury-home .image img {
    height: 626px;
    object-fit: contain;
    border-radius:0;
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
.slider.home7 .wrap-slider{
height:100vh;
justify-content: center;
display: flex;
flex-direction: column;
}
.wg-blog .content{
    min-height: 225px;
}
.work-with-us.style-2{
    padding-bottom: 90px;
}
.py-50{
    padding: 50px 0 !important;
}
@media(max-width:768px){
    .form-style-has-title .title{
        font-size:13px;
    }
    .seo-content h1 {
    font-size: 22px;
}
input.style-default::placeholder {
    font-size: 11px !important;
}
.slider.home7 > form > .list .group-form.form-search-content{
    width:100% !important;
    background: #f4f4f48a;
        padding: 15px;
}
.list .group-form{
    width: 46% !important;
    background: #f4f4f48a;
        padding: 15px;
}
.form-search-home5 > .list {
        gap: 25px;
    }
}
</style>
 <!-- main-content -->
            <div class="main-content default spacing-20">

				   <!-- slider -->
                <section class="slider home7">
                    <div class="swiper-container slider-home7 slider-effect-fade arrow-style-1 pagination-style-1" style="border-radius:20px;">
                        <div class="swiper-wrapper">
                        <!-- 
                        <div class="swiper-slide">
                                <div class="wrap-slider">
                                    <div class="image">
                                        <img src="{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-3.webp') }}" alt="">
                                    </div>
                                    <div class="slider-item">
                                        <div class="cl-container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="slider-content">
                                                        <div class="sub wow">{{ ($banner != null) ? $banner->heading_two :  'Home'}}</div>
                                                        <h2 class="fade-item fade-item-2 text-white">{{ ($banner != null) ? $banner->heading_one :  'Home'}}</h2>
                                                        <a href="{{url('off-plans')}}" class="tf-button-primary m-auto fade-item fade-item-4 mt-5">Discover Now<i class="icon-arrow-right-add"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
                       @if(count($featureProperties) > 0) 
                                @foreach($featureProperties as $row)
                                @if($row->is_crm == 0)
                                <?php

                                   //dd($row);

                                    if($row->price == '0'){

                                        $price = 'Ask for Price';

                                        $currencySign = '';

                                        $class = 'btn_ask';

                                    }else{

                                        $class = '';

                                        $currencySign = $currency;

                                        $price = number_format(getprice($row->price), 0);

                                    }

                                ?>
                            <div class="swiper-slide">
                                <div class="wrap-slider">
                                    <div class="image">
                                     @if($row->image)
                                        <img src="{{ asset($row->image) }}" alt="{{$row->title}}">
                                         @endif
                                    </div>
                                    <div class="slider-item">
                                        <div class="cl-container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="slider-content">
                                                        <div class="text fade-item fade-item-1">{{$row->address}}</div>
                                                        <h2 class="fade-item fade-item-2 text-white">{{$row->title}}</h2>
                                                        <div class="text-1 fade-item fade-item-3">@if($row->price == '0') {{ $price }} @else AED {{ $price }} @endif</div>
                                                        <a href="{{ url('off-plans-property/'.$row->slug) }}" class="tf-button-primary m-auto fade-item fade-item-4">View Details<i class="icon-arrow-right-add"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif @endforeach @endif

                        </div>
                        <div class="home7-next has-background swiper-button-next"></div>
                        <div class="home7-prev has-background swiper-button-prev"></div>
                    </div>
                    <form id="searchForm" class="form-search-home5" action="{{ url('sell-home') }}" method="GET" enctype="multipart/form-data">
                        <div class="list">
                            <div class="group-form form-search-content">
                                <div class="form-style-has-title">
                                    <div class="title">Get a Free Consultation</div>
                                    <div class="relative">
                                        <input type="text" name="askAnything" class="style-default" placeholder="Buying Residential, Commercial, or Mortgage-Free Services."/>
                                    </div>
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                                <div class="form-style-has-title">
                                    <div class="title">Email</div>
                                     <input type="email" name="email" class="style-default" placeholder="Enter Your Email"/>
                                    
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                                <div class="form-style-has-title">
                                    <div class="title">Mobile Number</div>
                                    <input type="tel" name="phone" class="style-default" placeholder="Enter Your Mobile"/>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap10">
                            <div class="group-form">
                                <div class="button-submit">
                                    <button class="" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- /slider -->


                <!-- work-with-us -->
                <section class="tf-section work-with-us pb-5">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp" style="margin-top:10px;">Why You Should Work With Us</h2>
                                </div>
                            </div>
                        </div>
						
						<div class="row justify-center">
                           
								<div class="col-xl-4 col-md-6 col-12"> 
									<div class="wg-blog wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="image">
                                            <img src="{{url('frontend/assets/images/property-worth.jpg')}}" alt="">
                                        </div>
                                        <div class="content has-border">
											<div class="name" style="margin-bottom:10px;">
												<a href="{{url('property-worth')}}">How much is your property worth?</a>
                                            </div>                                           
										   <div class="sub-blog" style="margin-bottom:28px;">
                                                <div>Navigate the property market with confidence with the latest Dubai Land Department sales and lettings data at your fingertips.</div>                                                        
										    </div>
                                            <a href="{{url('property-worth')}}" class="tf-button-no-bg">
                                                Read More <i class="icon-arrow-right-add"></i>
                                            </a>
                                        </div>
                                    </div>
								</div>
								<div class="col-xl-4 col-md-6 col-12"> 
									<div class="wg-blog wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="image">
                                            <img src="{{url('frontend/assets/images/tv.jpg')}}" alt="">
                                        </div>
                                        <div class="content has-border">
											<div class="name" style="margin-bottom:10px;">
												<a href="{{url('profound-videos')}}">Profound Realtors TV</a>
                                            </div>                                           
										   <div class="sub-blog" style="margin-bottom:28px;">
                                                <div>Watch the latest episode of our Taking Care of Business podcast</div>                                                        
										    </div>
                                            <a href="{{url('profound-videos')}}" class="tf-button-no-bg">
                                                Read More <i class="icon-arrow-right-add"></i>
                                            </a>
                                        </div>
                                    </div>
								</div>
								<div class="col-xl-4 col-md-6 col-12"> 
									<div class="wg-blog wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="image">
                                            <img src="{{url('frontend/assets/images/news.jpg')}}" alt="">
                                        </div>
                                        <div class="content has-border">
											<div class="name" style="margin-bottom:10px;">
												<a href="{{url('blogs')}}">Latest News</a>
                                            </div>                                           
										   <div class="sub-blog" style="margin-bottom:28px;">
                                                <div>The latest news and highlights from Dubai's real estate market</div>                                                        
										    </div>
                                            <a href="{{url('blogs')}}" class="tf-button-no-bg">
                                                Read More <i class="icon-arrow-right-add"></i>
                                            </a>
                                        </div>
                                    </div>
								</div>
                         
                        </div>

<style>
    .exclusive-prev, .exclusive-next {
    width: 40px;
    height: 40px;
    background: #00000073;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    cursor: pointer;
    border-radius: 50%;
}
.exclusive-prev i, .exclusive-next i{
    font-size: 16px;
}
.exclusive-prev { left: 10px; }
.exclusive-next { right: 10px; }
@media(min-width:1700px){
    .exclusive-prev { left: -160px; }
.exclusive-next { right: -160px; }
}

</style>

                       <div class="mt-5">
							<div class="row">
								<div class="col-12">
									<div class="heading-section text-center">
										<h2 class="wow fadeInUp">Featured Properties</h2>
									</div>
								</div>
							</div>
                        </div>
                        <div class="widget-tabs style-1" style="position:relative">
                            
                            <div class="widget-content-tab">
                                
                                <div class="widget-content-inner active">
                                <div class="swiper featuredpropertySlider">
                                <div class="swiper-wrapper">
                                    @if(count($featureProperties) > 0) 
                                @foreach($featureProperties as $row)
                                @if($row->is_crm == 0)
                                <?php

                                   //dd($row);

                                    if($row->price == '0'){

                                        $price = 'Ask for Price';

                                        $currencySign = '';

                                        $class = 'btn_ask';

                                    }else{

                                        $class = '';

                                        $currencySign = $currency;

                                        $price = number_format(getprice($row->price), 0);

                                    }

                                ?>
                                        <div class="swiper-slide">
                                        
                                        <div class="box-dream has-border">
                                <div class="image">
                                <div class="list-tags">

                                <a class="tags-item for-sell">Off-Plan</a>

                                </div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <div class="">
                                <img class="" src="{{ asset($row->image) }}" alt="{{$row->title}}">
                                </div>
                                </div>
                           
                                
                                </div>

                                </div>
                                </div>
                                <div class="content">
                                <div class="head">
                                <div class="title">
                                <a href="{{ url('off-plans-property/'.$row->slug) }}">{{$row->title}}</a>
                                </div>
                                <style>
                                .start-price{font-size: 14px !important;color: #000 !important;font-weight: 300 !important;margin-bottom:5px;}
                                </style>
                                
                                <div class="price">@if($row->price == '0') {{ $price }} @else <p class="start-price">Starting Price:</p> AED {{ $price }} @endif</div>
                                </div>
                                <div class="location">
                                <div class="icon">
                                <i class="flaticon-location"></i>
                                </div>
                                <p>{{$row->address}}</p>
                                </div>
                                <div class="icon-box">
                                
                                @if($row->propertyBedrooms->count() > 0)
                                <div class="item">
                                <i class="flaticon-hotel"></i>
                                <p>{{$row->propertyBedrooms->implode('bedrooms',',')}}</p>
                                </div>
                                @endif
                                
                                @if($row->bathrooms != 0)
                                <div class="item">
                                <i class="flaticon-bath-tub"></i>
                                <p>{{$row->bathrooms}}</p>
                                </div>
                                @endif

                                
                                <div class="item">
                                <i class="flaticon-minus-front"></i>
                                <p>{{$row->area}}</p>
                                </div>
                                
                                
                                </div>
                                </div>
                                </div>
                                        </div>
                                
                                @endif @endforeach @endif
                                          
                                    </div>
                                    <div class="exclusive-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="exclusive-next"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </section>
                <!-- /work-with-us -->

                 <section class="tf-section work-with-us style-2 pt-0 pb-30">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">We are the Best and Most Trusted Real Estate Agents</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-center">
                           <div class="col-xl-10">
                            <div class="wrap">
                                <div class="box-icon style-1 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="icon has-ellipse">
                                        <i class="flaticon-house-1"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Buy a Home</a> 
                                        <p>Browse from millions of properties in your city, save your favorites, and set up search alerts.</p>
                                    </div>
                                </div>
                                <div class="box-icon style-1 wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="icon has-ellipse">
                                        <i class="flaticon-home"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Rent a Home</a> 
                                        <p>Choose from the best short-term & long-term rental properties in Dubai based on your convenience.</p>
                                    </div>
                                </div>
                                <div class="box-icon style-1 wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon has-ellipse">
                                        <i class="flaticon-shield"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Sell a Home</a> 
                                        <p>Are you looking to sell your home? In just a few steps, you can find the best buyer for your property.</p>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </section>



                <!-- flat-cities -->
                <section class="flat-cities style-1 py-50">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2>Find Properties in These communities</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="wrap">
                                    <div class="swiper-container padding-bottom-80 pagination-style-2 slider-cities pb-0">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="cities-item style-2 wow fadeInUp">
                                                    <img src="{{ asset('frontend/assets/images/business%20bay.jpg') }}" alt="">
                                                    <div class="content">
                                                        <h4>{{ $communities[6]->name }}</h4>
                                                    </div>
                                                    <a href="{{ url('listing?communitieslists[]='.$communities[6]->slug)}}" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="cities-item style-2 wow fadeInUp" data-wow-delay="0.1s">
                                                    <img src="{{ asset('frontend/assets/images/dubai-land.jpg') }}" alt="">
                                                    <div class="content">
                                                        <h4>{{ $communities[4]->name  }}</h4>
                                                    </div>
                                                    <a href="{{ url('listing?communitieslists[]='.$communities[4]->slug)}}" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="cities-item style-2 wow fadeInUp" data-wow-delay="0.15s">
                                                    <img src="{{ asset($communities[3]->image) }}" alt="">
                                                    <div class="content">
                                                        <h4>{{ $communities[3]->name  }}</h4>
                                                    </div>
                                                    <a href="{{ url('listing?communitieslists[]='.$communities[3]->slug)}}" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="cities-item style-2 wow fadeInUp" data-wow-delay="0.2s">
                                                    <img src="{{ asset($communities[0]->image) }}" alt="">
                                                    <div class="content">
                                                        <h4>{{ $communities[0]->name  }}</h4>
                                                    </div>
                                                    <a href="{{ url('listing?communitieslists[]='.$communities[0]->slug)}}" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination cities-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-cities -->

                <!-- perfect-home -->
                <section class="perfect-home py-50">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="wrap-image">
                                    <div class="image mb-20 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                                        <img src="{{url('frontend/assets/images/section/perfect-home-1.jpg')}}" alt="">
                                    </div>
                                    <div class="flex gap20">
                                        <div class="image wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                            <img src="{{url('frontend/assets/images/section/perfect-home-2.jpg')}}" alt="">
                                        </div>
                                        <div class="image wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                                            <img src="{{url('frontend/assets/images/section/perfect-home-3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="icon">
                                            <i class="flaticon-buy-home"></i>
                                        </div>
                                        <div>
                                            <p>Properties For Sell</p>
                                            <h4>14K</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="content-right">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">How It works? <br> Find a perfect home</h2>
                                    <div class="text-content wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Browse our listings to find your dream home effortlessly. Explore properties that match your lifestyle and budget.</div>
                                    <div class="counter">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-30">
                                    <div class="number-counter style-1">
                                        <div class="text-center">
                                            $<span class="number" data-speed="2500" data-to="16" data-inviewport="yes">16</span>.4M
                                        </div>
                                        <h4>Dubai Land Dept.</h4>
                                        <p class="text-content">Registered with Dubai Land Department for secure transactions.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 mb-30">
                                    <div class="number-counter style-1">
                                        <div class="text-center">
                                            <span class="number" data-speed="2500" data-to="26" data-inviewport="yes">26</span>K+
                                        </div>
                                        <h4>Most Transaction</h4>
                                        <p class="text-content">Highest number of transactions.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 mb-30">
                                    <div class="number-counter style-1">
                                        <div class="text-center">
                                            <span class="number" data-speed="2500" data-to="14" data-inviewport="yes">14</span>K+
                                        </div>
                                        <h4>Properties Buy <br> Sell</h4>
                                        <p class="text-content">Buy and sell properties with ease.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="number-counter style-1">
                                        <div class="text-center">
                                            <span class="number" data-speed="2500" data-to="890" data-inviewport="yes">890</span>
                                        </div>
                                        <h4>Daily Completed <br> Transactions</h4>
                                        <p class="text-content">Transactions completed daily.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /perfect-home -->

                <!-- flat-testimonial -->
                <section class="flat-testimonial style-1 py-50">
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

                    <div class="divider"></div>

                    <div class="cl-container pt-5">
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
                </section>
                <!-- /flat-testimonial -->


                <!-- flat-experts -->
                <section class="flat-experts py-50">
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
                                <div class="swiper-container slider-news slider-auto">
                                    <div class="swiper-wrapper">
                                        @foreach($agents->take(4) as $agent)
                                        <div class="swiper-slide">
                                            <div class="experts-item wow fadeInUp">
                                                <div class="image">
                                                    <a href="team/{{ $agent->slug }}">
                                                    <img src="{{ $agent->image }}" alt="{{ $agent->first_name }}">
                                                    </a>
                                                </div>
                                                <h4><a href="team/{{ $agent->slug }}">{{ $agent->first_name }}</a></h4>
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
<style>
    #text h2{
        font-size: 22px;
        margin: 15px 0 5px 0 ;
    }
</style>
 <section class="py-50">
                        <div class="cl-container seo-content">
                            <h1 class="mainHeadingCent text-black text-black">Realtor in Dubai</h1>
                            
                            <p>
                                 Looking to invest in a property in Dubai? <a href="{{ asset('blog-details/why-dubai-real-estate-shines-with-profound-realtors') }}"><b>Real estate</b></a> in Dubai is a rapidly growing market where In this diverse market, finding the right <a href="https://profoundrealtors.com/"><b>realtors in Dubai</b></a> can be a challenging task. Fortunately, at Profound Realtors, we have experienced realtors who are there for your rescue. Whether you have set your eyes on <a href="{{ asset('buy-luxury-villas-in-dubai') }}"><b>luxury villas in Dubai</b></a>, or want to <a href="{{ asset('buy-properties-in-dubai-marina') }}"><b>buy properties in Dubai Marina</b></a>, or even <a href="{{ asset('blog-details/invest-in-dubai-property-from-dh-2000') }}"><b>invest in Dubai</b></a>. Our team of RERA-certified experts is here to assist you with every step of your journey to buying your next family home or a profitable rental.</p>
                            <span id="text">
                                    
                                <h2 class="text-black">Real Estate in Dubai</h2>
                                <p>
                                    If you want to invest in villas for sale in Dubai or want to <a href="{{ asset('buy-properties-in-jbr') }}"><b>buy properties in JBR</b></a>, you are in for a treat, as Dubai's diversified market offers options to suit every taste and budget. If you are an investor, this real estate market can be the best stepping stone on your path to success, as this market offers one of the best infrastructures that you can encounter, with strong potential for long-term returns.
                                </p>
                                 
                                <h2 class="text-black">Realtors in the UAE</h2>
                                <p>
                                    The profession of <a href="https://profoundrealtors.com/"><b>realtors in UAE</b></a> has grown speedily alongside the growth of Real estate in Dubai. Going through every possible option of properties, be it in the buzzing city of Dubai or the cultural city of Sharjah, can be an overwhelming task. To simplify this tedious job, you can take advantage of realtors who can act as a bridge connecting you with suitable properties. At Profound Realtors, we focus on guiding you through every option with clarity and care, helping you ease your way into understanding local neighborhoods, property laws, and the lifestyle that comes with each investment.
                                </p>
                                <h2 class="text-black"> Real Estate Agents in Dubai</h2>
                                <p>
                                    Dubai's real estate market is an exciting opportunity, but it can also be a lot to take in. Fortunately, our expert <b>realtors in Dubai</b> are here to guide you so that you can turn this complex project into an easy mission. We at profound realtors have worked with enough people to understand each client's unique needs. This is also the reason why we offer personalized assistance. This provides you with advice on what is best suited for your specific goals. We offer assistance every step of the way, from in-depth market analysis to skillful negotiation and managing transactions, ensuring a fruitful experience.
                                </p>

                                <h2 class="text-black"> Real estate companies in Dubai</h2>
                                <p>
                                    We are aware that navigating through Dubai's real estate market can be especially difficult for investors who want to <a href="{{ asset('invest-in-dubai-from-uk') }}"><b>invest in Dubai from UK</b></a>, the USA, or anywhere abroad. The best real estate companies in Dubai don't believe in cookie-cutter services and know these investments are not just another transaction but a deeply personal story. It's a process filled with hurdles and questions, that's exactly where profound realtors come in. 
                                </p>
                                <h3 class="text-black">1. Why are there so many realtors in Dubai?</h3>
                                <p>
                                    A tax-free environment is a great opportunity for every professional living in Dubai. The realtors in Dubai can keep a larger sum of their earnings compared to any other country. This policy is what attracts many individuals to this profession.
                                </p>
                                 <h3 class="text-black">2. Is it worth buying real estate in Dubai?</h3>
                                <p>
                                 Yes, Dubai's real estate can be an excellent opportunity for investors who are after high-demand areas like Downtown Dubai and Dubai Marina, which can bring them high returns on their investments. However, it's important to take help from a local real estate expert to get a know-how about fluctuating market trends and make an informed decision. 
                                </p>
                                <h3 class="text-black">3. Can foreigners buy real estate in Dubai?</h3>
                                <p>
                                  Yes, you can <a href="{{ asset('invest-in-dubai-from-usa') }}">invest in Dubai from USA</a>, or anywhere outside Dubai. The government has also set aside designated freehold areas where foreigners can easily <a href="{{ asset('buy-luxury-villas-in-dubai') }}">buy villas for sale in Dubai</a> and own 100 percent of the property. Both residential and commercial properties are included in these freehold areas.
                                </p>
                                <h3 class="text-black">4. Is Dubai Marina a good investment?</h3>
                                <p>
                                  If you are looking for better rental yields and an enhanced lifestyle, you can choose to buy properties in Dubai Marina, as it's more accessible. Whereas if you are after better long-term investment and exclusivity, Palm Jumeirah can be a better option.
                                </p>
                                <h3 class="text-black">5. Is JBR a good investment?</h3>
                                <p>
                                 JBR appeals more to tourists and families who require beachside living options. It can be a good investment as JBR has a bigger unit size. This makes it eligible to be listed on Airbnb during peak tourist periods.
                                </p>
                                <h3 class="text-black">6. Can I invest in Dubai from the UK?</h3>
                                <p>
                                 Yes, you can invest in Dubai from the UK, because of Dubai's freehold areas and no tax policy, it has become a central hub for international investors, business owners, and residents alike.
                                </p>
                                 <h3 class="text-black">7. Can you invest in Dubai from the USA?</h3>
                                <p>
                                  Yes, you can invest in Dubai from the USA. It's way easier and beneficial to invest in Dubai from the USA because of the designated freehold areas and the no-tax policy. Another reason is the Dubai Land Department, which oversees transactions of real estate in Dubai, ensuring secure and transparent payments.
                                </p>
                            <h3 class="text-black">About Us</h3>
                            <p>
                                Profound Realtors is a premier <b>real estate company</b> specializing in buying, selling, and leasing properties in Dubai. With years of industry expertise and an in-depth understanding of Dubai's dynamic property market, we take pride in being a trusted partner for clients looking to make wise real estate decisions.
                            </p>
                            <h3 class="text-black">Why Choose Profound Realtors?</h3>

                            <h4 class="text-black">1. Extensive Property Portfolio</h4>
                            <p>
                                We offer an extensive selection of properties, ranging from luxurious ready-made apartments to ambitious off plan developments in Dubai's most sought-after locations. Whether you're looking to <a href="{{ asset('buy-properties-in-business-bay') }}">buy properties in Business Bay</a> or other prime areas, we have you covered. For international investors looking to <a href="{{ asset('invest-in-dubai-from-usa') }}">invest in Dubai from USA</a>, our expert team ensures a seamless and secure buying experience.We also provide a variety of options if you're seeking a <a href="{{ asset('property-for-rent-in-business-bay') }}">property for rent in Business Bay</a>, perfect for professionals and families alike.
                            </p>
                            <h4 class="text-black">2. Expert Guidance</h4>
                            <p>
                                Navigating the Dubai real estate market can be overwhelming, but with Profound Realtors, you're in capable hands. Our team of dedicated <b><a href="https://profoundrealtors.com/">real estate agents in Dubai</a></b> will provide you with personalized advice, in-depth market insights, and the latest trends to help you make informed decisions, whether you're exploring various communities or planning to <a href="{{ asset('buy-properties-in-blue-water-island') }}">buy properties in Blue Water Island</a> for a premium waterfront lifestyle.
                            </p>
                            <h4>3. Trustworthy Relationships</h4>
                            <p>
                                At Profound Realtors, we believe that strong relationships are the foundation of success. Our commitment to transparency, integrity, and exceptional customer service has earned us the trust of numerous clients who have become part of our real estate family.
                            </p>
                            <h4>4. Off Plan Investment Opportunities</h4>
                            <p>
                            As Dubai continues to be a hub of innovation and architectural wonders, off plan properties present unparalleled investment prospects. We offer a diverse range of <a href="{{ asset('off-plans') }}"><b>off plan</b></a> projects, allowing you to invest in tomorrow's iconic landmarks today. 
                            </p>
                            <h4>5. Ready-Made Homes for Every Lifestyle</h4>
                            <p>
                                If you prefer a home that is move-in ready, we have an array of stunning ready-made properties. From chic urban apartments to elegant villas nestled in serene communities, we have options to cater to diverse tastes and budgets.
                            </p>
                            <h3 class="text-black">Our Services</h3>
                            <h4>1. Buying and Selling</h4>
                            <p>
                                Whether you are a first-time homebuyer or an experienced investor, we assist you throughout the entire buying and selling process. From property search and price negotiation to paperwork and settlement, we ensure a smooth and stress-free experience.
                            </p>
                            <h4>2. Leasing and Property Management</h4>
                            <p>
                            If you're looking to lease your property or need help managing your investment, our team offers comprehensive property management services to maximize your rental income and ensure your property is well-maintained. 
                            </p>
                            <h4>3. Investment Consultation:</h4>
                            <p>
                                For investors seeking to capitalize on the Dubai real estate market, our experts provide tailored investment advice, helping you identify high-yield opportunities that align with your financial objectives.
                            </p>
                            
                            <h3>Why Invest in Dubai?</h3>
                            <p>
                                Dubai's real estate market remains an attractive destination for both local and international investors. With a thriving economy, world-class infrastructure, tax-free benefits, and a high standard of living, Dubai offers a compelling environment for property investment.
                            </p>
                            
                            <h4>Start Your Journey with Profound Realtors</h4>
                            <p>
                                Discover the limitless possibilities that Dubai's real estate market offers with Profound Realtors. Whether you are searching for a dream home, an investment property, or expert advice, our team is dedicated to making your real estate journey an exceptional one.
                <br>
                <a href="{{ asset('contact-us') }}">Contact us</a> today to explore the best of Dubai's ready-made and off plan properties. Let Profound Realtors be your guide to unlocking the true potential of Dubai's real estate landscape.

                            </p>
                            </span>
                            
                            <a id="toggle1">Read More</a>
                            
                        </div>
                    </section>
              
<section class="flat-question style-1 py-50">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Frequently Asked Question</h2>
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="flat-accordion">
                                                
                                                <div class="flat-toggle active">
                                                    <h4 class="toggle-title active">1. What is Profound Realtors?</h4>
                                                    <div class="toggle-content">
                                                        <p> 
                                                           Profound Realtors is a premier real estate investment management company based in Dubai, specializing in providing comprehensive solutions for individuals and businesses looking to invest in the dynamic Dubai real estate market.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">2. What services does Profound Realtors offer?</h4>
                                                    <div class="toggle-content">
                                                        <p>We offer a range of services including real estate investment advisory, property sourcing, portfolio management, market research, due diligence, property management, and more. Our goal is to help investors make informed decisions and maximize returns on their real estate investments. </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">3. Why should I choose Profound Realtors for real estate investments?</h4>
                                                    <div class="toggle-content">
                                                        <p>Profound Realtors stands out for its deep understanding of the Dubai real estate landscape, a team of seasoned professionals, data-driven insights, and a commitment to delivering personalized investment strategies. We prioritize your financial goals and provide end-to-end support.</p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 4. How can Profound Realtors assist me in finding the right investment property?</h4>
                                                    <div class="toggle-content">
                                                        <p>  
                                               Our team conducts thorough market research to identify properties with potential for high returns. We consider factors such as location, market trends, property condition, and growth prospects. We then present you with carefully curated investment options that align with your investment objectives.</p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 5. What types of properties do you deal with?</h4>
                                                    <div class="toggle-content">
                                                        <p>       
                                                       We specialize in a diverse range of properties, including residential, commercial, luxury, and off-plan developments. Whether you're interested in rental income, capital appreciation, or both, we have investment opportunities to suit your preferences.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">  6. Is real estate investment in Dubai a good idea?</h4>
                                                    <div class="toggle-content">
                                                    <p>      
                                                   Dubai's real estate market has demonstrated strong growth and resilience over the years. Factors such as strategic location, infrastructure development, favorable business environment, and a thriving tourism industry contribute to its attractiveness for investors seeking stable and lucrative opportunities.
                                                    </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">7. Can Profound Realtors help with property management?</h4>
                                                    <div class="toggle-content">
                                                    <p>Absolutely. We offer property management services to ensure your investment remains well-maintained and generates optimal returns. From tenant screening and rent collection to maintenance coordination, we handle the operational aspects of your property.
                                                    </p>
                                                    </div>
                                                </div>
                                               
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 8. How do I get started with Profound Realtors?</h4>
                                                    <div class="toggle-content">
                                                    <p>Getting started is easy. Simply reach out to us through our website, email, or phone. One of our dedicated advisors will schedule a consultation to understand your investment goals and recommend a tailored approach to help you achieve them.</p>
                                                    </div>
                                                </div>
                                               
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">9. Are there any hidden fees or charges?</h4>
                                                    <div class="toggle-content">
                                                    <p>       
                                                   Transparency is a cornerstone of our service. We provide a clear breakdown of our fees and charges upfront, ensuring you have a comprehensive understanding of the costs involved before making any commitments.
                                                    </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">10. Can international investors benefit from your services?</h4>
                                                    <div class="toggle-content">
                                                    <p>       
                                                   Absolutely. We welcome both local and international investors. Our team has extensive experience working with international clients, and we provide remote support to ensure a seamless investment experience, regardless of your location.
                                                    </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">11. How do you stay updated with the Dubai real estate market?</h4>
                                                    <div class="toggle-content">
                                                    <p>       
                                                   We maintain a proactive approach to market research and analysis. Our team continuously monitors market trends, economic indicators, and regulatory changes to provide you with up-to-date insights that inform our investment recommendations.
                                                    </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">12. Is my personal and financial information secure with Profound Realtors?</h4>
                                                    <div class="toggle-content">
                                                    <p>       
                                                   Your privacy and security are of utmost importance to us. We adhere to strict data protection measures and industry standards to ensure the confidentiality of your personal and financial information.
                                                    </p>
                                                    </div>
                                                </div>
                                               

                                            </div>
                            </div>
                            </div>
                            </div>
                            </section>



                           




            </div>
            <!-- /main-content -->




@endsection
