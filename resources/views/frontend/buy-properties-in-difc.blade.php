@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Properties in DIFC')
	 @section('pageDescription', 'Buy Properties in DIFC')
	 @section('pageKeyword', 'Buy Properties in DIFC')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Buy Properties in DIFC'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Properties in DIFC</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->


<!-- /section-open for image-->

<section class="tf-section luxury-home py-50 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/best-property-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in DIFC</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
             Dubai is the heart of business and finance. It has become the economical powerhouse thanks to the diverse industries and companies bringing in new opportunities and possibilities making this city the ideal place for investors to invest and live in. 
             <br>
             There are many commercial blocks, areas and projects where you can invest to open up your business, give out the space for rent to business for rental yields or selling for a higher price after capital appreciation. <br> One of the sought after financial zones is the DIFC. It is where many multinational corporations and booming businesses have their corporate offices or headquarters. 
             <br>
             Before you decide to buy properties in DIFC, here is a quick summary of the benefits and the history of DIFC.

          </p>
                      <h2 class="wow fadeInUp">What is DIFC?</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
             The Dubai International Financial Centre (DIFC) is a prominent financial free zone located in Dubai, United Arab Emirates. It serves as a financial hub and business district that provides a conducive environment for various financial institutions, multinational corporations, and professional services firms.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Benefits You Get When You Buy Properties in DIFC!</h2>
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
                                        <a class="title">Prime Location</a>
                                        <p>DIFC is a prestigious business district in the heart of Dubai, offering a prime location with easy access to major commercial and financial centers.
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
                                        <a class="title">Investment Potential</a>
                                        <p>
                                        Properties in DIFC have the potential for strong rental yields and capital appreciation due to the high demand from professionals and businesses seeking upscale accommodations.


                                         </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Stable Legal Environment</a> 
                                        <p>DIFC operates under its own independent legal and regulatory framework based on common law principles, providing a stable and transparent legal environment for property ownership.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Luxurious Lifestyle</a> 
                                        <p>
DIFC offers a luxury lifestyle with upscale amenities, fine dining, entertainment options, and cultural events, catering to the preferences of discerning residents.

                                        </p>                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Business Opportunities</a> 
                                        <p>Living in DIFC provides proximity to numerous multinational corporations, financial institutions, and professional services firms, creating networking and business opportunities.

</p>                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">High-Quality Infrastructure</a> 
<p>Properties in DIFC are known for their modern architecture, high-quality construction, and state-of-the-art facilities, ensuring a comfortable and sophisticated living experience.

</p>                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">International Community</a> 
<p>
DIFC attracts a diverse international community of professionals, providing a multicultural and cosmopolitan environment.


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
                                        <a class="title">Potential for Rental Income</a> 
<p>Many expatriates and professionals seek accommodation in DIFC, making properties in the area attractive for rental income.


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
                                        <a class="title">Access to Amenities
                                         </a> 
<p>Residents of DIFC have access to a range of amenities, including fitness centers, swimming pools, retail outlets, and exclusive dining options.

</p>
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
                                        <a class="title">Cultural and Social Events</a> 
<p>DIFC hosts various cultural and social events, seminars, and workshops, contributing to a vibrant community atmosphere.

</p>                                    </div>
                                </div>
                            </div>

<div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Potential for Work-Life Balance</a> 
<p>Living in close proximity to the workplace can potentially contribute to a better work-life balance, saving commute time and stress.

</p>                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Long-Term Value</a> 
                                        <p>The prestige and centrality of DIFC can contribute to the long-term value and desirability of properties, making them potentially attractive for resale.

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
                                    <img src="{{asset('frontend/assets/images/difc-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Properties in DIFC with Profound Realtors</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
                         We know where true business takes place in Dubai, and when it comes to offering commercial properties for purchase our investment managers are all equipped with the expertise to help you route your investment in the best spots in DIFC. 
                      </p>
                      <p>
                          So, contact us today and let our investment manager help you out with your investment journey. 
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