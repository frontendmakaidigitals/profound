@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Properties in Dubai Creek Harbour')
	 @section('pageDescription', 'Buy Properties in Dubai Creek Harbour')
	 @section('pageKeyword', 'Buy Properties in Dubai Creek Harbour')
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
                                    <h1 class="text-white">{{ ($banner != null) ? $banner->heading_one :  'Buy Properties in Dubai Creek Harbour'}}</h1>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Properties in Dubai Creek Harbour</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->


<section class="my-100">
<div class="cl-container">
  <p>
               Welcome to a world of breathtaking beauty and modern elegance – Dubai Creek Harbour. As your dedicated <a href="https://profoundrealtors.com/"><b>real estate agents in Dubai</b></a>, Profound Realtors is thrilled to showcase an exceptional selection of properties that capture the essence of luxury living in this magnificent waterfront destination. For you to <a href="{{ asset('buy-properties-in-dubai-creek-harbour') }}"><b>Buy Properties In Dubai Creek Harbour</b></a> you need help, and Profound is the guiding light you need. Let us drive you through high-end properties and <a href="{{ asset('best-property-investment-opportunities-in-dubai') }}"><b>investment opportunities</b></a> in the extraordinary region of luxury and comfort.

      </p>
</div>
</section>

 <!-- luxury-home -->
                <section class="tf-section luxury-home py-50 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-creek-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Studio Apartment In Dubai Creek Harbour</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
                           If you’re thinking about having a home in this city of dreams, then Buy Properties in Dubai Creek Harbour. Doing this should be the first thing on your list. You will catch people who live here saying it's more than just a fancy neighbourhood. You know what our estate agents tell clients? Living here feels like an unlimited staycation minus the cost. Most residents here just step onto their balconies and relax. All their stress fades away with the flowing water sounds in the background and the beautiful view. This is the reason people love this community. The best perk? You will not have to choose between this and convenience.
                           </p>
                           <br>
                           <p>The residents here can still find cafes and schools just as easily as in any other city. Doesn't matter if you’re single and want a cozy one-bedroom or you’re a couple looking for something fancy up top, this residential area gives the same peaceful experience for all. This means no compromise on the stunning views or the peace you love most. And no compromise on the city lifestyle.

                           </p>
                           <p>Talk to any of the realtors in UAE, and they will tell you this area has great investment potential. At Profound Realtors, we know this because the location is perfect for professionals or businessmen looking for <a href="{{ asset('property-for-rent-in-dubai-creek-harbour') }}"><b>properties for rent in Dubai Creek harbour</b></a>. It's just a 14 minutes drive from <a href="{{ asset('buy-properties-in-downtown-dubai') }}"><b>downtown Dubai</b></a>, which is great if your work needs you to be close to the office or run a business in the city. Additionally, if you travel a lot, its proximity to <a href="{{ asset('buy-properties-in-dubai-marina') }}"><b>Dubai Marina</b></a> and the International Airport is another added value for you. Whether you are a foreign investor or an entrepreneur, the convenience of all the major places nearby makes it a package that's hard to find.

                          </p>
          
         
                                    </div>
                                
                                </div>
                            </div>

                            <section class="my-100">
                           <div class="cl-container">
  
          <h3 class="mt-4">Properties for sale in Dubai Creek Harbour</h3>
          <p>
            Are you researching properties for sale in the Dubai waterfront community? If you don't yet know what your options are, then Profound Realtors is here for you. Just starting, chose between the many one-bedroom apartments. If you want something more lavish, get a penthouse. And if you are a family, then opt for a villa which will accommodate every member easily. No matter which type of property you get, they will all have large windows and open layouts. Don't forget the balconies. All the properties in this community have them with a view of the main attraction, which is the creek. You can also get the bonus view of the skyline if you get a penthouse.
          </p>
          <p>
            Have you not yet decided on buying a property in this area? You can always compare your options with other top areas in the city. Some people choose to <a href="{{ asset('buy-properties-in-downtown-dubai') }}"><b>Buy Properties in Downtown Dubai</b></a>, while others love the calm, coastal life when they <a href="{{ asset('buy-properties-in-palm-jumeirah') }}"><b>Buy Properties in Palm Jumeirah</b></a>. If you look from the perspective of <a href="https://profoundrealtors.com/"><b>realtors in UAE</b></a>, then the Creek Harbour stands out. There are upsides for them all, but this has its own unique appeal. It's because the residents can enjoy the waterfront access combined with an urban lifestyle.
          </p>
          <p>
            To add to all these upsides, the community is safe. So if you have a family or live alone, you will never have to worry about your safety. Additionally, it also has parks and recreational areas where children can enjoy after school, or you can destress by going for a walk. This community is also attractive to investors. It possesses a strong rental demand and steady capital appreciation.
          </p>
</div>
</section>

 <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-creek-3.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Apartments for rent In Dubai Creek Harbour</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
             If you are not sure whether you should buy a property here or not, you can lean towards properties for rent in the city's harbour residences. This way, you can experience everything by yourself without investing in a place that you are unsure about.
            </p>
          <p>Buildings like the Harbour Gate and Creek Residences even have podiums that are covered with lush greenery. And many of these podiums also house other amenities like swimming pools. This means you can feel relaxed and refreshed just by heading to the podium area.  The amenities also include jogging and cycling tracks. Imagine going for a jog on a Sunday morning with the soft breeze of the waterfront. You can enjoy all this and more if you rent a place here. Renting is a convenient option when you don't have a plan to purchase a property or just want to test it first. For instance, you want to <a href="{{ asset('buy-properties-in-dubai-land') }}"><b>buy properties in Dubai Land</b></a>, simply lease an apartment there for a few months and based on your experience, whether it's something you want to invest in or not.

          </p>
                                    </div>
                                
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
                                                    <h4 class="toggle-title active">1. What makes this city's Creek special?</h4>
                                                    <div class="toggle-content">
                                                        <p> 
                                                     Its uniqueness lies in the access to the waterfront. Here you can enjoy the calmness of the natural creek while staying within the city. You can't get this combination in other areas, for instance, when you <a href="{{ asset('buy-properties-in-business-bay') }}"><b>buy properties in Business Bay</b></a>.
                                                         </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">2. Should I buy properties in Dubai Marina or somewhere else?</h4>
                                                    <div class="toggle-content">
                                                        <p>
                                                     Depends on what you are after. If you want the views and quietness without being far from the city, then don't buy properties in Marina. It's for those who like the liveliness of the city. This waterfront community will suit your taste better.
                                                       </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">3. Is this a nice area?</h4>
                                                    <div class="toggle-content">
                                                       <p>
                                                     Absolutely. It is on the list of one of the most relaxing and scenic properties of this vibrant city. It even has great security and facilities like parks and gyms.                                                       </p>                                                  
                                                      </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 4. Are there leisure and recreational facilities nearby?</h4>
                                                    <div class="toggle-content">
                                                        <p>  
                                                     Yes. Ras Al Khor Wildlife Sanctuary is adjacent to it. If you live there, you can also access the park, whose theme is the sea.                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> 5. When should I rent a place in this area as a visitor?</h4>
                                                    <div class="toggle-content">
                                                        <p>       
                                                     You can lease between November and March. Most people love coming here at this time of year. The weather is perfect. You can even go for a walk by the water without dripping with sweat.                                                          </p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                            </div>
                            </div>
                            </div>
                            </section>

</div>
@endsection