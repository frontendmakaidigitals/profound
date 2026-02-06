@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Properties in Palm Jumeirah')
	 @section('pageDescription', 'Buy Properties in Palm Jumeirah')
	 @section('pageKeyword', 'Buy Properties in Palm Jumeirah')
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
                                    <h1 class="text-white">{{ ($banner != null) ? $banner->heading_one :  'Buy Properties in Palm Jumeirah'}}</h1>
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

<section class="my-100">
<div class="cl-container">
  <p>It’s no brainer that everyone wants to <a href="{{ asset('buy-properties-in-palm-jumeirah') }}"><b>buy Property in Palm Jumeirah</b></a>. Palm Jumeirah is an icon when it comes to modern architecture and man-made beauty. It has been a pinnacle of luxury and high-life for many years with lots of famous celebrities and personalities across the world having their own accommodation in this palm shaped wonder.  
 </p>
</div>
</section>


                
                <!-- luxury-home -->
                <section class="tf-section luxury-home py-50 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/business-bay-5.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Buy Apartment In Palm Jumeirah</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
             Locals and visitors alike often talk about this community as one of Dubai’s most impressive creations. And it still amazes visitors even though it was created a long time ago. Maybe it’s because it’s a set of artificial islands, and the biggest ones in the world at that. Isn't it most people's aim to live somewhere that is known around the world? If this is the case with you too, then get a home here. It’s easily one of the best landmarks that people everywhere associate with Dubai.
          </p>
          <p>
            Wouldn’t this be something to tick off your bucket list? If this has always been on your mind, then it might be time to buy properties in Palm Jumeirah. If you are someone who likes exclusive places like this one, you can also get a <a href="url">property for rent in Dubai Creek Harbour</a>. It's also something unique and has exposure to the water, but the difference is that it's not as lavish as Jumeirah. For people who love to take care of themselves and get weekly grooming sessions, investing in this area means you are in for a treat. Whenever you walk out of your apartment or villa, you can walk straight into spas and fitness centres. This is just how close everything is in this area. If, after reading this you decide to rent or buy a property here, take your expectations up a notch. Here you will also spot cafes, restaurants and luxury hotels all along the beach.
          </p>
          <p>
            It almost feels like its own city, just built over the water rather than on land. Here, every type of property is available that you can find in any other luxury community. It has everything from flats and penthouses to huge mansions that are worth a lot of money. It's everything you can think of when you imagine luxury. Don't forget the amenities. They include butler services, ferries for transportation and even shopping malls with premium brands. And for the fitness enthusiasts, it's the best place to stay motivated for daily workout routines. While you walk or do your workout, you will enjoy both the view and the breeze.
          </p>
          <p>
            If this sparked your interest, you can get a lot more information when you talk with our <a href="https://profoundrealtors.com/"><b>realtors in UAE</b></a>. At Profound Realtors, all of our agents have years of experience in the property market in Dubai.
          </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->

                <!-- /section-open -->
                <section class="tf-section choose-us has-bg-vector py-100">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class=" wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Types of houses in Palm Jumeirah</h2>
                                    <p>This amazing Palm has varieties of properties one can invest in. Each property type is unique and has its own architectural character. Here are some of the most desired properties in Palm Jumeirah.</p>
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
                                        <a class="title">Signature Villas:</a>
                                        <p>These are the most luxurious and expansive properties on the Palm. They come in various sizes and designs, featuring private pools, beach access, and stunning views of the Gulf.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Garden Homes:</a>
                                        <p>These are elegant villas with lush gardens and direct beach access. They offer a mix of indoor and outdoor living spaces, often with beautiful landscaping.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Canal Cove Villas:</a> 
                                        <p>Situated along the fronds, these villas offer a more tranquil setting with the calming views of the canals. They come in different sizes and layouts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Townhouses:</a> 
                                        <p>Palm Jumeirah also offers townhouse-style residences, providing a balance between spaciousness and a sense of community.    </p>                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Apartments:</a> 
                                        <p>Alongside villas, Palm Jumeirah features luxury apartment complexes with stunning sea views and access to various amenities.</p>                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Penthouses:</a> 
                                        <p>Exclusive penthouse apartments are available, offering expansive living spaces, high-end finishes, and panoramic views of the Gulf and Dubai's skyline.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Shoreline Apartments:</a> 
                                        <p>These are mid-rise apartment buildings offering a variety of layouts and sizes, often with access to the beach and other facilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Golden Mile:</a> 
                                        <p>A mixed-use development featuring luxury apartments and townhouses, with retail and dining options conveniently located within the complex.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Serene Residences:</a> 
                                        <p>A collection of townhouses and apartments known for their contemporary design and access to private beaches.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Balqis Residence:</a> 
                                        <p>Inspired by the rich cultural heritage of the region, these properties offer a unique blend of luxury and Arabian aesthetics.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /section-close -->


                <!-- /section-open -->
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
                                    <h2 class="wow fadeInUp">Apartments for rent in Palm Jumeirah</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
                                     Here, properties are not just for sale. You can also find rental properties with all the same perks that you would have gotten if you bought an apartment in this island development. You can rent different apartments, be it penthouses or studios, with the help of our realtors in UAE. Whether you’re just visiting for a few days or planning to stay longer, the island has something special for everyone. If you are not fond of being near the sea all the time, then you can <a href="{{ asset('buy-properties-in-downtown-dubai') }}"><b>buy properties in Downtown Dubai</b></a>, which have similar luxury minus the waterfront living. Apartments in Palm Jumeirah are all different, which is why they are priced differently too. This variation depends on the level and the building in which you are planning to live. <a href="{{ asset('blog-details/smart-investors-book-a-tour-before-investing-in-property-in-dubai') }}"><b>Smart investors</b></a> often consider not just the view but also the long-term value and maintenance of the property. The price also differs with the type of view; a better one will obviously cost more. If a sea view is not your priority, you can get more affordable options from which you can see the garden instead of the sea, especially when supported by reliable <a href="{{ asset('blog-details/facility-management-in-dubai-safeguarding-your-investment') }}"><b>Facility Management in Dubai</b></a> to ensure comfort and convenience.
 </p>
 
                                   </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<!-- /section-close -->

<!-- /section-open -->

<section class="tf-section choose-us has-bg-vector py-100">
                    <div class="cl-container">
                       
                        <div class="row">
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Exclusive Lifestyle</a>
                                        <p>Residents enjoy a lavish and exclusive lifestyle surrounded by upscale amenities, high-end shopping, and fine dining options.</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Scenic Views</a>
                                        <p>Many properties offer breathtaking views of the Arabian Gulf, Dubai's skyline, and the iconic Atlantis resort.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Beachfront Living</a> 
                                        <p>Access to pristine beaches and turquoise waters right at your doorstep, perfect for leisure and relaxation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">World-Class Amenities</a> 
                                        <p>The palm-shaped island boasts top-notch facilities, including spas, fitness centers, and recreational areas, providing residents with unparalleled comfort and convenience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Community Atmosphere</a> 
                                        <p>A tight-knit community with various social events and gatherings, fostering a sense of belonging among residents.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Iconic Architecture</a> 
                                        <p>Living in a masterfully designed, landmark location that represents Dubai's innovative spirit and adds to your prestige.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Privacy and Security</a> 
                                        <p>Gated communities, 24/7 security, and controlled access ensure a safe and secure living environment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Investment Potential</a> 
                                        <p>Properties on Palm Jumeirah often appreciate in value, making it a potentially lucrative real estate investment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Convenient Location</a> 
                                        <p>Proximity to major attractions, business hubs, and entertainment districts, ensuring you're well-connected to the heart of Dubai.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">High-Quality Education</a> 
                                        <p>Access to reputable international schools and educational institutions for families with children.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-2">
                                <div class="box-icon wow fadeInUp animated p-5" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-check"></i>
                                    </div>
                                    <div class="content">
                                        <a class="title">Resort-Style Living</a> 
                                        <p>The island offers a resort-like atmosphere, with many residences featuring private pools, beach</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
<!-- /section-close -->


<!-- /section-open -->

<section class="tf-section luxury-home py-100 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/palm-jumerah-4.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Apartments For Sale in Palm Jumeirah</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
          If properties for sale are what you are aiming for, the apartments in this community are an excellent choice. It can be a luxury penthouse in one of the skyscrapers or a 4-bedroom unit. What you need to know is that the prices depends on the size and location of the unit you have your eye on. One-bedroom apartments can cost a couple of million dirhams.</p>
          <p>
          Three-bedroom ones can cost 5x more. If you are an investor, then you must be interested in which are the most popular ones. The answer is two-bedroom apartments. They are most sought after by families or expats sharing a single place. Many investors who <a href="{{ asset('buy-properties-in-business-bay') }}"><b>buy properties in Business Bay</b></a> often expand their search to other areas with similar high-end appeal. And for that, they find Palm Jumeirah’s lifestyle and location the best choice. On the other hand, those looking for a quieter and more affordable investment often <a href="{{ asset('buy-properties-in-dubai-land') }}"><b>buy properties in Dubai Land</b></a>, where new communities are constantly being developed.
          </p>        
          
         
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
   <section class="flat-question style-1 py-50">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Frequently Asked Question</h2>
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="flat-accordion">
                                                
                                                <div class="flat-toggle active">
                                                    <h4 class="toggle-title active">1. Does Creek Harbour have a lower rent than this area?</h4>
                                                    <div class="toggle-content">
                                                        <p> 
                                                    Yes, the Palm is the fancier option, filled with luxury homes and hotels. It’s also a busy spot that pull people from all over. If you want something that costs less but still feels modern, you’ll find a good property for rent in Dubai Creek Harbour.                                                         </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">2. What is so special about the Palm?</h4>
                                                    <div class="toggle-content">
                                                        <p>
                                                    These are some things that make it stand out from other luxury residences in Dubai.
                                                       </p>
                                                       <ul>
                                                        <li>
                                                          It's a one of a kind  Archipelago built by humans.
                                                        </li>
                                                        <li>
                                                           You can clearly see it from space. 
                                                        </li>
                                                        <li>
                                                            It gives the best of both worlds, which is resort style AND city life.
                                                        </li>
                                                       </ul>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">3. Is it free to visit Palm Jumeirah?</h4>
                                                    <div class="toggle-content">
                                                       <p>
                                                    Yes, not everything is free, but the basic ones are. This includes things like driving or walking there. Basically, exploring most of the area has no charges. But for touristy places and facilities, you might have to pay. Also, a thing to know is that beaches are also free of cost, but private ones aren't.
                                                       </p>  
                                                                                                        </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 4. How is The Palm connected to the mainland?</h4>
                                                    <div class="toggle-content">
                                                        <p>  
                                                    It is connected by a road bridge and the Palm Monorail transit system.
                                                    </p>                                      
                                                      </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 5. Can foreigners own property there?</h4>
                                                    <div class="toggle-content">
                                                        <p>       
                                                    You’ll be glad to know Palm Island is a freehold zone, open to property ownership for all nationalities.                                                      </p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                            </div>
                            </div>
                            </div>
                            </section>
<!-- /section-close -->

                </div>


  
@endsection