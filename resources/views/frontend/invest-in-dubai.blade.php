@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Invest In Dubai')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif
@section('content')


<style>
.swiper-button-prev, .swiper-container-rtl .swiper-button-next{
left: 0px;
right: auto;
}
.swiper-button-next, .swiper-container-rtl .swiper-button-prev{
right: 0;
left: auto;
}
.swiper-button-prev:after, .swiper-container-rtl .swiper-button-next:after, .swiper-button-next:after, .swiper-container-rtl .swiper-button-prev:after {
    font-size: 22px;
    color: #fff;
}
.px-5{
padding:0 50px !important;
}
.luxury-home .image img {
    height: 626px;
    object-fit: cover;
    object-position: top;
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
margin:50px 0 !important;
}
@media(max-width:768px){
.luxury-home .image img {
    height: 350px;
}
.px-5{
padding: 0 30px !important;
}
.column-reverse-mobile{
flex-direction: column-reverse;
}
.mt-5-mobile{
margin-top:25px !important;
}
}
</style>

  <div class="main-content px-20 default">

                <div class="space-20"></div>

                <!-- flat-title -->
                <section class="flat-title inner-page" style="background:url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-3.webp') }}');background-repeat:no-repeat;background-size:cover;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Invest in Dubai'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Invest in Dubai</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->

                <!--
                <section class="my-50">
                <div class="cl-container">
                <h2>Opportunities in Dubai Investment</h2>
                <br>
                <p>Today, Dubai is among the few international locations in the world that provide great real estate investment opportunities. The emirate guarantees variety and competitive returns even in unfavorable market conditions, with high rental yields ranging from five to ten percent by being the MENA region’s most transparent real estate market.</p>
                <br>
                    <p>Proving this point, the Dubai Land Department has recorded 6,652 sales transactions worth AED 18.4 Billion in May 2022. According to analysts, this number is only expected to rise in the coming months as the sector welcomes exciting new developments and growing interest from global investors.</p>
                </div>
                </section>
                -->

                <!-- slider 
                <section class="tf-section-default my-5">
                    <div class="cl-container">
                        <div class="row justify-center">
                            <div class="col-xxl-12">
                                <div class="swiper-container slider-4-center">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/images/Invest In Dubai/invest-in-dubai.webp') }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/images/Invest In Dubai/invest-in-dubai-2.webp') }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/images/Invest In Dubai/invest-in-dubai-3.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /slider -->


                <section class="tf-section luxury-home style-5 py-50">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                    <img src="{{ asset('frontend/assets/images/Invest In Dubai/invest-in-dubai-4.webp') }}" alt="">
                                    <div class="box">
                                        <div class="icon">
                                            <i class="flaticon-house"></i>
                                        </div>
                                        <div>
                                            <p>Properties</p>
                                            <h4>100K+</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">A few reasons to invest in Dubai:</h2>
                                    <div class="text-content wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <ul class="list">
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> One of the safest places in the world</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Unparalleled Global lifestyle</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> High-rental yield</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> World-class infrastructure</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Tax-free and freehold options</li>
                                    </ul>
                                    </div>
                                    <a href="{{url('contact-us')}}" class="tf-button-primary style-black wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Enquire Now <i class="icon-arrow-right-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="tf-section luxury-home style-5 mt-5" style="background: #11100e;padding: 50px 30px;">
                    <div class="cl-container"> 
                    <h2 class="text-center text-white" style="margin-bottom:30px">Dubai Most Famous Places</h2>
                        <div class="swiper-container slider-invest-dubai">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row justify-between align-items-center px-5 column-reverse-mobile">
                                    <div class="col-md-6">
                                        <h2 class="text-white mb-5 mt-5-mobile">Dubai Frame</h2>
                                        <p class="text-white">
                                        Standing as a giant "frame" of Dubai’s skyline, the Dubai Frame offers guests the chance to view the city’s dynamic transformation. Its addition to the tourism landscape has made it a significant draw for visitors seeking both history and modernity in one experience.
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img src="{{ asset('frontend/assets/images/Invest In Dubai/dubai-frame.webp') }}" />
                                    </div>
                                </div>
                            </div>
                           
                            <div class="swiper-slide">
                                <div class="row justify-between align-items-center px-5 column-reverse-mobile">
                                    <div class="col-md-6">
                                        <h2 class="text-white mb-5 mt-5-mobile">Dubai Eye</h2>
                                        <p class="text-white">
                                        As the world’s largest observation wheel, the Dubai Eye provides panoramic views of Dubai’s skyline. This iconic structure has had a strong impact, offering visitors a memorable experience and reinforcing Dubai’s reputation as a futuristic destination.
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img src="{{ asset('frontend/assets/images/Invest In Dubai/dubai-eye.webp') }}" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="row justify-between align-items-center px-5 column-reverse-mobile">
                                    <div class="col-md-6">
                                        <h2 class="text-white mb-5 mt-5-mobile">Burj Khalifa</h2>
                                        <p class="text-white">
                                        The Burj Khalifa, standing at 828 meters, is the tallest building in the world and a symbol of Dubai's architectural brilliance. 
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img src="{{ asset('frontend/assets/images/Invest In Dubai/burj.webp') }}" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="row justify-between align-items-center px-5 column-reverse-mobile">
                                    <div class="col-md-6">
                                        <h2 class="text-white mb-5 mt-5-mobile">Expo City</h2>
                                        <p class="text-white">
                                        Expo City Dubai, formerly the site of Expo 2020, is a futuristic cultural and business destination featuring iconic pavilions and cutting-edge architecture. It has become a top attraction, that offers a dynamic mix of exhibitions, events, and entertainment.
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img src="{{ asset('frontend/assets/images/Invest In Dubai/expo-city.webp') }}" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="row justify-between align-items-center px-5 column-reverse-mobile">
                                    <div class="col-md-6">
                                        <h2 class="text-white mb-5 mt-5-mobile">Museum of the Future </h2>
                                        <p class="text-white">
                                        The Museum of the Future is a futuristic wonder in Dubai, offering interactive experiences that explore the possibilities of tomorrow. This has significantly impacted enhancing Dubai’s status as a must-see destination for tech enthusiasts and culture seekers.
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img src="{{ asset('frontend/assets/images/Invest In Dubai/Museum.webp') }}" />
                                    </div>
                                </div>
                            </div>

                        </div>
                         <div class="home7-next has-background swiper-button-next homes-next"></div>
                        <div class="home7-prev has-background swiper-button-prev homes-prev"></div>
                        </div>
                    </div>
                 </section>

                <!--
                 <section class="my-50">
                <div class="cl-container text-center">
                <h2>Off-Plan Properties</h2>
                <p>When buying property as an investment, it’s important to look for two key attributes - high returns and capital growth; something which can easily be achieved when purchasing off-plan. Off-plan developments are currently experiencing some of their highest sales levels and their popularity is heightened by the ability to negotiate excellent discounts either before the property is built or whilst it’s under construction.</p>
                </div>
                </section>
                -->


                 <section class="tf-section luxury-home style-5 py-50">
                    <div class="cl-container">
                        <div class="row justify-content-around">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                    <img src="{{ asset('frontend/assets/images/Invest In Dubai/invest-in-dubai-5.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">A few reasons to consider investing in off-plan properties in Dubai:</h2>
                                    <div class="text-content wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <ul class="list">
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Prices are significantly lower than average</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Strong capital growth can be attained</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Ability to re-sell at a profit before completion</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div>Small deposits and staged payments</li>
                                    </ul>
                                    </div>
                                    <a href="{{url('contact-us')}}" class="tf-button-primary style-black wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Enquire Now <i class="icon-arrow-right-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


 <section class="tf-section choose-us has-bg-vector py-100">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Ready Properties</h2>
                                    <p>The buyer can save money by selecting a Ready-Property by avoiding the fees of renting an apartment and the prolonged wait of an off-plan project. Furthermore, it makes the property buyer feel secure. Instead of visualizing it with the aid of the developer's brochures or project profiles, the buyer can examine a functional community and the infrastructure nearby before purchasing the property.</p>
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
                                        <a class="title">Location advantage (completed properties set in prime locations)</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-seller"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">The buying decision is based on physically seeing the property and feeling it out</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-buy-home"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Immediate Rental Income generation</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-buildings-1"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Higher loan-to-value (LTV) ratio (when applying for a mortgage from the bank)</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-city"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">The investor can move in or rent it out immediately</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-file"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Higher returns when market prices spike</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


 <section class="tf-section luxury-home style-5 py-50">
                    <div class="cl-container">
                        <div class="row justify-content-around">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                    <img src="{{ asset('frontend/assets/images/Invest In Dubai/invest-in-dubai-9.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Dubai’s Vision for the Future</h2>
                                    <div class="text-content wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                   <p>Dubai’s population expected to jump to about 5.8 million by the year 2040. Currently, the city in the United Arab Emirates has a population of 3.3 million people. In 2021, the Dubai Urban Master Plan 2040 laid the groundwork for the city’s sustainable growth over the next 20 years.</p>
                    <br>
                    <p>The Dubai 2040 vision maps out a comprehensive path for a more sustainable urban development of the city. This plan focuses on using available spaces and concentrating development in existing urban areas. It will provide more space for hotels and tourist activities, as well as increase the land area for commercial activities.</p>
                                    </div>
                                    <a href="{{url('contact-us')}}" class="tf-button-primary style-black wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Enquire Now <i class="icon-arrow-right-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                


                <section class="tf-section luxury-home style-5 py-50">
                    <div class="cl-container">
                        <div class="row justify-content-around flex-row-reverse">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                    <img src="{{ asset('frontend/assets/images/Invest In Dubai/invest-in-dubai-6.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Dubai’s Urban Master Plan 2040 focuses on the following priorities:</h2>
                                    <div class="text-content wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <ul class="list">
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Population increase by the year 2040</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Integrated and diverse housing options</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div> Development of Urban Centers</li>
                                    <li><div class="features-box-image icon"><i aria-hidden="true" class=" flaticon-check"></i></div>Doubling the size of green and recreational areas</li>
                                    </ul>
                                    </div>
                                    <a href="{{url('contact-us')}}" class="tf-button-primary style-black wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Enquire Now <i class="icon-arrow-right-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                </div>

  
@endsection