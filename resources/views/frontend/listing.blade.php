@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Listing')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif
@section('content')

<?php
$currency = session()->get('currency');
if (empty($currency)) {
  $currency =  'AED';
}
?>

 <!-- main-content -->
            <div class="main-content pb-0">

            <!-- flat-title -->
            <div class="flat-title page-property-grid-2">
            <div class="cl-container">
            <div class="row">
            <div class="col-12">
            <div class="content">
            <h2 class="wow fadeInUp">All Properties</h2>
            <ul class="breadcrumbs wow fadeInUp">
            <li><a href="index.html">Home</a></li><li>/</li><li>All Properties</li>
            </ul>
            <div class="form-filter wow fadeInUp">
            
            <form id="searchForm" class="form-search-home5 background-secondary wow fadeInUp" action="{{ url('off-plans') }}" method="GET" enctype="multipart/form-data">
                        <div class="list">
                            <div class="group-form form-search-content">
                                <div class="form-style-has-title">
                                    <div class="title">Name</div>
                                    <div class="relative">
                                        <fieldset class="name">
                                             <select name="title" data-placeholder="Property Name" multiple
                                        class="chosen-select appearance-none bg-transparent text-body text-tiny font-light cursor-pointer">
                                       @if(count($searchproperties) > 0)
                                        @foreach($searchproperties as $row)
                                        <option value="{{ $row->title }}">{{ $row->title }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                        </fieldset>
                                        <div class="style-absolute-right">
                                            <div class="style-icon-default"><i class="flaticon-magnifiying-glass"></i></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                                <div class="form-style-has-title">
                                    <div class="title">Status</div>
                                     <select id="dynamic_select"
                                        class="nice-select style-white">
                                        <option selected value="{{ url('off-plans') }}">Select Status</option>
                                        <option value="{{ url('off-plans') }}">All</option>
                                        <option value="{{ url('off-plans') }}">Off-Plan</option>
                                        <option value="{{ url('ready') }}">Ready</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                                <div class="form-style-has-title">
                                    <div class="title">Type</div>
                                    <select name="accommodation[]" id="accommodation" data-placeholder="Property Type" val class="chosen-select" aria-label="Default select example" multiple data-live-search="true">

                                        @foreach($accm as $row)

                                        <option value="{{ $row->id }}">{{ $row->name }}</option>

                                        @endforeach

                                    </select>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="flex gap10">
                            <div class="group-form">
                                <div class="wg-filter">
                                    <div class="tf-button-filter btn-filter" style="background:transparent"><i class="flaticon-filter"></i>Filter</div>
                                    <div class="open-filter filter-no-content" id="a1">
                                        <div>
                                            <div class="grid-3-cols mb-20">

                                               <div class="form-style-has-title">
                                                <select name="neighbourhood[]" data-placeholder="All Neighbourhoods" multiple
                                                    class="chosen-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    @foreach($neighbourhoods as $row)
                                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                               
                                               <div class="form-style-has-title">
                                                <select name="bedroom[]" data-placeholder="No.of Bedrooms" multiple
                                        class="chosen-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option value="0" <?php if(request()->bedroom == '0'){ echo 'selected'; } ?>>
                                            Studio</option>

                                        <option value="1" <?php if(request()->bedroom == 1){ echo 'selected'; } ?>>1
                                            Bedroom</option>

                                        <option value="2" <?php if(request()->bedroom == 2){ echo 'selected'; } ?>>2
                                            Bedrooms</option>

                                        <option value="3" <?php if(request()->bedroom == 3){ echo 'selected'; } ?>>3
                                            Bedrooms</option>

                                        <option value="4" <?php if(request()->bedroom == 4){ echo 'selected'; } ?>>4
                                            Bedrooms</option>

                                        <option value="5" <?php if(request()->bedroom == 5){ echo 'selected'; } ?>>5
                                            Bedrooms</option>

                                        <option value="6" <?php if(request()->bedroom == 6){ echo 'selected'; } ?>>6
                                            Bedrooms</option>

                                        <option value="7" <?php if(request()->bedroom == 7){ echo 'selected'; } ?>>7+
                                            Bedrooms</option>
                                    </select>
                                            </div>

                                                 <div class="form-style-has-title">
                                                <select name="amenities[]" data-placeholder="All Amenities" multiple
                                        class="chosen-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        @foreach($amenities as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                            </div>
                                                
                                            </div>
                                            <div class="grid-3-cols">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Min. Area" class="" name="min_area" tabindex="2" value="" aria-required="true">
                                                </fieldset>
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Max. Area" class="" name="max_area" tabindex="2" value="" aria-required="true">
                                                </fieldset>
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Max. Price" class="" name="maxprice" tabindex="2" value="" aria-required="true">
                                                </fieldset>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="group-form">
                                <div class="button-submit">
                                    <button class="" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>

            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- /flat-title -->

            <!-- property-grid -->
            <div class="property-grid-wrap-v2">
            <div class="cl-container">

            

                    <div class="row">
                        @if(count($properties) > 0) 
                                @foreach($properties as $row)
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
                            <div class="col-xl-4 col-md-6">
                                <div class="box-dream has-border wow fadeInUp">
                                <div class="image">
                                <div class="list-tags">
                                <a href="{{ url('off-plans-property/'.$row->slug) }}" class="tags-item for-sell">Off-Plan</a>
                                <!--<a href="{{ url('off-plans-property/'.$row->slug) }}" class="tags-item featured">FEATURED</a>-->
                                </div>
                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                <div class="swiper-wrapper">
                                @if($row->image)
                                <div class="swiper-slide">
                                <div class="">
                                <img class="" src="{{ asset($row->image) }}" alt="">
                                </div>
                                </div>
                                @endif
                                
                                </div>
                                <div class="swiper-pagination box-dream-pagination"></div>
                                <div class="box-dream-next swiper-button-next"></div>
                                <div class="box-dream-prev swiper-button-prev"></div>
                                </div>
                                </div>
                                <div class="content">
                                <div class="head">
                                <div class="title">
                                <a href="{{ url('off-plans-property/'.$row->slug) }}">{{ \Illuminate\Support\Str::limit($row->title, 35) }}</a>
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
                               
                               <p>
                                        <?php
                                        $address = $row->address;
                                        
                                        if (strlen($address) > 30) {
                                            echo substr($address, 0, 30) . '...';
                                        } else {
                                            echo $address;
                                        }
                                        ?>
                                        </p>
                               
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

                                @if($row->area != 0)
                                <div class="item">
                                <i class="flaticon-minus-front"></i>
                                <p>{{$row->area}}sqft</p>
                                </div>
                                @endif
                                
                                </div>
                                </div>
                                </div>
                            </div>

                            
                            @endforeach
                            @endif

                    </div>

                </div>

            </div>



            </div>
            <!-- /property-grid -->

            </div>
            </div>
            <!-- /main-content -->

@endsection
