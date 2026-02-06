@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Invest in Dubai from USA')
	 @section('pageDescription', 'Invest in Dubai from USA')
	 @section('pageKeyword', 'Invest in Dubai from USA')
 @endif
@section('content')

<style>
.luxury-home .image img {
    margin-top: -45px;
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Invest in Dubai from USA'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Invest in Dubai from USA</li>
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
               When it comes to real estate investment Dubai has been making seismic waves of growth in the last decade. With the development of modern and latest infrastructure and construction, it has become the sweet spot for people relocating for a better lifestyle or looking to expand on their investment opportunities.
            </p>
            <p>
                If you’re from USA and are looking to invest in Dubai Real Estate, then you’ve come to the right place!
            </p>
            
</div>
</section>


<!-- /section-close -->





<!-- /section-open for image-->

<section class="tf-section luxury-home py-50 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-land-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                               
                                    <h2 class="wow fadeInUp">How to Invest in Dubai from USA</h2>
                                    <div class="text-content wow fadeInUp">
                                      <p>
                               Discover unparalleled investment prospects in Dubai, the thriving gem of the Middle East, with Profound Realtors. Tailored for US investors, explore the advantages, navigate the procedures, and uncover how our adept investment managers can steer you toward exceptional success.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits of Investing in DubaiBenefits of Investing in Dubai
</h2>
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
                                        <a class="title">Dynamic Growth



                                        </a>
                                        <p>
Dubai, a symbol of relentless growth, offers an environment conducive to optimal returns on investment.


                                        </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Tax Advantages


                                        </a>
                                        <p>
Benefit from Dubai's tax-friendly policies, allowing US investors tax-free rental income and capital gains.


                                        </p>
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Global Diversification


                                        </a>
                                        <p>
Diversify your portfolio with Dubai's array of real estate options, from luxurious residences to strategic commercial spaces.


                                 </p>
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">How to Invest in Dubai from USA</h2>
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
                                        <a class="title">Comprehensive Research



                                         </a><p>
Initiate your journey with thorough research on Dubai's real estate market. Our investment managers at Profound Realtors can assist in crafting a customized strategy aligned with your objectives.


                                        </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Legal Clarity



                                              </a>
                                        <p>
Navigate the legal landscape confidently with our experts guiding you through procedures, ensuring compliance and a seamless process.


                                       </p>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Property Selection



                                         </a>
                                        <p>
Choose from our diverse real estate portfolio that suits your preferences and investment goals.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Financing Solutions</a>
                                        <p>
                                      Explore budget-aligned financing options with Profound Realtors collaborating with reputable financial institutions to provide tailored solutions.
                                        </p>
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">How Profound Realtors Can Assist</h2>
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
                                        <a class="title">Expert Guidance
                                           </a>
                                           <p>
                                         Rely on our seasoned investment managers with extensive knowledge of the Dubai real estate market, guiding you to make well-informed decisions.
                                              </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Personalized Solution
                                        </a>
                                        <p>
                                    Crafted for unique investors, our team ensures your portfolio aligns seamlessly with your financial goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Streamlined Process</a>
                                          <p>
                                           Experience a hassle-free investment journey as our dedicated team manages documentation, legalities, and logistics.
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
                                    <img src="{{asset('frontend/assets/images/dubai-land-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Unlock the Doors to Dubai’s Real Estate Market!</h2>
                                    <div class="text-content wow fadeInUp">
                                      <p>
                Investing in Dubai from the USA has never been more promising. Choose Profound Realtors as your trusted partner, and let our experienced investment managers guide you toward unparalleled success in the dynamic Dubai real estate landscape.

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