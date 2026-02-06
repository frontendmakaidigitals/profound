@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Buy Luxury Villas in Dubai')
	 @section('pageDescription', 'Buy Luxury Villas in Dubai')
	 @section('pageKeyword', 'Buy Luxury Villas in Dubai')
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Buy Luxury Villas in Dubai'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Buy Luxury Villas in Dubai</li>
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
                                    <img src="{{asset('frontend/assets/images/damac-hills-dubai-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Turn Dreams Into Reality</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
                          Step into a realm of unparalleled luxury and sophistication – Dubai's world of luxury villas. Profound Realtors, your trusted real estate partner, invites you to explore an exquisite selection of opulent villas that redefine extravagant living in this thriving city of dreams. Buy Luxury Villas In Dubai for an excellent experience of comfort and excellence.
                      </p>
                      
                      <br>
                      
                      <h2 class="wow fadeInUp">A Paradise of Prestige</h2>
                      <p>
                          Dubai is known for its great marvels and absolutely amazing architecture and thriving lifestyle. It has redefined the essence of luxury living in the gulf. With its stunning skyscrapers, beautiful beaches, and a thriving cultural scene, Dubai is a melting pot of elegance and modernity. Nestled within this paradise are luxury villas that drive opulence and offer a lifestyle beyond comprehension. Villas in Dubai are trending and people cannot get enough of it, if you are someone seeking a soothing life then this is the spot for you.
                      </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!-- /section-close -->



  <!-- /section-open for text in middle-->

  <section class="mt-10">
<div class="cl-container">
<div class="text">
  
          
          <h2 class="mt-4">Your Villa, Your Haven</h2>
          <h3>Diverse Investment Opportunities</h3>
          <p>
              Profound presents an array of luxurious villas that cater to the desires of the most discerning buyers. Villas within Dubai are often nestled within exclusive gated communities, exude timeless elegance, and boast architectural excellence. From ecstatic estates to contemporary corners, each villa is meticulously designed to offer comfort, privacy, and an extraordinary living experience in the middle of heaven.
         </p>
          

</div>
</div>
</section>
<!-- /section-open for image-->

<section class="tf-section luxury-home py-100 style-5">
                    <div class="cl-container">
                        <div class="row justify-between flex-row-reverse">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{asset('frontend/assets/images/dubai-townhouse-4.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Making The Magical Moments</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
              The world of luxury villas in Dubai is a canvas painted with elegance, extravagance, and excellence. Profound is dedicated to guiding you through this exquisite journey. Whether you are envisioning a life of lavishness or seeking to diversify your investment portfolio, our team is committed to making your dreams a reality.
          </p>
          <p>
              Are you ready to Buy Luxury Villas In Dubai? Contact us today, and let us unveil a world of exceptional villa options that align with your aspirations. Our team of experts are here to provide tailored guidance, expert insights, and personalised assistance throughout your real estate journey. Dubai's luxury villas await – a haven of grandeur, comfort, and beauty. This is the best opportunity you will get in a year, missing this will be a regret and you will further miss the opportunity of getting your fortune to fly high in the skies. 
          </p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!-- /section-close -->




  <!-- /section-open for text in middle-->

  <section class="mt-10">
<div class="cl-container">
<div class="text">
  
          
          <h2 class="mt-4">Making The Magical Moments</h2>
          <h3>Diverse Investment Opportunities</h3>
           <p>
              The world of luxury villas in Dubai is a canvas painted with elegance, extravagance, and excellence. Profound is dedicated to guiding you through this exquisite journey. Whether you are envisioning a life of lavishness or seeking to diversify your investment portfolio, our team is committed to making your dreams a reality.
          </p>
          <p>
              Are you ready to Buy Luxury Villas In Dubai? Contact us today, and let us unveil a world of exceptional villa options that align with your aspirations. Our team of experts are here to provide tailored guidance, expert insights, and personalised assistance throughout your real estate journey. Dubai's luxury villas await – a haven of grandeur, comfort, and beauty. This is the best opportunity you will get in a year, missing this will be a regret and you will further miss the opportunity of getting your fortune to fly high in the skies. 
          </p>
          

</div>
</div>
</section>


</div>
@endsection