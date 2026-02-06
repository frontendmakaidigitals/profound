@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Townhouses in Dubai')
	 @section('pageDescription', 'Buy Townhouses in Dubai')
	 @section('pageKeyword', 'Buy Townhouses in Dubai')
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
                                    <h1 class="text-white">{{ ($banner != null) ? $banner->heading_one :  'Buy Townhouses in Dubai'}}</h1>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Townhouses in Dubai</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->

                
                
                <!-- luxury-home -->
                <section class="tf-section luxury-home py-50 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-townhouse-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Townhouses On Top Of Tranquility</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
                 Dubai has emerged to be one of the most viable real estate markets in the world and most investors are now favoring to <a href="{{ asset('buy-townhouses-in-dubai') }}"><b>Buy Townhouses in Dubai</b></a> because of their spacious plans, privacy and high resale value. Townhouses present the best combination between apartments and villas, thus they are suitable to both families and long term investors. Buyers may visit high-quality communities, flexible payment schemes, and high-yield opportunities with help of the seasoned <a href="https://profoundrealtors.com/"><b>Realtors in Dubai</b></a>. Townhouses are a lifestyle comfort and an excellent capital appreciation whether you are planning to settle in Dubai or increase your investment portfolio.
                 </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->


                
                <!-- luxury-home -->
                <section class="tf-section luxury-home py-50 style-5">
                    <div class="cl-container">
                        <div class="row justify-between flex-row-reverse">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-townhouse-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Townhouses For Sale In Dubai</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
The selection of <b>Townhouses For Sale in Dubai</b> is very extensive and they are found in master planned communities with advanced state-of-the-art facilities. Buyers have the options of family friendly neighborhoods, gated communities, and up-market developments that have parks, schools, retail outlets, and recreational amenities. In comparison to apartments in the best locations like <a href="{{ asset('buy-properties-in-downtown-dubai') }}"><b>Buy Properties in Downtown Dubai</b></a> or <a href="{{ asset('buy-properties-in-dubai-marina') }}"><b>Buy properties in Dubai Marina</b></a>, the townhouses are more spacious and less expensive. It is also beneficial to investors seeking rental income since the large homes are still being sought after as the Property For Rent in Downtown Dubai and the Property For Rent in Business Bay.
            </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->


                
                <!-- luxury-home -->
                <section class="tf-section luxury-home py-50 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-townhouse-4.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Luxury Townhouses in Dubai</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
              The <b>Luxury Townhouses in Dubai</b> are targeted at clients who would want to obtain style, solitude and high quality living. The properties are characterized by a modern building, luxurious interior, lawn gardens and access to an exclusive community facility. The ideal place to <a href="{{ asset('buy-properties-in-palm-jumeirah') }}"><b>Buy Properties in Palm Jumeirah</b></a>, Buy Properties in Business Bay, and <a href="{{ asset('buy-properties-in-dubai-creek-harbour') }}"><b>Buy Properties in Dubai Creek Harbour</b></a> have been the most popular areas, where people can enjoy luxury living and the likelihood of successful investments. The new communities like <a href="{{ asset('buy-properties-in-damac-hills-dubai') }}"><b>Buy Properties in Damac Hills Dubai</b></a>, Buy Properties in Nshama and <a href="{{ asset('buy-properties-in-dubai-land') }}"><b>Buy Properties in Dubai Land</b></a> also sell the upscale townhouses at favorable prices. As the world takes more interest, numerous foreign investors currently <a href="{{ asset('invest-in-dubai-from-qatar') }}"><b>Invest in Dubai in Qatar</b></a> and Invest in Dubai in Pakistan due to the tax free system and stable real estate prices in Dubai.
             </p>
             <br>
            <p>
                Dubai townhouses are giving excellent returns in terms of rental and long term appreciation. There are investors who already have apartments in Buy Properties in Downtown Dubai or <a href="{{ asset('buy-properties-in-business-bay') }}"><b>Buy Properties in Business Bay</b></a> who commonly invest in the townhouses as rentals. These properties will appeal to tenants who are looking to leave their apartments, which will increase demand the same way Property For Rent in Business Bay and <a href="{{ asset('property-for-rent-in-downtown-dubai') }}"><b>Property For Rent in Downtown Dubai</b></a> did.Dubai Professional Realtors assist investors to find out the better performing communities and close the best deals.
            </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->

<style>
#toggle1{
        cursor:pointer;
    }
    a#toggle1 {
    font-size: 20px;
    font-weight: 500;
    display: block;
    margin: 20px 0;
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

</style>  

<section class="flat-question style-1 py-50">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h5 class="wow fadeInUp">Frequently Asked Question</h5>
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="flat-accordion">
                                                
                                                <div class="flat-toggle active">
                                                    <h4 class="toggle-title active">1. What is the reason as to why I should purchase a townhouse in Dubai rather than an apartment?</h4>
                                                    <div class="toggle-content">
                                                        <p> 
                                                 Townhouses have a greater space, privacy and family friendly living conditions compared to the apartments making it a long term usage and rental.
                                                      </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">2. Can townhouses make good investments among international investors?</h4>
                                                    <div class="toggle-content">
                                                        <p>
                                                    Yes, there are numerous foreign investors that Invest in Dubai in Qatar and Invest in Dubai in Pakistan as the ROI is high, legal transparency is high, and the country has positive policies toward investors.
                                                       </p>
                                                       
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">3. Which neighbourhoods that you prefer are most appropriate to purchase townhouses?</h4>
                                                    <div class="toggle-content">
                                                       <p>
                                                  <a href="{{ asset('buy-properties-in-nshama') }}"><b>Buy Properties in Nshama</b></a>, Buy Properties in Damac Hills Dubai,  Buy Properties in Dubai land and even the luxurious places like Buy Properties in Palm Jumeirah are all luxurious and trendy places
                                                       </p>  
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 4. Could there be rental brought in by town houses?</h4>
                                                    <div class="toggle-content">
                                                        <p>  
                                                    Absolutely. The Townhouses are targeted at the professionals and families similar to the example of Downtown Dubai and Business Bay.
                                                    </p>                                      
                                                      </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 5. Do you recommend the services of a real estate agent?</h4>
                                                    <div class="toggle-content">
                                                        <p>       
                                                    Having worked with the seasoned Realtors in Dubai means there is ease in the dealings and legal transparency as well as exclusive listing.  
                                                     </p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                            </div>
                            </div>
                            </div>
                            </section>


</div>  
@endsection