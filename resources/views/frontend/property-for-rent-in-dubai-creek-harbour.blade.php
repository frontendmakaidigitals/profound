@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property For Rent in Dubai Creek Harbour')
	 @section('pageDescription', 'Property For Rent in Dubai Creek Harbour')
	 @section('pageKeyword', 'Property For Rent in Dubai Creek Harbour')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property For Rent in Dubai Creek Harbour'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property For Rent in Dubai Creek Harbour</li>
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
                                    <img src="{{asset('frontend/assets/images/dubai-creek-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property For Rent In Dubai Creek Harbour</h2>
                                    <div class="text-content wow fadeInUp">
                                               
           <p>
            The highest level of luxury and comfort is woven into the silk of Dubai. It is the first of its name and the only city on the planet to have so many iconic landmarks. Situated along the serene scenes of the seas Dubai has blossomed into a futuristic emirate, where architectural marvels pierce the sky with their unrestricted flight. It is a magnet of magnificence that pulls those closer to it who seek ultra-modern and luxurious life.
          </p>
          <p>
              Among Dubai's many dazzling , Dubai Creek Harbour stands as a testament to the city's unceasing march towards a prosperous and sustainable future. Just along the banks of the historic Dubai Creek, this expanding district offers a harmonious blend of natural beauty, cultural heritage, and contemporary living. Dubai Creek Harbour stands as beckons to those seeking a life that offers quality life and extraordinary living.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits Of Renting Out Property In Dubai Creek Harbour</h2>
                                    <p>There are numerous benefits that owners can get by renting out property in Dubai Creek Harbour, below are the best ones:</p>
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
                                        <p>One of the most compelling benefits for property owners is the potential for steady rental income. Dubai Creek Harbour's rising popularity ensures a steady influx of potential tenants. This consistent demand can provide owners with a reliable source of rental income to cover expenses and generate profit.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">High Demand</a>
                                        <p>Dubai Creek Harbour's strategic location and picturesque surroundings make it a highly sought-after residential destination. The area's rapid development, coupled with its proximity to major business districts, ensures that there is a continual demand for rental properties. Property owners can capitalise on this high demand, reducing the risk of long vacancies.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">High Returns On Investment</a> 
                                        <p>The allure of Dubai Creek Harbour, with its waterfront views and vibrant community, allows property owners to command premium rental rates. Tenants are often willing to pay more for the privilege of living in a district that offers a unique blend of natural beauty and modernity.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Trustworthy Tenants</a> 
                                     <p>The area's appeal attracts quality tenants who value a serene and picturesque environment. These tenants are typically more responsible in terms of rent payments and property maintenance, reducing the potential risks associated with property ownership. Property owners can enjoy peace of mind, knowing that they have reliable tenants.</p>  
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
                                     <p>Dubai Creek Harbour's growing popularity contributes to low vacancy rates. Property owners are less likely to experience extended periods without rental income, ensuring a stable and consistent rental income stream.</p>  
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
                                    <img src="{{asset('frontend/assets/images/dubai-creek-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Bring The Best To Life</h2>
                                    <div class="text-content wow fadeInUp">
                                               
          <p>
              No matter if you want to rent out property in Dubai Creek Harbour or rent a property there, this spectacular area offers a range of benefits. For the owners it offers benefits such as steady rental income, high demand, premium rental rates, quality tenants, and low vacancy rates. On the other hand, for those who want to rent a property there, the area offers a life of spectacular waterfront living, cultural heritage, world-class facilities, community spirit, and convenient connectivity.
          </p>
          <p>
              Whether you are an owner seeking a lucrative investment opportunity or a tenant yearning for a harmonious blend of tradition and modernity, Dubai Creek Harbour offers an extraordinary living experience that defines the future of Dubai. We at Profound make your dreams into realities by offering you deals that are not only tailored to your needs but also transparent, so you can get the best without anything being hidden from you. Join hands with Profound Realtors and make your dreams come true.

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