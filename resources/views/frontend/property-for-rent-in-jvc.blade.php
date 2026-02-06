@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property For Rent In JVC')
	 @section('pageDescription', 'Property For Rent In JVC')
	 @section('pageKeyword', 'Property For Rent In JVC')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property For Rent In JVC'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property For Rent In JVC</li>
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
                                    <img src="{{asset('frontend/assets/images/jvc-1.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property For Rent In JVC</h2>
                                    <div class="text-content wow fadeInUp">
                                                
          <p>
         Dubai is an outstanding city and a heaven for those who seek luxury and comfort, often referred to as the City of Dreams, it stands as a live example of what humans can achieve. In the corner of the gulf it lives along the shimmering shores of the ocean, Dubai has emerged as a global icon of progress, luxury, and limitless possibilities. It is a city where futuristic skyscrapers gracefully touch the sky, where traditions meet modernity, and where a thriving cosmopolitan culture thrives. Dubai's allure extends far beyond its stunning landscapes, offering a lifestyle that is second to none.
            </p>
            <p>
            In between the grandeur of Dubai, Jumeirah Village Circle (JVC) offers a tranquil suburban haven that provides a perfect blend of serenity and convenience. This charming residential community is located just moments away from the bustling city centre, offering residents a peaceful escape without sacrificing access to the city's numerous amenities and attractions. JVC is a hidden gem where families, professionals, and expatriates find solace in the ultra-comfortable and luxurious spaces.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits Of Renting Out Property In Jumeirah Village Circle</h2>
                                    <p>While there are many benefits but we have filtered out the top benefits of renting out a property in JVC (Jumeirah Village Circle):</p>
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
                                        <p>One of the foremost benefits for property owners in JVC is the opportunity for a steady rental income. The area's growing popularity ensures a consistent demand for rental properties, allowing owners to enjoy a reliable source of income to cover expenses and generate profit.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Affordable Investment</a>
                                        <p>JVC is known for its relatively affordable rental properties compared to some of Dubai's more upscale neighbourhoods. This affordability can attract a diverse range of tenants, reducing the risk of prolonged vacancies and ensuring a consistent cash flow for property owners.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Family-Friendly Appeal</a> 
                                        <p>JVC's tranquil environment, parks, and community facilities make it an attractive destination for families. Property owners can benefit from the consistent demand for family-sized properties, attracting responsible, long-term tenants.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Scenic Surroundings</a> 
                                     <p>Many properties in JVC boast picturesque views of landscaped gardens and parks, providing residents with a serene and natural ambiance. These scenic surroundings can make rental properties more appealing to potential tenants.</p>  
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
                                    <img src="{{asset('frontend/assets/images/jvc-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Bring The Best To Life in Jumeirah Village Circle</h2>
                                    <div class="text-content wow fadeInUp">
                                   <p>
                          There are endless possibilities in Dubai that you can achieve; renting out property in Jumeirah Village Circle offers property owners a range of financial benefits, including steady rental income, affordability, a family-friendly appeal, scenic surroundings, and community amenities. For those seeking to rent a property in Jumeirah Village Circle, it provides a peaceful retreat, a family-friendly community, proximity to major hubs, diverse dining and shopping options, and ample opportunities for outdoor activities.
                        </p>
                        <p>
                        Whether you are an owner seeking a promising investment opportunity or a tenant looking for a tranquil yet well-connected lifestyle, Jumeirah Village Circle beckons with its suburban charm and urban convenience. In your dreams to come true, we at Profound help you bring your dreams to life, connect with us, make an impactful decision, and secure your future.
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