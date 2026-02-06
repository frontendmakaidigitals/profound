@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Property For Rent in Dubai Marina')
	 @section('pageDescription', 'Property For Rent in Dubai Marina')
	 @section('pageKeyword', 'Property For Rent in Dubai Marina')
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
.pt-10 {
    padding-top: 50px;
    margin-bottom: -152px;
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
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Property For Rent in Dubai Marina'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property For Rent in Dubai Marina</li>
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
                                    <img src="{{ asset('frontend/assets/images/dubai-marina-2.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Property For Rent In Dubai Marina</h2>
                                    <div class="text-content wow fadeInUp">
                                    <p>
                Dubai is the dazzling district of the United Arab Emirates, renowned for its tall towers, innovative infrastructure, and extraordinary experience. It is a global hub for business, tourism, and luxury living, which exponentially increases its reputation among those looking for a life full of luxury and comfort. In the heart of this exceptionally well built city of the future lies the magnificent Dubai Marina, a testament to Dubai's commitment to excellence and modernity.
            </p>
            <p>
            The Dubai Marina project is a true masterpiece of futuristic real estate and architectural excellence. Stretching along a two-mile artificial canal, its home to an array of exquisite residential properties that redefine waterfront living. The project's stunning skyline, adorned with glittering skyscrapers, offers a mesmerising view that captures the essence of modern marvels of the meticulous metropolis.
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
                                    <img src="{{ asset('frontend/assets/images/marina-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Benefits of Renting Property in Dubai Marina</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
            Dubai Marina is not just a residential area; it is a lifestyle choice. Here are some compelling reasons why renting a property in Dubai Marina are an exceptional decision:
          </p>
          
          <ul>
              <li><b>Prime Location: </b>Situated along the great Sheikh Zayed Road, Dubai Marina offers easy access to major business districts, entertainment hubs, and cultural attractions as well. It is the perfect blend of convenience and luxury</li>
              <li><b>World-Class Amenities: </b> Residents of Dubai Marina enjoy access to an unparalleled range of amenities, including state-of-the-art fitness centres, swimming pools, parks, and dedicated waterfront promenades.</li>
              <li><b>Diverse Housing Options: </b> Whether you prefer a cosy studio apartment with a view or a lavish waterfront villa, Dubai Marina has a property for everyone. The diverse range of housing options ensures that you find a place that suits your needs and lifestyle.</li>
              <li><b>A Vibrant Community: </b> Dubai Marina fosters a vibrant and cosmopolitan community, where people from all walks of life come together to create a diverse and inclusive atmosphere. It is an ideal environment for families, professionals, and expatriates.</li>
              <li><b>Stunning Views: </b> Imagine waking up to breathtaking views of the Arabian Gulf or the iconic Dubai skyline. Dubai Marina's waterfront properties offer some of the most mesmerising vistas in the city.</li>
          </ul>
          
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!-- /section-close -->



<!-- /section-open for image-->

<section class="tf-section luxury-home pt-10 style-5">
                    <div class="cl-container">
                        <div class="row justify-between">
                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                    <img src="{{ asset('frontend/assets/images/marina-4.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Get The Best Any Way You Want</h2>
                                    <div class="text-content wow fadeInUp">
                                     <p>
                Dubai is an extraordinary place and Dubai Marina within this opulent marvel of a metropolis adds even more magic to it. Dubai Marina is testament of excellence, modernity, and the pursuit of a life defined by luxury and comfort. With its prime location, stunning architecture, and a sky full of amenities, renting or living in a property within this iconic district offers an unparalleled lifestyle experience and high rental yields. Dubai Marina represents the fusion of urban sophistication, waterfront beauty, and a vibrant, inclusive community, making it a top choice for those seeking the best that Dubai has to offer.
            </p>
            <p>
                Dubai Marina with its luxury living prime location, stunning architecture, and extensive amenities offers an unparalleled lifestyle that few places in the world can match. Therefore, whether you want to taste the luxury or a bite on the high rental income, Dubai Marina offers you with everything you would want.
            </p>
            <p>
            We at Profound make every process easy for you so you can do all the transactions easily getting all the benefits this city have to offer. If you are someone willing to enjoy the breathtaking views, experience the extraordinary luxury or rent it to earn extra on your investments.
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