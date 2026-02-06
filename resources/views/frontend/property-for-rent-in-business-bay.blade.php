@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property for Rent in Business Bay')
	 @section('pageDescription', 'Property for Rent in Business Bay')
	 @section('pageKeyword', 'Property for Rent in Business Bay')
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
.py-25{
padding:25px 0 !important;
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
h2 {
 display: inline-block; 
    margin-bottom: 20px; 
}
h3 {
 
    margin: 20px 0; 
}

p {
    margin: -10px 0; 
}
p, b {
margin: 10px 0; 
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property for Rent in Business Bay'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property for Rent in Business Bay</li>
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
                                    <img src="{{asset('frontend/assets/images/business-bay-5.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property for Rent in Business Bay</h2>
                                    <div class="text-content wow fadeInUp">
                                      <p>
        Dubai is an extraordinary luxury place and has been one of the top tourist destinations for a long time. Starting as the country that had only oil to becoming the world’s biggest business hub it is changing the destiny of the country. It now has everything from tall towers that anchor the skies to the most luxurious life one could live. The state did their best to make Dubai an exceptional living space attracting people from all around the globe.
          </p>
          <p>
              With attracting tourists, people who want to live there, and even those who want to get a bite of the high rental yields it offers. It has been a spectacular journey for Dubai being one of the best cities to live in and get high rental yields on your investments.
          </p>
          <p>
              One of Dubai's most prestigious projects, Business Bay, epitomizes the city's commitment to bridging commerce and luxury living. Spanning an impressive 80 million square feet, this visionary development transforms the Dubai Canal into a dazzling waterfront promenade, redefining the city's skyline in the process.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits of Renting Property in Business Bay</h2>
                                    <p>Renting a property in Business Bay offers a host of advantages, making it an attractive option for individuals seeking a thriving urban lifestyle:</p>
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
                                        <a class="title">Prime Business Hub</a>
                                        <p>Business Bay is strategically located at the heart of Dubai, making it an ideal choice for professionals and entrepreneurs. With close proximity to major business districts, including Downtown Dubai and Dubai International Financial Centre (DIFC), it is a convenient address for work.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Stunning Waterfront Views</a>
                                        <p>Many properties in Business Bay offer mesmerizing views of the Dubai Canal, ensuring residents are treated to a daily spectacle of water and light.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Luxurious Amenities</a> 
                                        <p>Business Bay properties are renowned for their upscale amenities, including gyms, swimming pools, concierge services, and more. It is a place where comfort and convenience are engraved in its foundations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Shopping and Dining</a> 
                                        <p>The area showcases a diverse array of dining and shopping options, from upscale restaurants to quaint cafes and boutiques. You can savor culinary delights from around the world without leaving your neighborhood.   </p>    
                                                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Connectivity</a> 
                                        <p>Business Bay enjoys excellent connectivity, with multiple transport options including the Dubai Metro, buses, and water taxis. Getting around the city and beyond is a breeze.</p>        
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
                                    <img src="{{asset('frontend/assets/images/business-bay-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Make Your Move In The Magnificent Marvels Of This Meticulous Metropolitan</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
                         Renting a property in Business Bay is not just a real estate decision; it is an investment in a dynamic and integrated lifestyle. With its strategic location, world-class amenities, and a thriving business environment, Business Bay offers an unparalleled urban experience. Whether you are a professional seeking to be at the center of astonishing amenities and commercial corridors or someone looking to double their investments, Business Bay has everything for everyone.
                      </p>
                      <p>
                          We at Profound can help you get the best deals if you are looking to get any property to rent in Business Bay so you can get the best returns on investments; we are here to guide you. Visit our website and explore the best properties to live or rent in Business Bay.
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