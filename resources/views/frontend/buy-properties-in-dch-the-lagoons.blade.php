@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Properties in DCH The Lagoons')
	 @section('pageDescription', 'Buy Properties in DCH The Lagoons')
	 @section('pageKeyword', 'Buy Properties in DCH The Lagoons')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Buy Properties in DCH The Lagoons'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Properties in DCH The Lagoons</li>
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
                                    <img src="{{asset('frontend/assets/images/dch-1.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in DCH The Lagoons</h2>
                                    <div class="text-content wow fadeInUp">
                                   <p>
             Waterfront properties in Dubai have their own aesthetic. These properties are some of the most luxurious and comfortable projects one can find for quality lifestyle or the best investment opportunity for a positive return on investment. 
<br>
One of these waterfront properties in Dubai is the DCH The Lagoons also known as Dubai Creek Harbor. This project is the epitome of Dubai’s comfortable and luxurious lifestyle full of amenities and recreation one can imagine. 

          </p>
    
          <h2 class="heading">What’s DCH The Lagoons?</h2>
          <p>
             Dubai Creek Harbor, also known as "The Lagoons," is a large-scale waterfront development project located in Dubai, United Arab Emirates. It is a joint venture between Emaar Properties and Dubai Holding, aimed at creating a vibrant and modern urban community.
          </p>
          <p>
              The project is situated along the Dubai Creek waterfront and is designed to be a mixed-use development that includes residential, commercial, and leisure components. One of the most notable features of Dubai Creek Harbor is the Dubai Creek Tower, an iconic skyscraper that is set to become one of the tallest structures in the world.
              <br>
              The development envisions a sustainable and smart city with modern architecture, landscaped open spaces, retail and dining options, as well as cultural and recreational facilities. It aims to blend urban living with natural surroundings, offering residents and visitors a unique and luxurious lifestyle.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Why Buy Properties in DHC The Lagoons?</h2>
                                    <p>DHC The Lagoon is a premier Dubai living experience and buying property in this project has numerous benefits. Here are some of them:</p>
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
                                        <a class="title">Prime Waterfront Location</a>
                                        <p>This project is located in the prime Dubai Creek Waterfront giving you a gorgeous and revitalizing view of the city and its lifestyle alongside accessibility to some of the best water-based recreation around.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Unparalleled Lifestyle</a>
                                        <p>The Lagoons provide a luxurious lifestyle that features modern architecture, top-notch amenities, unmatched recreation and countless other entertainment options.</p>
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
                                        <a class="title">Integrated Community</a> 
                                        <p>The development is designed as a self-contained community with a mix of residential, commercial, and leisure spaces. This integration can provide convenience and a sense of community for residents.</p>                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Iconic Landmarks</a> 
                                        <p>Dubai Creek Harbor has the privilege to host some of Dubai’s iconic landmarks such as Dubai Creek Tower and Creek Marina.</p>               
                                                             </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Accessibility to Dubai’s Attractions</a> 
                                        <p>Depending on the development's progress, properties in Dubai Creek Harbor could offer proximity to Dubai's key attractions, business centers, and transportation hubs, adding to the convenience of living in the area.</p>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Long Term Vision</a> 
                                        <p>Large-scale developments are typically planned with a long-term vision, which means that the area's infrastructure, services, and overall environment are likely to improve over time.</p>
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
                                    <img src="{{asset('frontend/assets/images/dch-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in DCH The Lagoons With Profound Realtors</h2>
                                    <div class="text-content wow fadeInUp">
                                  <p>
                          At Profound Realtors, we understand the importance of investing in a lucrative real estate opportunity whether it is for comfortable living or expanding your investment portfolio for greater return on your investment. 
                      </p>
                      <p>
                          However, you have nothing to worry about. With our renowned investment managers, you can find the best properties in DCH The Lagoons which will become your future home or your next step towards the ultimate financial security. 
                      </p>
                      <p>
                          Get in touch with our team today! 
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