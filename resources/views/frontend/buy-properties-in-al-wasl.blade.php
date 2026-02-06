@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Properties in Al Wasl')
	 @section('pageDescription', 'Buy Properties in Al Wasl')
	 @section('pageKeyword', 'Buy Properties in Al Wasl')
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
.my-100{
margin:100px 0 !important;
}
.my-50{
margin:50px 0 !important;
}
.heading {
margin: 20px 0; 
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
                <section class="flat-title inner-page" style="background:url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-3.webp') }}');background-repeat:no-repeat;background-size:cover;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Buy Properties in Al Wasl'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Properties in Al Wasl</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->



<!-- /section-open for image-->

<section class="tf-section luxury-home py-100 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/al-wasl-1.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in Al Wasl</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
             When it comes to real estate investment, Dubai comes second to none. It’s a city that is blessed with countless business opportunities, multicultural community and countless recreational spots that make this city the ideal place to live or to invest for a growing return on investment. 
<br>
There are many places in Dubai to invest in real estate, but Al Fasl is one of the best areas to invest in as it is one of the prime locations in the city to buy property for accommodation and investment.

          </p>
    
          <h2 class="heading">What’s Al Wasl in Dubai?</h2>
          <p>
             Al Wasl is a historical area and one of the oldest neighborhoods in Dubai, United Arab Emirates. It's located in the heart of the city and is known for its cultural significance. The name "Al Wasl" translates to "connection" in Arabic, reflecting its historical role as a central meeting point for traders and travelers. The area is home to several landmarks, including the Al Wasl Road, which runs through the neighborhood, and the Al Wasl Football Club. Additionally, the Dubai Canal passes through Al Wasl, adding to its significance as a hub within the city.
          </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!-- /section-close -->











                <!-- /section-open  for yellow div-->
                <section class="tf-section choose-us has-bg-vector py-100">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Why Buy Properties in Al Wasl?</h2>
                                    <p>There are countless benefits of investing in properties situated at Al Wasl. Here is a rundown of the upsides to investing in Al Fasl:</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Location</a>
                                        <p>Al Wasl is situated in the prime location of Dubai which makes it accessible to many popular neighborhoods, commercial avenues, recreational locations, public services and much more.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Variety of Housing Options</a>
                                        <p>The community offers a diverse range of housing options, including villas, townhouses, and apartments, catering to various preferences and budgets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Popular Demand</a> 
                                        <p>Al Wasl is one of the most sought after neighborhoods in Dubai. Not only is it ideal for a comfortable lifestyle, but also very lucrative for people looking forward to expanding their investment portfolio, roi or looking to have high rental yields.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Capital Appreciation</a> 
                                        <p> As being one of the most premier neighborhoods in Dubai, Al Wasl is constantly seeing capital appreciation with intervals. This makes it an ideal place for investors who want significant returns on their investment.</p>                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Resale Value</a> 
                                        <p>One of the benefits of Capital Appreciation is that once you have seen a hike in the value of your possessed property in Al Wasl, you can sell it for a higher price for profit.</p>                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Diversifying Your Investment</a> 
                                        <p>Buying different properties in numerous locations allows you to mitigate your investment risks.</p>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Amenities with Infrastructures</a> 
                                        <p>Al Wasl offers accessibility to amenities like schools, universities, shopping malls, hospitals, clinics and other necessities for comfort living.</p>
                                    </div>
                                </div>
                            </div>
                           
                           

                        </div>
                    </div>
                </section>
                <!-- /section-close -->




<!-- /section-open for image-->

<section class="tf-section luxury-home py-100 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/al-wasl-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in Al Wasl with Ease - Profound Realtors</h2>
                                    <div class="text-content wow fadeInUp">
                                   <p>
                          As a pioneer in real estate investment in Dubai, we have the extensive knowledge to guide you in your journey towards your new dream home in Dubai or a profitable investmentment opportunity.
                      </p>
                      <p>
                          With our investment managers on your side, you have nothing to worry about as we’ll guide you step by step for buying properties in Al Wasl. 
                      </p>
                      <p>
                          Get in contact with us today. 
                      </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!-- /section-close -->

                </div>  
@endsection