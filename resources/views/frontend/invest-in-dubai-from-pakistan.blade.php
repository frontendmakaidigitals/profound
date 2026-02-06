@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Invest in Dubai from Pakistan')
	 @section('pageDescription', 'Invest in Dubai from Pakistan')
	 @section('pageKeyword', 'Invest in Dubai from Pakistan')
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
.pt-20{
margin-top:100px;
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Invest in Dubai from Pakistan'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Invest in Dubai from Pakistan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->



<!-- /section-open for write some upside-->

<section class="my-100">
<div class="cl-container">
  <p>
               Dubai holds a special place in the heart of Pakistanis as it has been a land of cultural exchange and investment opportunities for many. 

            </p>
            <p>
                It’s not just the glamorous skylines and career opportunities of Dubai that makes it the icon of the word, but also its booming real estate market.
            </p>
            
            <p>
                If you’re a Pakistani looking to buy your way into the Dubai Real Estate Market whether for personal investment or living, then we are here to help you.
            </p>
</div>
</section>


<!-- /section-close -->



<!-- /section-open for image-->

<section class="tf-section luxury-home py-100 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-land-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">How to Invest in Dubai from Pakistan</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
                                          Discover a world of opportunities as we invite investors from Pakistan to delve into the Dubai real estate market. Uncover the distinct advantages, explore the excellence of mainstream developers, and learn how Profound Realtors' investment managers can guide you through a seamless investment experience. Additionally, embrace the unparalleled lifestyle benefits that Dubai has to offer.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits of Buying Properties in Dubai Real Estate</h2>
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
                                        <a class="title">Economic Prosperity</a>
                                        <p>Dubai, as a thriving global hub, ensures a stable and prosperous investment environment for Pakistani investors, presenting a unique chance to capitalize on the city's economic success.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Tax-Friendly Environment</a>
                                        <p>Enjoy the financial advantages of Dubai's tax-friendly policies, with investors from Pakistan benefiting from tax-free rental income and capital gains, amplifying the overall profitability of their real estate ventures.</p>
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Cultural and Ethnic Diversity</a>
                                        <p>Dubai's cosmopolitan atmosphere provides a welcoming environment for investors from Pakistan, fostering a diverse and inclusive community that adds to the richness of the city's cultural tapestry.</p>
                                    </div>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                </section>
                <!-- /section-close -->



                <!-- /section-open  for yellow div-->
                <section class="tf-section choose-us has-bg-vector py-100 pt-20">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Mainstream Developers in Dubai</h2>
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
                                        <a class="title">Emaar Properties</a>
                                        <p>Renowned for its visionary projects such as the iconic Burj Khalifa and the world-famous Dubai Mall, Emaar Properties exemplifies luxury and innovation, offering Pakistani investors a chance to be a part of globally recognized developments.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">DAMAC Properties</a>
                                        <p>Specializing in luxury living, DAMAC Properties has crafted opulent residential and commercial projects, contributing to the elegance and exclusivity that defines Dubai real estate.</p>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Nakheel</a>
                                        <p>A key player in Dubai's transformation, Nakheel is recognized for groundbreaking projects like the Palm Jumeirah, offering investors from Pakistan a chance to engage with visionary and ambitious developments.</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </section>
                <!-- /section-close -->



                <!-- /section-open  for yellow div-->
                <section class="tf-section choose-us has-bg-vector py-100 pt-20">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">How Profound Realtors' Investment Managers Can Assist</h2>
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
                                        <a class="title">Expert Guidance Beyond Borders</a>
                                        <p>Our investment managers possess extensive knowledge of the Dubai real estate market, providing Pakistani investors with insightful guidance for informed decision-making and confident navigation through the market.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Personalized Investment Strategies</a>
                                        <p>Understanding the individual preferences and goals of each investor, our team tailors investment solutions, ensuring that portfolios seamlessly align with their unique financial aspirations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Streamlined Processes for Peace of Mind</a>
                                        <p>Experience a hassle-free investment process as our dedicated team manages documentation, legalities, and logistics, allowing investors from Pakistan to focus on maximizing returns with confidence.</p>
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
                                    <img src="{{asset('frontend/assets/images/dubai-land-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Lifestyle Benefits of Dubai</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
                Beyond the investment, Dubai offers a lifestyle unparalleled in luxury and comfort. From world-class shopping and dining to breathtaking landmarks and entertainment options, Dubai promises a lifestyle that seamlessly combines modernity with tradition, providing a vibrant and cosmopolitan living experience.
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
                        <div class="row justify-between flex-row-reverse">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-land-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Invest with Confidence, Embrace a Luxurious Lifestyle</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
                Investing in Dubai from Pakistan is an invitation to not just an investment but to a lifestyle rich in possibilities. Choose Profound Realtors as your trusted partner, and let our experienced investment managers guide you toward unparalleled success in the dynamic Dubai real estate landscape.
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