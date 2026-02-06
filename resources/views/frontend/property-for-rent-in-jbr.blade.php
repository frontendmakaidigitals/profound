@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property For Rent In JBR')
	 @section('pageDescription', 'Property For Rent In JBR')
	 @section('pageKeyword', 'Property For Rent In JBR')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property For Rent In JBR'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property For Rent In JBR</li>
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
                                    <img src="{{asset('frontend/assets/images/jbr-1.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property For Rent In JBR</h2>
                                    <div class="text-content wow fadeInUp">
                                      <p>
          In the world where everything seems simple, ordinary, and not so futuristic, Dubai stands as tall as the skyscrapers it possesses, this city is a thriving beacon of modernity, luxury, and comfort. It is a place where ambition knows no boundaries and innovation is a way of life. Founded on the stunning shores of the Arabian Gulf, Dubai offers a unique lifestyle that is the envy of the world.
               <br>
                 Among Dubai's many gems, Jumeirah Beach Residence (JBR) stands out as a prime location that captures the essence of luxury living. This vibrant waterfront community along the Persian Gulf is a testament to Dubai's commitment to excellence. With its breathtaking views, excellent amenities, and lively atmosphere, JBR has become a coveted address for residents and investors alike.

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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits Of Renting Out Property In JBR</h2>
                                    <p>For property owners, JBR presents a plethora of advantages that make it an attractive destination for investment in the Dubai real estate market. Here are some of the top reasons of renting out property in JBR:</p>
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
                                        <a class="title">High Demand</a>
                                        <p>JBR enjoys consistently high demand for rental properties. Dubai's status as a global business and leisure hub attracts expatriates and tourists, ensuring a steady stream of potential tenants.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Premium Rental Rates</a>
                                        <p>The upscale nature of JBR allows property owners to command premium rental rates. The stunning beachfront and proximity to attractions contribute to the area's desirability.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Stability and Security</a> 
                                        <p>Dubai is renowned for its political stability and security, making it a safe environment for property investment. Legal protections for property owners are well established.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Tax Benefits</a> 
                                     <p>Dubai offers tax advantages to property owners, including zero income tax on rental income. This offers the owners to further save their income.</p>  
                                        </div>
                                </div>
                            </div>
                           <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Property Appreciation</a> 
                                     <p>Dubai's real estate market has historically shown strong appreciation rates, ensuring that property values tend to increase over time.</p>  
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Diverse Tenant Pool
</a> 
                                     <p>JBR attracts a diverse tenant pool, from young professionals to families, ensuring a broad range of potential renters.

</p>  
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
                                    <img src="{{asset('frontend/assets/images/jbr-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Make The Best Decision Of Your Life</h2>
                                    <div class="text-content wow fadeInUp">
                                       <p>
                          JBR (Jumeirah Beach Residence), with its great and grand location along the Arabian Gulf, is an ultra-modern and luxurious abode of innovation and comfort in Dubai. It offers extra elegance for both the residents and the property owners. For the investors or property owners, it offers an enticing opportunity to invest in a high-demand, high-reward market. On the other hand, it provides an unmatched lifestyle enriched with beachfront living, and world-class amenities to the residents.
                        </p>
                         <p>
                          Whether you are considering investing or living in JBR, this remarkable corner of Dubai has much to offer, making it a place where dreams become a vibrant reality. We at Profound help all our clients get the best deals whether they are thinking of investing in this ultra-modern abode or live in this extraordinarily luxurious place. Join hand with Profound and get the highest level of benefits this city has to offer. Make your dreams come true with Profound Realtors and make the most impactful decision of your life.

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