@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'UK')
	 @section('pageDescription', 'UK')
	 @section('pageKeyword', 'UK')
 @endif
@section('content')
<?php
$currency = session()->get('currency');

if (empty($currency)) {

  $currency =  'AED';

}
?>
<style>
.contact-item{
    min-height: 300px;
}
.ceo-content h2{
font-size:33px;
}
.ceo-content h5{
color: #e7c873 !important;
    text-transform: uppercase;
    font-size: 16px;
    text-decoration: underline;
    font-weight: 400;
    margin-top: -10px;
}
.luxury-home .image img {
    height: 626px;
    object-fit: cover;
}
.ceo-para p{
color:#fff;
}
.heading-section {
    margin-bottom: 10px;
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
@media(max-width:768px){
.luxury-home .image img {
    height: 350px;
}
.ceo-content{
margin-top:50px
}
.tf-section{
    border-radius:20px !important;
    padding-top:0 !important;
}
.flat-title.inner-page{
    margin: 0 !important;
}
.luxury-home .content{
            margin: 0;
        padding: 20px;
}
}
@media(min-width:768px){
    .agency-single-wrap .wrap-inner .grid-box-dream{
    grid-template-columns: repeat(3, 1fr);
}
}
</style>

<style>
.sidebar .sidebar-item.sidebar-info .image{
    height: 430px;
}
    .sidebar .sidebar-item.sidebar-info > ul > li{
        align-items: flex-start;
    }
    .sidebar .sidebar-item.sidebar-info .title{
        margin: 5px 50px 0 0;
    }
    #modalpropert fieldset, #modalpropert .button-submit{
        visibility: visible !important;
    } 
    #modalpropert form textarea{
        height: 100px !important;
    }
    .iframe-height{
        height: 800px;
    }
    @media(max-width:768px){
        .column-reverse-mobile{
            flex-direction: column-reverse;
        }
        .iframe-height{
        height: 300px;
    }
    }
    
</style>
 <!-- main-content -->
            <div class="main-content py-0">

                 <!-- flat-title -->
                 <div class="cl-container">
                <section class="flat-title inner-page my-5" style="background:url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/geneva/bolton.jpg') }}');background-repeat:no-repeat;background-size:cover;background-position:top;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'UK Office'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">UK Office</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                <!-- /flat-title -->
     <div class="cl-container">
       <section class="tf-section luxury-home style-5 mt-5" style="background: #000;padding: 0px 0px 0 30px;overflow:hidden;">
                    <div class="">
                        <div class="row justify-between flex-row-reverse">
                            
                            <div class="col-md-6 text-end" style="padding:0 !important;">
                                <div class="wow fadeInLeft">
                                    <img src="{{ asset('frontend/assets/images/geneva/uk-final.webp') }}" alt="">
                                </div>
                            </div>

                            <div class="col-xl-5 col-md-6">
                                <div class="content ceo-content">
                                    <h2 style="text-transform:uppercase" class="wow fadeInUp text-white mb-0">Salim Kadva</h2>
                                    <h5 class="wow fadeInUp">CEO of UK Office</h5>
                                    <div class="text-content wow fadeInUp ceo-para mt-5 text-white" style="text-align:justify">
                                        Salim Ahmed is a seasoned entrepreneur with over two decades of experience in establishing and scaling businesses across the UK and internationally. With a strong foundation in real estate, Salim began his career in Dubai in 2002–2003, gaining firsthand insight into the region’s dynamic property market and successfully navigating its cycles of growth and correction.
<br><br>
In 1998, Salim co-founded Leisure Security, a company that later expanded into the UAE with the launch of its sister branch in Dubai in 2003. His business journey began even earlier in the manufacturing sector, where he continues to maintain active involvement to this day.
<br><br>
Throughout his career, Salim has built, operated, and strategically exited multiple ventures, demonstrating a deep understanding of business development, operational management, and market expansion. His ability to identify opportunities, lead teams, and grow sustainable companies has earned him a reputation as a trusted and forward-thinking business leader.
<br><br>
Today, Salim continues to leverage his experience to support new ventures, guide business setups, and contribute to industries he is passionate about.
                                    </div>
                                   
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                
                
                <div class="cl-container mt-5 mb-5">
                    <iframe width="100%" class="iframe-height" src="https://www.youtube.com/embed/W4IfqhU6l2M?rel=0&modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                
                
                <div class="wrap-map-v5 mt-5 mb-5 py-0 pt-0 pb-0">

                    <div class="grid-contact">
                        <div class="contact-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-location-pin"></i>
                            </div>
                            <div class="content">
                                <h4>Our Address</h4>
                                <p>
                                   Croft House, st.georges square, Bolton BL1 2HB
                                </p>
                            </div>
                            
                        </div>
                        <div class="contact-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="content">
                                <h4>Contact Info</h4>
                                <p>
                                   <a href="tel:+447774150910">+44 7774 150910</a>
                                </p>
                            </div>

                        </div>
                        <div class="contact-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="icon">
                                <i class="flaticon-video-chat"></i>
                            </div>
                            <div class="content">
                                <h4>Email</h4>
                                <p>
                                    <a href="mailto:sal@profoundrealtors.com">sal@profoundrealtors.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <section class="tf-section flat-experts pb-0 pt-0" style="margin:80px 0">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Meet Our Team Of Experts</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row wrap-experts mb-0">
                            <div class="col-12">
                                <div class="">
                                    <div class="row justify-content-center">
                                        @foreach($agents as $agent)
                                        <div class="col-md-3 col-6 my-5">
                                            <div class="experts-item wow fadeInUp">
                                                <div class="image">
                                                    <a href="team/{{ $agent->slug }}">
                                                    <img src="{{ $agent->image }}" alt="{{ $agent->first_name }}">
                                                    </a>
                                                </div>
                                                <a href="team/{{ $agent->slug }}">
                                                <h4>{{ $agent->first_name }}</h4>
                                                </a>
                                                <p>{{ $agent->designation }}</p>
                                                <p><a href="tel:{{ $agent->phone }}" class="text-decoration-none">{{ $agent->phone }}</a></p>
                                                <p>{{ $agent->languages }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </section>
                
                </div>
    
                <!-- agency-single-wrap -->
                <div class="agency-single-wrap">
                    <div class="cl-container">
                        <div class="row column-reverse-mobile">
                            <div class="col-lg-12">
                                <div class="wrap-inner">
                                    
                                    <!--<h4 class="wow fadeInUp">About UK Office</h4>-->
                                    
                                    <!--<iframe width="100%" height="500px" src="https://www.youtube.com/embed/JENsi2WIGBQ?si=diW0iZlm_TWKE2cN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->
                                    <br>
                                    <br>
                                    
                                    
                                    
                                     <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Featured Listings</h2>
                                </div>
                                    <!--<h4 class="wow fadeInUp">Featured Listings</h4>-->
                                    <div class="grid-box-dream">
                                         @if(count($featureProperties) > 0) 
                                @foreach($featureProperties as $row)
                                @if($row->is_crm == 0)
                                <?php

                                   //dd($row);

                                    if($row->price == '0'){

                                        $price = 'Ask for Price';

                                        $currencySign = '';

                                        $class = 'btn_ask';

                                    }else{

                                        $class = '';

                                        $currencySign = $currency;

                                        $price = number_format(getprice($row->price), 0);

                                    }

                                ?>
                                        <div class="box-dream has-border wow fadeInUp">
                                            <div class="image">
                                                <div class="list-tags">
                                                    <a class="tags-item for-sell">Off-Plan</a>
                                                </div>
                                                <img class="w-full" src="{{ asset($row->image) }}" alt="{{$row->title}}">
                                            </div>
                                            <div class="content">
                                                <div class="head">
                                                    <div class="title">
                                                        <a href="{{ url('off-plans-property/'.$row->slug) }}">{{$row->title}}</a>
                                                    </div>
                                                    <style>
                                            .start-price{font-size: 14px !important;color: #000 !important;font-weight: 300 !important;margin-bottom:5px;}
                                        </style>
                                                    <div class="price">@if($row->price == '0') {{ $price }} @else <p class="start-price">Starting Price:</p> AED {{ $price }} @endif</div>
                                                </div>
                                                <div class="location">
                                                    <div class="icon">
                                                        <i class="flaticon-location"></i>
                                                    </div>
                                                    <p>{{$row->address}}</p>
                                                </div>
                                                
                                                <div class="icon-box">
                                
                                @if($row->propertyBedrooms->count() > 0)
                                <div class="item">
                                <i class="flaticon-hotel"></i>
                                <p>{{$row->propertyBedrooms->implode('bedrooms',',')}}</p>
                                </div>
                                @endif
                                
                                @if($row->bathrooms != 0)
                                <div class="item">
                                <i class="flaticon-bath-tub"></i>
                                <p>{{$row->bathrooms}}</p>
                                </div>
                                @endif

                                
                                <div class="item">
                                <i class="flaticon-minus-front"></i>
                                <p>{{$row->area}}</p>
                                </div>
                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                          @endif @endforeach @endif
                                        
                                    </div>

                                </div>
                            </div>
                            <!--<div class="col-lg-4">-->
                            <!--    <div class="sidebar">-->
                            <!--        <div class="sidebar-item sidebar-info">-->
                            <!--            <div class="image">-->
                            <!--                <img src="{{ asset('frontend/assets/images/geneva/1-1.jpg') }}" alt="">-->
                            <!--            </div>-->
                            <!--            <ul>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Salim Ahmed Kadva</div>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Head of UK Office</div>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Mobile:</div>-->
                            <!--                    <p><a href="tel:+447774150910">+44 7774 150910</a></p>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Email:</div>-->
                            <!--                    <p><a href="mailto:sal@profoundrealtors.com">sal@profoundrealtors.com</a></p>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Address:</div>-->
                            <!--                    <p>Croft House, st.georges square, Bolton BL1 2HB</p>-->
                            <!--                </li>-->
                            <!--            </ul>-->
                            <!--        </div>  -->
                            <!--        <div class="sidebar-item sidebar-info">-->
                            <!--            <div class="image">-->
                            <!--                <img src="{{ asset('frontend/assets/images/geneva/2-1.jpg') }}" alt="">-->
                            <!--            </div>-->
                            <!--            <ul>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Alexandru Rusu</div>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Sales Executives</div>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Mobile:</div>-->
                            <!--                    <p><a href="tel:+447939331746">+44 7939 331746</a></p>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Email:</div>-->
                            <!--                    <p><a href="mailto:alex@profoundrealtors.com">alex@profoundrealtors.com</a></p>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Address:</div>-->
                            <!--                    <p>Croft House, st.georges square, Bolton BL1 2HB</p>-->
                            <!--                </li>-->
                            <!--            </ul>-->
                            <!--        </div>  -->
                            <!--        <div class="sidebar-item sidebar-info">-->
                            <!--            <div class="image">-->
                            <!--                <img src="{{ asset('frontend/assets/images/geneva/wazir.png') }}" alt="">-->
                            <!--            </div>-->
                            <!--            <ul>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Mohamad Wazir</div>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Sales Executives</div>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Mobile:</div>-->
                            <!--                    <p><a href="tel:+447931786275">+44 7931 786275</a></p>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Email:</div>-->
                            <!--                    <p><a href="mailto:alex@profoundrealtors.com">waz@profoundrealtors.com</a></p>-->
                            <!--                </li>-->
                            <!--                <li>-->
                            <!--                    <div class="title">Address:</div>-->
                            <!--                    <p>Croft House, st.georges square, Bolton BL1 2HB</p>-->
                            <!--                </li>-->
                            <!--            </ul>-->
                            <!--        </div>  -->
                            <!--        <div class="sidebar-item sidebar-contact-info-1">-->
                            <!--            <div class="sidebar-title">Contact Us</div>-->
                            <!--            <div class="contact-info mb-0">-->
                            <!--                <form class="form-send-message" action="{{ url('sell-contact-us') }}" id="form" name="enquireForm">-->
                            <!--                    @csrf-->

                            <!--            <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">-->
                            <!--                <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">-->
                            <!--                <label for="">Name</label>-->
                            <!--            </fieldset>-->
                                    
                            <!--            <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">-->
                            <!--            <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">-->
                            <!--            <label for="">Email</label>-->
                            <!--            </fieldset>-->
                                    

                            <!--        <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">-->
                            <!--                <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">-->
                            <!--                <label for="">Phone</label>-->
                            <!--            </fieldset>-->
                                    
                            <!--        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">-->
                            <!--                <input type="text" placeholder="Property Details" class="" name="propertyDetails" tabindex="2" value="" aria-required="true" required="">-->
                            <!--                <label for="">Property Details</label>-->
                            <!--            </fieldset>-->
                            <!--        <fieldset class="message wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">-->
                            <!--            <textarea name="message" rows="4" placeholder="Your Message" class="" tabindex="2" aria-required="true" required=""></textarea>-->
                            <!--            <label for="">Your Message</label>-->
                            <!--      </fieldset>-->

                                    
                            <!--        <div class="button-submit wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">-->
                            <!--            <button class="tf-button-primary w-full" type="submit">Send Message<i class="icon-arrow-right-add"></i></button>-->
                            <!--        </div>-->

                            <!--    </form>-->
                            <!--            </div>-->
                            <!--        </div>   -->
                                    <!--<div class="wrap-map-v1">-->
                                    <!--    <div id="map-1" class="row-height" data-map-zoom="16" data-map-scroll="true"></div>-->
                                    <!--</div>                        -->
                                    
                            <!--        <br>-->
                            <!--        <br>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <!-- /agency-single-wrap -->

            </div>
            <!-- /main-content -->
            
            
              <!-- login-popup -->
    <div class="modal fade modalCenter" id="modalpropert">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
                  
                <div class="content-right">
                    <h4>Submit A Query</h4>
                    <form class="form-send-message" action="{{ url('sell-contact-us') }}" id="form" name="enquireForm">
                                                @csrf

                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Name</label>
                                        </fieldset>
                                    
                                        <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Email</label>
                                        </fieldset>
                                    

                                    <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Phone</label>
                                        </fieldset>
                                    
                                    <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Property Details" class="" name="propertyDetails" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Property Details</label>
                                        </fieldset>
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
    </div>
    <!-- /login-popup -->


@endsection