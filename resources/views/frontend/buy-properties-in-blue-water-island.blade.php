@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Properties in Blue Water Islands')
	 @section('pageDescription', 'Buy Properties in Blue Water Islands')
	 @section('pageKeyword', 'Buy Properties in Blue Water Islands')
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
ul.m-0.p-0{
display: inline-block; /* Ensures the heading and paragraph are distinct */
    margin: 20px 0; 
     line-height: 1.6;
     font-size: 20px;
}
p {
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Buy Properties in Blue Water Islands'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Properties in Blue Water Islands</li>
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
                                    <img src="{{asset('frontend/assets/images/blue-water-1.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in Blue Water Islands</h2>
                                    <div class="text-content wow fadeInUp">
          <p>
             Dubai has amazing waterfront projects that take you to a whole new plateau of human comfort and experience. It should be a no brainer that these properties in Dubai are the most sought after as they offer countless recreational activities, public services, unparalleled architecture and other value added benefits. 
             <br>
             However, when it comes to one of the best waterfront projects and towns, Blue Water Islands takes the mantle of being the best waterfront project to buy properties in. Situated right opposite to Dubai Marina, Blue Water Islands is split into these categories; residential, retail, hospitality, recreation, hotels and beach clubs that makes it an ideal option for individuals of any kind.
             <br>
             But before you buy properties in Blue Water Islands, it’s crucial to know why and how this waterfront town has developed such a prestigious and luxurious image. 
          </p>
              </div>
          </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!-- /section-close -->
<!-- /section-open for text in middle-->

  <section class="my-50">
<div class="cl-container">
<div class="text">
  
          
          <h2 class="mt-4">What is Blue Water Islands?</h2>
          <p>
             Blue Water Island is a man-made island that’s an ensemble of recreation, dining, beach clubs, luxury residential projects and other aspects that redefines luxury. This island is also home to the Ain Dubai which is the world’s largest observation wheel. 
          </p>
          <p>
              The island is easily accessible via Sheikh Zayed Road and can also be accessed from Palm Jumeirah Beach with a pedestrian bridge with a lovely 300m walking path. 

Types of Properties in Blue Water Island
There are various types of properties in the vicinity of Blue Water Island where you can invest in. Here are some of the best properties available on the island:
<ul class="m-0 p-0">
    <ol>1. Townhouses</ol>
    <ol>2. Commercial</ol>
    <ol>3. Apartments</ol>
    <ol>4. Penthouses </ol>
</ul>

          </p>
</div>
</div>
</section>

<!-- /section-close-->





                <!-- /section-open  for yellow div-->
                <section class="tf-section choose-us has-bg-vector py-100">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits You Get When You Buy Properties in Bluewater Island</h2>
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
                                        <a class="title">Luxurious Lifestyle</a>
                                        <p>The island boasts upscale amenities, high-end restaurants, retail outlets, and entertainment options, contributing to a luxurious and vibrant lifestyle.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Stunning Views</a>
                                        <p>Many properties on the island offer breathtaking views of the Arabian Gulf, Dubai Marina skyline, and Ain Dubai (the world's largest observation wheel).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Capital Appreciation</a> 
                                        <p>As a mega developed luxurious project, DHC The Lagoon has massive potential of providing you with capital appreciation as time passes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Exclusive Community</a> 
                                        <p>Bluewaters Island offers an exclusive and serene community environment, providing a sense of privacy and security.</p>                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Unique Attractions</a> 
                                        <p>The island is home to attractions like Ain Dubai and The Wharf, offering residents and visitors exciting leisure opportunities.</p>               
                                                             </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">High Rental Potential</a> 
                                        <p>The prime location, luxury amenities, and attractions can translate to strong rental demand, potentially making your property a lucrative investment.</p>
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
                                        <p>Bluewaters Island is well-connected to Dubai's major destinations, providing easy access to key areas like JBR, Dubai Marina, and Sheikh Zayed Road.</p>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Modern Infrastructure</a> 
                                        <p>The island features modern infrastructure and well-planned architecture, ensuring a comfortable and contemporary living experience

</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Developed by Meraas</a> 
                                        <p>The developer, Meraas, is known for creating innovative and high-quality projects, which adds to the credibility and appeal of properties on Bluewaters Island.</p>
                                    </div>
                                </div>
                                </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Resale Value</a> 
                                        <p>Properties in prime locations like Bluewaters Island tend to hold their value well over time, making them potentially attractive for future resale.</p>
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
                                    <img src="{{asset('frontend/assets/images/blue-water-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in Bluewater Island with Profound Realtors</h2>
                                    <div class="text-content wow fadeInUp">
                               <p>
                          At Profound Realtors, we have all the latest and greatest listings from Bluewater Island, Dubai. Our investment managers are experts in bringing you the best investment opportunities for your future home or real estate investment for immense returns.  
                      </p>
                      <p>
                          Get in touch with us today!
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