@extends('frontend.layout.default')

@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Contact Us')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif

@section('content')
<script>
fbq('track', 'Contact');
</script>

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
                <section class="flat-title inner-page" style="background:url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-2.webp') }}');background-repeat:no-repeat;background-size:cover;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Contact Us'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->


                <section class="tf-section send-message py-100">
                    <div class="cl-container">
                        <div class="row">
                        <div class="col-md-6">
                                <div class="heading-section">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Speak to an Advisor</h2>
                                    <div class="text wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <p>Our highly experienced team of professionals will guide you through the process to help you find the perfect home. Get in touch with us and our real estate advisor will help you discover the best options for investment.</p>
                                    <div class="contact-counters">
                                    <div class="contact-counters-list">
                                    <span class="contact-counters-list-number">4000+</span><span class="contact-counters-list-text"> Real Estate</span>
                                    </div>
                                    <div class="contact-counters-list">
                                    <span class="contact-counters-list-number">400+</span><span class="contact-counters-list-text"> Clients</span>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4"><a href="{{ url('off-plans') }}" class="tf-button-primary style-black wow fadeInUp animated animated mt-10" style="visibility: visible; animation-name: fadeInUp;">Off-Plan Properties <i class="icon-arrow-right-add"></i></a></div>
                                    <!--<div class="col-md-4"> <a href="{{ url('ready') }}" class="tf-button-primary style-black wow fadeInUp animated animated mt-10" style="visibility: visible; animation-name: fadeInUp;">Ready Properties <i class="icon-arrow-right-add"></i></a></div>-->
                                    <div class="col-md-4"><a href="{{ url('rent') }}" class="tf-button-primary style-black wow fadeInUp animated animated mt-10" style="visibility: visible; animation-name: fadeInUp;">Rent Properties <i class="icon-arrow-right-add"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form class="form-send-message" action="{{ url('sell-contact-us') }}" id="form" name="enquireForm">
                                @csrf
                                    <div class="cols">
                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Name</label>
                                        </fieldset>
                                        
                                        <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Email</label>
                                        </fieldset>

                                    </div>
                                    <div class="cols">
                                    <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Phone</label>
                                        </fieldset>
                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Property Details" class="" name="propertyDetails" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Property Details</label>
                                        </fieldset>
                                    </div>
                                    <fieldset class="message wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <textarea name="message" rows="4" placeholder="Your Message" class="" tabindex="2" aria-required="true" required=""></textarea>
                                        <label for="">Your Message</label>
                                  </fieldset>

                                    
                                    <div class="button-submit wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <button class="tf-button-primary w-full" type="submit">Send Message<i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>



                <div class="wrap-map-v5">

                    <div class="grid-contact">
                        <div class="contact-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-location-pin"></i>
                            </div>
                            <div class="content">
                                <h4>Our Address</h4>
                                <p>
                                    Office 1202 Tameem House, Al Foloos, Barsha Heights, Dubai, 452241, Dubai
                                </p>
                            </div>
                            <div class="bot">
                                <div class="text-content"><a href="https://goo.gl/maps/qUdYgX1hZHaGzS4Y9">See on Map</a></div>
                            </div>
                        </div>
                        <div class="contact-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="content">
                                <h4>Contact Info</h4>
                                <p>
                                   <a href="tel:+971522983469">+971 52 298 3469</a>
                                </p>
                                <p>
                                   <a href="tel:+97145139666">+971 4 513 9666</a>
                                </p>
                            </div>
                            <div class="bot">
                                <div class="text-content"><a href="tel:+971506531232">Give us a call</a></div>
                            </div>
                        </div>
                        <div class="contact-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-video-chat"></i>
                            </div>
                            <div class="content">
                                <h4>Live Support</h4>
                                <p>
                                    info@profoundrealtors.com
                                </p>
                            </div>
                            <div class="bot">
                                <div class="text-content"><a href="mailto:info@profoundrealtors.com">Email Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="tf-section flat-partner style-1">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <div class="text wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Thousands of world’s leading companies trust Space</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="flat-brand">
                                    <div class="swiper-container slider-brand">                            
                                        <div class="swiper-wrapper">
                                          @foreach($developers as $developer)
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{ asset($developer->dev_logo) }}" alt="">
                                                    </a>
                                                </div>                         
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


</div>

@endsection