@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property For Rent In Arabian Ranches')
	 @section('pageDescription', 'Property For Rent In Arabian Ranches')
	 @section('pageKeyword', 'Property For Rent In Arabian Ranches')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property For Rent In Arabian Ranches'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property For Rent In Arabian Ranches</li>
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
                                    <img src="{{asset('frontend/assets/images/arabian-1.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property For Rent In Arabian Ranches</h2>
                                    <div class="text-content wow fadeInUp">
                                      <p>
                      Dubai is a living example of a truly heavenly state with a world within a world. It is a city that captures the world's imagination without having any boundaries, whether it is the sky or the sea Dubai stretches to limits beyond any limitation. Its breathtaking views of the artificial seas and opulent oceanic sights and limitless skyscrapers make it one of the most iconic landmarks on the globe.
                  </p>
                  <p>
                      In the heart of the ever-growing UAE, Dubai has blossomed into a thriving emirate that seamlessly blends modernity with sticking to its traditional roots. It is a city that goes beyond beauty, and offers the most delicate experiences to whoever visits it. With its iconic skyscrapers, lavish lifestyle, and a dynamic cultural scene, it makes a profound statement. Dubai's magnetic charm attracts people from all corners of the globe, making it a global hub for business, leisure, and luxury living.
                  </p>
                  <p>
                      In a city full of iconic landmarks, the Arabian Ranches stands as an oasis of tranquillity and sophistication throughout the emirate. This upscale residential community is a testament to Dubai's ability to seamlessly harmonise nature with urban living. Situated along the lush green landscapes, Arabian Ranches offers a blissful retreat from the city's hustle and bustle while ensuring residents enjoy easy access to all that this emirate has to offer. 
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits Of Renting Out Property In Arabian Ranches</h2>
                                    <p>There are plenty of benefits available for the owners if they plan renting out property in Arabian Ranches including:</p>
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
                                        <a class="title">Steady Rental Income</a>
                                        <p>One of the most compelling benefits for property owners is the opportunity for steady rental income. Arabian Ranches is highly sought after by both expatriates and locals seeking a serene and family-friendly environment. This consistent demand translates into reliable rental payments, providing owners with a stable source of income.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Property Appreciation</a>
                                        <p>Arabian Ranches has a record of accomplishment of property value appreciation. As Dubai's real estate market continues to grow, properties in this community are expected to increase in value over time. Property owners may benefit from capital appreciation, making their investment even more lucrative.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">High-Quality Tenants</a> 
                                        <p>The tranquil setting of Arabian Ranches attracts quality tenants who value a peaceful lifestyle. These tenants often demonstrate a strong sense of responsibility, paying rent punctually and taking good care of the property. This minimises the potential risks associated with property ownership.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Low Vacancy Rates</a> 
                                     <p>Due to its high demand and reputation as a desirable family community, Arabian Ranches typically experience low vacancy rates. Property owners can enjoy consistent occupancy, reducing the risk of periods without rental income.</p>  
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
                                    <img src="{{asset('frontend/assets/images/arabian-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Bite On The Benefits Of This Baffling Barquette</h2>
                                    <div class="text-content wow fadeInUp">
                                        <p>
                      Either renting out property or renting a property in Arabian Ranches it offers a host of benefits for both. For property owners, it offers many things such as steady rental income, property appreciation, quality tenants, and low vacancy rates. On the other hand, renting a property in Arabian Ranches offers a peaceful and family-friendly environment, a strong sense of community, proximity to the city, and numerous outdoor activities.
                      </p>
                      <p>
                          Whether you are an owner seeking an attractive investment opportunity or a tenant looking for an idealistic living experience, Arabian Ranches offers a blend of luxury and tranquillity that is truly exceptional in Dubai's real estate landscape. In your journey finding the best deals, we at Profound assist you in getting the best ones. With an expert team and years of experience, we can help you find whatever you desire. Join hands with us in getting the best deal.

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