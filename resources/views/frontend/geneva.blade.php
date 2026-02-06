@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Geneva')
	 @section('pageDescription', 'Geneva')
	 @section('pageKeyword', 'Geneva')
 @endif
@section('content')
<?php
$currency = session()->get('currency');

if (empty($currency)) {

  $currency =  'AED';

}
?>
<style>
    .sidebar .sidebar-item.sidebar-info > ul > li{
        align-items: flex-start;
    }
    .sidebar .sidebar-item.sidebar-info .title{
        margin: 5px 10px 0 0;
    }
    #modalpropert fieldset, #modalpropert .button-submit{
        visibility: visible !important;
    } 
    #modalpropert form textarea{
        height: 100px !important;
    }
    @media(max-width:768px){
        .column-reverse-mobile{
            flex-direction: column-reverse;
        }
    }
</style>
 <!-- main-content -->
            <div class="main-content py-0">

                 <!-- flat-title -->
                 <div class="cl-container">
                <section class="flat-title inner-page my-5" style="background:url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-3.webp') }}');background-repeat:no-repeat;background-size:cover;background-position:center;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'Geneva Office'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Geneva Office</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                <!-- /flat-title -->
    
                <!-- agency-single-wrap -->
                <div class="agency-single-wrap">
                    <div class="cl-container">
                        <div class="row column-reverse-mobile">
                            <div class="col-lg-8">
                                <div class="wrap-inner">
                                    
                                    <h4 class="wow fadeInUp">About Geneva Office</h4>
                                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/JENsi2WIGBQ?rel=0&playlist=JENsi2WIGBQ&modestbranding=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                                    <br>
                                    <br>
                                    <br>
                                    <h4 class="wow fadeInUp">About Larbi Zine-Eddine CEO of Geneva Office</h4>
                                    <p class="wow fadeInUp">
                                    Larbi Zine-Eddine is a highly experienced professional with over 35 years of expertise in management, international business development, information technology, and real estate. He is the Founder and Director of an internationally recognized IT training institute, where he oversees the creation of advanced training programs and the establishment of strategic global partnerships.
                                    <br><br>
                                    Holding Master's degrees in Economics and Computer Science from the University of Geneva, he has successfully combined strategic business acumen with technical IT proficiency. He began his career as a programmer analyst at PetroConsultant, later advancing to leadership roles at IBM Swiss and Globus, where he played a key role in optimizing IT systems and developing innovative technological solutions for major corporations.
                                    <br><br>
                                    In 1996, he founded the IT training institute, which has expanded its presence internationally. Recently, he has diversified into the real estate sector, establishing an exclusive partnership with Profound Realtors Dubai to foster investment and development opportunities between Switzerland and the UAE. Known for his strategic vision, and adaptability as well as team management, Larbi Zine-Eddine continues to drive innovation and business growth across multiple industries.

                                    </p>
                                    <h4 class="wow fadeInUp">Featured Listings</h4>
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
                            <div class="col-lg-4">
                                <div class="sidebar">
                                    <div class="sidebar-item sidebar-info">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/geneva/1.jpg') }}" alt="">
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="title">Larbi Zine-Eddine</div>
                                            </li>
                                            <li>
                                                <div class="title">CEO of Geneva Office</div>
                                            </li>
                                            <li>
                                                <div class="title">Mobile:</div>
                                                <p><a href="tel:+971559978609">+41 76 291 35 66</a></p>
                                            </li>
                                            <li>
                                                <div class="title">Office:</div>
                                                <p><a href="tel:+971559978609">+41 22 301 22 44</a></p>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <p><a href="mailto:larbi.zine@profoundrealtors.com">larbi.zine@profoundrealtors.com</a></p>
                                            </li>
                                        </ul>
                                    </div>  
                                    <div class="sidebar-item sidebar-contact-info-1">
                                        <div class="sidebar-title">Contact Us</div>
                                        <div class="contact-info mb-0">
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
                                    <!--<div class="wrap-map-v1">-->
                                    <!--    <div id="map-1" class="row-height" data-map-zoom="16" data-map-scroll="true"></div>-->
                                    <!--</div>                        -->
                                    
                                    <br>
                                    <br>
                                </div>
                            </div>
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