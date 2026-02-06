@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Properties for Rent in Al Wasl')
	 @section('pageDescription', 'Properties for Rent in Al Wasl')
	 @section('pageKeyword', 'Properties for Rent in Al Wasl')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Properties for Rent in Al Wasl'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Properties for Rent in Al Wasl</li>
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
                                    <img src="{{asset('frontend/assets/images/al-wasl-1.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Properties for Rent in Al Wasl!</h2>
                                    <div class="text-content wow fadeInUp">
                                                
            <p>
            Renting a home in Dubai offers a range of enticing benefits. Firstly, the city boasts a diverse selection of modern and luxurious properties, catering to various preferences and budgets. Residents can enjoy world-class amenities like state-of-the-art gyms, swimming pools, and breathtaking views. Dubai's excellent infrastructure and transportation networks make it convenient to access work and leisure activities. Furthermore, the absence of property taxes and maintenance costs lightens the financial burden. With its cosmopolitan atmosphere, Dubai provides a unique blend of cultural experiences and a tax-friendly environment, making it an attractive destination for renters seeking a high-quality lifestyle.
            <br>
            However there are numerous neighborhoods and communities to choose from in Dubai, but the one that truly leaves a mark is Al Wasl
          </p>
    
          <h2>What is Al Wasl?</h2>
          <p>
             Al Wasl is a prominent residential and commercial neighborhood in Dubai, United Arab Emirates. It is situated in the heart of the city and is known for its central location and accessibility to various parts of Dubai. Al Wasl is primarily a residential area, featuring a mix of modern apartments, villas, and townhouses. It offers a comfortable and convenient lifestyle with a range of amenities like schools, healthcare facilities, parks, and shopping centers. The neighborhood is also close to key landmarks such as Jumeirah Beach, Burj Khalifa, and Dubai Mall, making it a desirable place to live for both locals and expatriates.
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
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Why You Should Look For Properties for rent in Al Wasl?</h2>
                                    <p>Al Wasl is a lane of its own when it comes to luxury and exemplary living. Here are the benefits of rental properties in that vicinity:</p>
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
                                        <p>Al Wasl is centrally located, providing easy access to key areas of Dubai, including Downtown Dubai, Dubai Marina, and the beach. This central location reduces commute times and enhances convenience.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Diverse Housing Options</a>
                                        <p>Al Wasl offers a variety of housing options, from spacious villas and townhouses to modern apartments, catering to different family sizes and lifestyles.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Amenities</a> 
                                        <p>The neighborhood boasts numerous amenities, including supermarkets, schools, parks, and healthcare facilities, ensuring residents have everything they need within reach.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Lifestyle</a> 
                                     <p>Al Wasl is known for its family-friendly atmosphere, with plenty of recreational options like jogging tracks and sports facilities, making it a great place for active living.</p>  
                                        </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Proximity to Attractions</a> 
                                       <p>Iconic landmarks such as the Burj Khalifa, Dubai Mall, and Jumeirah Beach are just a short drive away, allowing residents to enjoy world-class entertainment and leisure options.</p>
                                     </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Safety and Security</a> 
                                     <p>Dubai is known for its safety, and Al Wasl is no exception, offering a secure environment for residents.</p>  
                                        </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Community Feel</a> 
                                     <p>The neighborhood has a close-knit community, and there are often events and gatherings that promote a sense of belonging among residents.</p>  
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
                                    <img src="{{asset('frontend/assets/images/al-wasl-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Rent Properties in Al Furjan with Profound Realtors!</h2>
                                    <div class="text-content wow fadeInUp">
                                    
                      <p>
                          We know the real estate game in Dubai down to its last molecule. Our investment managers are highly efficient in bringing you the best rental properties in Al Wasl there is, 
                         <b> so reach out to us today!</b>
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