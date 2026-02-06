@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property For Rent In Downtown Dubai')
	 @section('pageDescription', 'Property For Rent In Downtown Dubai')
	 @section('pageKeyword', 'Property For Rent In Downtown Dubai')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property For Rent In Downtown Dubai'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property For Rent In Downtown Dubai</li>
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
                                    <img src="{{ asset('frontend/assets/images/downtown-dubai-2.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property For Rent In Downtown Dubai</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
                      Dubai – a city that shines beyond lights and a place that needs no introduction; it has become the regional and cultural hub of ambitions and extraordinary lifestyle. Along the shores of the Arabian Gulf, this emirate has transformed itself from a desert of dunes into a hub of business, tourism, and luxury leaving a profound impact on its visitors. The allure of Dubai is magnetic, attracting people from every corner of the globe to experience its luxurious lifestyle and the limitless possibilities it offers.
                        </p>
                        <p>
                        At the heart of Dubai's magnificence lies a part that is beyond imagination and is a testament of Dubai’s luxurious lifestyle and the high-end comfort it provides, Downtown Dubai, an unimaginable and utopian project that encapsulates the city's essence. Spanning across an astonishing 500 acres, this propelling project is home to some of the world's most iconic landmarks, including the iconic top and towering Burj Khalifa and the enchanting Dubai Fountain that dazzle everyone around it. Downtown Dubai is the epitome of modern living, a place where luxury, comfort, and an exceptional experience converge in perfect harmony.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits Of Renting Out Property In Downtown Dubai</h2>
                                    <p>Renting out a property in Downtown Dubai can be immensely rewarding for property owners seeking to maximise their investments. Here are the key benefits of renting out property in this prestigious district, where luxury living reaches its zenith:</p>
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
                                        <a class="title">Quality Tenants</a>
                                        <p>Downtown Dubai's reputation attracts quality tenants who are often more responsible and reliable when it comes to rent payments and property maintenance. Property owners can benefit from a reduced risk of issues related to unpaid rent or property damage.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Portfolio Diversification</a>
                                        <p>Owning a rental property in Downtown Dubai can diversify an owner's investment portfolio, reducing risk by spreading assets across different types of investments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Tax Benefits</a> 
                                        <p>Property owners in Dubai can benefit from various tax advantages, including zero income tax and no capital gains tax. These favourable tax policies can enhance the profitability of renting out property in Downtown Dubai.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Long-Term Investment</a> 
                                        <p>Downtown Dubai is a long-term investment portion, offering an edge over inflation and financial stability over the years. With the growth and development of Dubai, owning property in Downtown Dubai can help the owners to benefit from it and receive a stable amount against their investments.  </p> 
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
                                    <img src="{{ asset('frontend/assets/images/downtown-3.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Make Your Investments Pay You Back</h2>
                                    <div class="text-content wow fadeInUp">
                                   <p>
                   Downtown Dubai is not merely a district it is a world in itself and if you want to rent out or rent a place there then this will be your best decision. It is an investment in a lifestyle full of luxury and comfort. With its central location, world-class amenities, and a seamless cinematic view, Downtown Dubai offers an unrivalled experience. Whether you are a professional seeking the pinnacle of luxury living or someone who needs to double their investments, Downtown Dubai promises to fulfil all your aspirations.
                  </p>
                  <p>
                      For all of your dreams to come true we are here to guide you; at Profound we strive to provide the best services to all our clients and give them the best deals that they can ever get. We have been in this emirate for several years now and have connections with the leading real estate developers including Nakheel, Emaar, and Binghatti. We will love to help just as we helped our previous clients who trusted us. Connect with us and be a part of the most luxurious neighbourhood in Dubai today.
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