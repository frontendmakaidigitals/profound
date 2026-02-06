@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', $name)
	 @section('pageDescription', $name)
	 @section('pageKeyword', $name)
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
    .sidebar .sidebar-item.sidebar-info .image{
    height: 400px;
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
                <div class="flat-title agency-single">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{$name}}</h2>
                                    <ul class="breadcrumbs">
                                        <li>{{$designation}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /flat-title -->
    
                <!-- agency-single-wrap -->
                <div class="agency-single-wrap">
                    <div class="cl-container">
                        <div class="row column-reverse-mobile">
                            <div class="col-lg-8">
                                <div class="wrap-inner">
                                    <h4 class="wow fadeInUp">About {{$name}}</h4>
                                    
                                        {!! $description !!}
                                    
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
                                                    <div class="price">@if($row->price == '0') {{ $price }} @else AED {{ $price }} @endif</div>
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
                                            <img src="{{ asset('{{$image}}') }}" alt="">
                                        </div>
                                        <ul>
                                            <!--<li>-->
                                            <!--    <div class="title">Address:</div>-->
                                            <!--    <p style="text-align: end;">Office No. 1202, Barsha Heights Tameem  house Office Building, Al Fosool Street </p>-->
                                            <!--</li>-->
                                            <li>
                                                <div class="title">Mobile phone:</div>
                                                <p><a href="tel:{{$contact}}">{{$contact}}</a></p>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <p><a href="mailto:{{$email}}">{{$email}}</a></p>
                                            </li>
                                            @if($languages)
                                            <li>
                                                <div class="title">Languages:</div>
                                                <p>{{$languages}}</p>
                                            </li>
                                            @endif
                                            <li>
                                                <div class="title">Socail</div>
                                                <div class="wg-social style-black">
                                                    <ul class="list-social">
                                                        <li>
                                                            <a href="#">
                                                                <i class="icon-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="icon-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="icon-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="icon-linkedin2"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  
                                    <div class="sidebar-item sidebar-contact-info-1">
                                        <div class="sidebar-title">Contact Me</div>
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
                                    <div class="flex gap20">
                                                    <a href="tel:+971559978609" class="tf-button-primary w-full style-bg-white">Call<i class="flaticon-phone"></i></a>
                                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=971508166803" class="tf-button-primary w-full style-bg-white">WhatsApp<i class="flaticon-whatsapp"></i></a>
                                                </div>
                                </form>
                                        </div>
                                    </div>   
                                    <div class="wrap-map-v1">
                                        <div id="map-1" class="row-height" data-map-zoom="16" data-map-scroll="true"></div>
                                    </div>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /agency-single-wrap -->

            </div>
            <!-- /main-content -->


@endsection