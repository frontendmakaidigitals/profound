@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property For Rent In Palm Jumeirah')
	 @section('pageDescription', 'Property For Rent In Palm Jumeirah')
	 @section('pageKeyword', 'Property For Rent In Palm Jumeirah')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property For Rent In Palm Jumeirah'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Properties in Palm Jumeirah</li>
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
                                    <img src="{{asset('frontend/assets/images/palm-jumerah-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property For Rent In Palm Jumeirah</h2>
                                    <div class="text-content wow fadeInUp">
                                      <p>
Known as the "City of Dreams”, Dubai stands as a mountain with peak of unparalleled ambition, advancement, and allure. In the heart of the Arabian Gulf, Dubai has made its name in the lists of the best cities in almost all areas and has metamorphosed from a barren desert into a global metropolitan that continually redefines luxury, progress, and the pursuit of excellence. It is a city that dazzles with its futuristic sky touching towers and endless boundaries that break the ocean too.
</p>
<p>
Among Dubai's most iconic and extraordinary developments is the Palm Jumeirah - an audacious feat of engineering and design. Shaped like a palm tree and extending into the azure waters of the Arabian Gulf, this artificial archipelago is a live example of luxurious life, capacious comforts, and extravagant experiences. Palm Jumeirah is not just a place, it is the peak of paradise; it is a testament to human ingenuity and a reflection of Dubai's relentless pursuit of excellence.

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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits Of Renting Out Property In Palm Jumeirah</h2>
                                    <p>Renting out a property in Palm Jumeirah presents property owners with a wealth of advantages including:</p>
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
                                        <a class="title">Rental Income</a>
                                        <p>The primary benefit for property owners is the steady stream of rental income. Renting out a property on Palm Jumeirah can yield attractive rental rates due to its exclusive location and luxurious amenities.</p> 
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
                                        <p>Palm Jumeirah has a record of accomplishment of property value appreciation. As the demand for upscale living in this prestigious area continues to grow, property values tend to increase over time and you can potentially benefit from capital appreciation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">High Demand</a> 
                                        <p>The exclusivity and desirability of Palm Jumeirah ensure a consistent demand for rental properties. This high demand minimises the risk of extended vacancies, allowing property owners to maintain a steady rental income stream without long periods of property vacancy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Premium Tenants</a> 
                                        <p>The reputation of Palm Jumeirah often attracts high-profile and quality tenants. These tenants are typically more reliable when it comes to rent payments and property maintenance, reducing the risk of issues related to unpaid rent or property damage.</p>  
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
                                    <img src="{{asset('frontend/assets/images/palm-jumerah-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Experience The Benefits Of Dubai</h2>
                                    <div class="text-content wow fadeInUp">
                                       <p>
              Dubai is a place of high-end luxury and comfort that is out of the world. Whether you want to rent out a property on Palm Jumeirah or live on the outskirts of Arabian Gulf, it is a deal beyond just a real estate decision. It is an investment in a lifestyle that is full of luxury and an ROI that secures your future.
              </p>
              <p>
With its breathtaking views, amazing amenities, and a serene experience, Palm Jumeirah offers an unparalleled living experience. Whether you are seeking a serene retreat or want to tap into the rental market and increase your investments, Palm Jumeirah promises to exceed your expectations. Welcome to a world where the sea embraces the sky, and every moment gives you a dreamy delight and an experience beyond grandeur and elegance. To make all your dreams come true Profound is here to help you achieve your goals guiding you to the peak of all possibilities.

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