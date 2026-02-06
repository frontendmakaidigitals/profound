@extends('frontend.layout.default') @section('pageTitle', 'Home') @section('content')
<style>
.agents img {
    height: auto;
    width: 100%;
    object-fit: cover;
}

.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 95% !important;
}

.swipeProp1 .swiper-pagination-bullet {
    width: 50px;
    height: 4px;
    border-radius: 0;
    background: #DEC093;
    opacity: 1;
}

.videosec {
    width: 100%;
    position: absolute;
    height: 100vh;
    opacity: .8;
}

.video-wrapper {
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

.video-wrapper video {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

.main-banner .container {
    z-index: 1;
}

section.mainBg.main-banner {
    background: #000;
}

.swipeProp1 .swiper-button-prev:after,
.swipeProp1 .swiper-rtl .swiper-button-next:after {
    content: 'prev';
    font-size: 20px;
}

.swipeProp1 .swiper-button-next,
.swiper-rtl .swiper-button-prev {
    right: 45%;
    left: auto;
    top: 95%;
    border-radius: 50%;
    width: 35px;
    height: 35px;
}

.swipeProp1 .swiper-button-prev,
.swiper-rtl .swiper-button-next {
    left: 45%;
    right: auto;
    top: 95%;
    border-radius: 50%;
    width: 35px;
    height: 35px;
}

.swipeProp1 .swiper-button-next:after,
.swiper-rtl .swiper-button-prev:after {
    content: 'next';
    font-size: 20px;
}

@media only screen and (max-width: 768px) {
    .estate-agents {
        background-image: url({{ asset('frontend/assets/images/Mask.webp')
    }
}

) !important;
background-repeat:no-repeat;
background-size:cover;
background-position:center;
min-height:390px !important;

}
.flexBoxMain {
    display: block !important;
    border-radius: 26px !important;
}
.advncSearch input {
    max-width: 100%;
    margin: 0 auto;
}
#searchForm .border-end {
    border-right: 0px solid #a9a9a9!important;
}
.btn-primary {
    background-color: #06112C !important;
    color: #ffffff !important;
    border-color: #06112C !important;
    width: 100%;
    max-width: 95%;
    margin: 0 auto;
    padding: 15px !important;
    margin-bottom: 10px;
}
.advLink.mt-4.d-md-none.d-lg-none.d-sm-block {
    margin-left: 30px;
}
.mainPropForm.d-md-none.d-lg-none.d-sm-block {
    margin-top: 60px;
}

/*.single-query {

    height: 37px !important;

    margin-top: 13px;

    margin-left: 0;

    width: 100%;

    line-height: 18px;

    padding: 10px;

    border-radius: 5px;

    border: 1px solid #ddd !important;

}*/
.btn-mouse {
    position: absolute;
    width: 40px;
    height: 65px;
    bottom: 40px;
    left: calc(50% - 13px);
    -webkit-box-shadow: inset 0 0 0 1px #fff;
    box-shadow: inset 0 0 0 3px #fff;
    border-radius: 25px;
    opacity: 1;
    -webkit-transition: 300ms;
    transition: 300ms;
    z-index: 0;
    color: #fff;
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100% !important;
    border: 1px solid #ddd !important;
}

/*.bootstrap-select>.dropdown-toggle {

    position: relative;

    width: 100%;

    max-width: 100%;

}*/
form#searchForm {
    width: 100%;
    max-width: 85%;
    margin: 0 auto;
    margin-top: 25px !important;
}
.swipeProp1 .swiper-button-next,
.swiper-rtl .swiper-button-prev {
    right: 30%;
}
.swipeProp1 .swiper-button-prev,
.swiper-rtl .swiper-button-next {
    left: 30%;
}

}
.estate-agents {
    background-image: url({{ asset('frontend/assets/images/Mask.webp')
}

}
);
background-repeat:no-repeat;
background-size:cover;
background-position:center;
min-height:96%;

}
</style>
<style>
.your-class,
.developers img {
    width: 100%;
    height: 185px;
}

.full-width .slick-prev {
    margin-left: 40px;
}

.full-width .slick-next {
    margin-right: 40px;
}

.slick-prev:before,
.slick-next:before {
    color: black;
}

.slick-initialized .slick-slide {
    /*background-color: #fff;

  color: #FFF;*/
    height: 200px;
    margin: 0 15px 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
<?php

$currency = session()->get('currency');

if (empty($currency)) {

  $currency =  'AED';

}

?>
<?php $statuses = \App\Models\Status::where('is_active', 1)->orderBy('id', 'DESC')->get(); ?>
    <section class="mainBg main-banner">
        <!--<div class="mainBgOverlay"></div>-->
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="mainPropForm d-md-block d-lg-block d-sm-block">
                        <!--<div class="mainPropForm">-->
                        <form id="searchForm" action="{{ url('off-plans') }}" method="GET" enctype="multipart/form-data">
                            <div class="d-flex flex-row justify-content-center bg-white flexBoxMain align-items-center">
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <div class="single-query form-group">
                                        <div class="intro">
                                           <!--  <input type="hidden" name="status_id" class="status_id" value="5"> -->
                                            <input type="hidden" name="completion_status" class="completion_status" value="2">
                                            <!-- <input type="hidden" name="rent_status" class="rent_status" value="0"> -->
                                            <?php /* ?><div class="dropdown myDrop">
                                                <a class="d-flex justify-content-between align-items-center" onclick="BShameMenu();" role="button" data-toggle="dropdown" data-target="#"> <span class="stat_name">Rent/Buy</span> <span class="caret"></span> </a>
                                                <ul class="dropdown-menu dLabel" role="menu" aria-labelledby="dLabel" id="dLabel">
                                                    <ul role="tablist" class="nav nav-tabs dropNavTab" id="nav-tab">
                                                         @foreach ($statuses as $status)
                                                            <?php $stats = $status->name; ?> @if ($stats == 'Buy' || $stats == 'Rent')
                                                                <li class="nav-link @if ($stats == 'Buy') active @endif" data-bs-toggle="tab" href="#{{ $stats }}"> <a href="#{{ $stats }}" data-toggle="tab" btnId="{{ $stats }}" data-id="{{ $status->id }}" statId="{{ $status->id }}">{{ $stats }}</a> </li> @endif @endforeach 
                                                            </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content myTabCon myTabTyp"> @foreach ($statuses as $status)
                                                        <?php $stats = $status->name; ?> @if ($stats == 'Buy' || $stats == 'Rent')
                                                            <div class="tab-pane @if ($stats == 'Buy') active @endif" id="{{ $stats }}"> @if ($stats == 'Buy')
                                                                <div>
                                                                    <p>Completion Status</p>
                                                                    <div class="">
                                                                        <button type="button" class="btn btn-outline-primary btnSelBuy mb-2" btnById="All">All</button> @foreach ($statuses as $status)
                                                                        <?php $stats = $status->name; ?> @if ($stats == 'Off-Plan' || $stats == 'Ready')
                                                                            <button type="button" class="btn btn-outline-primary btnSelBuy mb-2 @if ($stats == 'Off-Plan') active @endif" btnId="{{ $stats }}" btnById="{{ $status->id }}">{{ $stats }}</button> @endif @endforeach </div>
                                                                </div> @elseif($stats == 'Rent')
                                                                <div>
                                                                    <p>Rent Frequency</p>
                                                                    <div class="">
                                                                        <button type="button" class="btn btn-outline-primary btnSelRnt mb-2" btnId="{{ $stats }}" btnRnId="{{ $status->id }}">Yearly</button>
                                                                    </div>
                                                                </div> @endif </div> @endif @endforeach
                                                            <div class="d-flex justify-content-between">
                                                                <button type="button" class="btn btn-outline mb-2 RestStat">RESET</button>
                                                                <button type="button" class="btn btn-primary mb-2 doneStat">DONE</button>
                                                            </div>
                                                    </div>
                                                </ul>
                                            </div><?php */?>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="status_ids[]" id="status_id" placeholder="All Property Sataus" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true"> 
                                        <option value="5">Sale</option>
                                        <option value="1">Rent</option>
                                        <option value="2">Off-Plan</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="neighbourhood[]" id="neighbourhood" placeholder="All Neighbourhoods" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true"> @foreach($neighbourhoods as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option> @endforeach </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="accommodation[]" id="accommodation" placeholder="Property Type" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        <option value="3">Apartment</option>
                                        <option value="4">Villa</option>
                                        <option value="5">Townhouse</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="bedroom[]" id="bedroom" placeholder="No. of Bedrooms" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        <!--<option value="">No. of Bedrooms</option>-->
                                        <option value="0" <?php if(request()->bedroom == '0'){ echo 'selected'; } ?>>Studio</option>
                                        <option value="1" <?php if(request()->bedroom == 1){ echo 'selected'; } ?>>1 Bedrooms</option>
                                        <option value="2" <?php if(request()->bedroom == 2){ echo 'selected'; } ?>>2 Bedrooms</option>
                                        <option value="3" <?php if(request()->bedroom == 3){ echo 'selected'; } ?>>3 Bedrooms</option>
                                        <option value="4" <?php if(request()->bedroom == 4){ echo 'selected'; } ?>>4 Bedrooms</option>
                                        <option value="5" <?php if(request()->bedroom == 5){ echo 'selected'; } ?>>5 Bedrooms</option>
                                        <option value="6" <?php if(request()->bedroom == 6){ echo 'selected'; } ?>>6 Bedrooms</option>
                                        <option value="7" <?php if(request()->bedroom == 7){ echo 'selected'; } ?>>7+ Bedrooms</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <input type="text" name="minprice" id="minprice" class="form-control" placeholder="Min Price"> </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <input type="text" name="maxprice" id="maxprice" class="form-control" placeholder="Max Price"> </div>
                                <!--<div class="p-2 flex-fill bd-highlight border-end d-flex">
                                </div>-->
                                <!--<div class="flex-fill bd-highlight d-grid">-->
                                <div class="p-2 flex-fill bd-highlight d-grid">
                                    <button name="search" value="search" class="btn btn-primary btnSearch" type="submit">SEARCH</button>
                                </div>
                            </div>
                            <div class="advncSearch" style="display:none;">
                                <div class="advSearClose mt-4" style="display: none;"><a><i class="bi bi-x-square"></i></a> </div>
                                <div class="d-flex flex-row justify-content-center bg-white mt-3 flexBoxMain">
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex adv-select">
                                        <select name="developers[]" id="devlopers" placeholder="All Devlopers" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true"> @foreach($developers as $row)
                                            <option value="{{ $row->id }}">{{ $row->title }}</option> @endforeach </select>
                                    </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex ">
                                        <input type="text" name="min_area" id="area" class="form-control" placeholder="Min area sqft"> </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex ">
                                        <input type="text" name="max_area" id="area" class="form-control" placeholder="Max area sqft"> </div>
                                    <div class="p-2 flex-fill bd-highlight d-flex adv-select">
                                        <select name="furnished" id="furnished" placeholder="Furnished/Unfurnished" class="form-select formSel selectpicker">
                                            <option value="">N/A</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="communitiesDiv mt-3"> @foreach($communities as $row)
                                    <?php $count = getCommunityCount($row->id); ?> @if($count > 0)
                                        <div class="comRdBtn">
                                            <input type="checkbox" name="community[]" id="community_{{$row->id}}" value="{{$row->id}}" />
                                            <label for='community_{{$row->id}}'>{{ $row->name }}({{$count}})</label>
                                        </div> @endif @endforeach </div>
                            </div>
                        </form>
                    </div>
                    <div class="advLink mt-4 d-md-block d-lg-block "><a>Advance Search <i class="bi bi-chevron-down"></i></a> </div>
                </div>
            </div>
        </div>
        <div class="videosec">
            <div class="video-wrapper d-none d-md-block">
                <video autoplay="" loop="" muted="" playsinline="" preload="metadata" src="{{ asset('frontend/assets/videos/Header-Video_live.mov') }}">
                    <source src="{{ asset('frontend/assets/videos/Header-Video_live.mov') }}" type="video/mp4"> </video>
            </div>
            <div class="video-wrapper d-block d-md-none">
                <video autoplay="" loop="" muted="" playsinline="" preload="metadata" src="{{ asset('frontend/assets/videos/home_video_mobile_live.mov') }}">
                    <source src="{{ asset('frontend/assets/videos/home_video_mobile_live.mov') }}" type="video/mp4"> </video>
            </div>
        </div>
        <a href="#scrollto" class="btn-mouse"></a>
    </section>
    <section class="bgMainAll" id="scrollto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="mainPropForm d-none d-md-none d-lg-none d-sm-block">
                        <form id="searchForm" action="{{ url('off-plans') }}" method="GET" enctype="multipart/form-data">
                            <div class="d-flex flex-row justify-content-center bg-white flexBoxMain">
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <div class="single-query form-group">
                                        <div class="intro">
                                            <input type="hidden" name="status_id" class="status_id" value="0">
                                            <input type="hidden" name="completion_status" class="completion_status" value="0">
                                            <input type="hidden" name="rent_status" class="rent_status" value="0">
                                            <div class="dropdown myDrop">
                                                <a onclick="BShameMenu();" role="button" data-toggle="dropdown" data-target="#"> <span class="stat_name">Rent/Buy</span> <span class="caret"></span> </a>
                                                <ul class="dropdown-menu dLabel" role="menu" aria-labelledby="dLabel" id="dLabel">
                                                    <ul role="tablist" class="nav nav-tabs dropNavTab" id="nav-tab">
                                                         @foreach ($statuses as $status)
                                                            <?php $stats = $status->name; ?> @if ($stats == 'Buy' || $stats == 'Rent')
                                                                <li class="nav-link @if ($stats == 'Buy') active @endif" data-bs-toggle="tab" href="#{{ $stats }}"> <a href="#{{ $stats }}" data-toggle="tab" btnId="{{ $stats }}" data-id="{{ $status->id }}" statId="{{ $status->id }}">{{ $stats }}</a> </li> @endif @endforeach </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content myTabCon myTabTyp"> @foreach ($statuses as $status)
                                                        <?php $stats = $status->name; ?> @if ($stats == 'Buy' || $stats == 'Rent')
                                                            <div class="tab-pane @if ($stats == 'Buy') active @endif" id="{{ $stats }}"> @if ($stats == 'Buy')
                                                                <div>
                                                                    <p>Completion Status</p>
                                                                    <div class="">
                                                                        <button type="button" class="btn btn-outline-primary btnSelBuy mb-2" btnById="All">All</button> @foreach ($statuses as $status)
                                                                        <?php $stats = $status->name; ?> @if ($stats == 'Off-Plan' || $stats == 'Ready')
                                                                            <button type="button" class="btn btn-outline-primary btnSelBuy mb-2 @if ($stats == 'Off-Plan') active @endif" btnId="{{ $stats }}" btnById="{{ $status->id }}">{{ $stats }}</button> @endif @endforeach </div>
                                                                </div> @elseif($stats == 'Rent')
                                                                <div>
                                                                    <p>Rent Frequency</p>
                                                                    <div class="">
                                                                        <button type="button" class="btn btn-outline-primary btnSelRnt mb-2" btnId="{{ $stats }}" btnRnId="{{ $status->id }}">Yearly</button>
                                                                    </div>
                                                                </div> @endif </div> @endif @endforeach
                                                            <div class="d-flex justify-content-between">
                                                                <button type="button" class="btn btn-outline mb-2 RestStat">RESET</button>
                                                                <button type="button" class="btn btn-primary mb-2 doneStat">DONE</button>
                                                            </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="neighbourhood[]" id="neighbourhood" placeholder="All Neighbourhoods" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        <!--<option value="">All Neighbourhoods</option>-->@foreach($neighbourhoods as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option> @endforeach </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="accommodation[]" id="accommodation" placeholder="Property Type" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        <!--<option value="">Property Type</option>-->
                                        <option value="3">Apartment</option>
                                        <option value="4">Villa</option>
                                        <option value="5">Townhouse</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="bedroom[]" id="bedroom" placeholder="No. of Bedrooms" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        <!--<option value="">No. of Bedrooms</option>-->
                                        <option value="0" <?php if(request()->bedroom == '0'){ echo 'selected'; } ?>>Studio</option>
                                        <option value="1" <?php if(request()->bedroom == 1){ echo 'selected'; } ?>>1 Bedrooms</option>
                                        <option value="2" <?php if(request()->bedroom == 2){ echo 'selected'; } ?>>2 Bedrooms</option>
                                        <option value="3" <?php if(request()->bedroom == 3){ echo 'selected'; } ?>>3 Bedrooms</option>
                                        <option value="4" <?php if(request()->bedroom == 4){ echo 'selected'; } ?>>4 Bedrooms</option>
                                        <option value="5" <?php if(request()->bedroom == 5){ echo 'selected'; } ?>>5 Bedrooms</option>
                                        <option value="6" <?php if(request()->bedroom == 6){ echo 'selected'; } ?>>6 Bedrooms</option>
                                        <option value="7" <?php if(request()->bedroom == 7){ echo 'selected'; } ?>>7+ Bedrooms</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <input type="text" name="minprice" id="minprice" class="form-control" placeholder="Min Price"> </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <input type="text" name="maxprice" id="maxprice" class="form-control" placeholder="Max Price"> </div>
                                <div class="flex-fill bd-highlight d-grid">
                                    <button name="search" value="search" class="btn btn-primary btnSearch" type="submit">SEARCH</button>
                                </div>
                            </div>
                            <div class="advncSearch" style="display:none;">
                                <div class="advSearClose mt-4" style="display: none;"><a><i class="bi bi-x-square"></i></a> </div>
                                <div class="d-flex flex-row justify-content-center bg-white mt-3 flexBoxMain">
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <select name="developers[]" id="amenities" placeholder="All Devlopers" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true"> @foreach($developers as $row)
                                            <option value="{{ $row->id }}">{{ $row->title }}</option> @endforeach </select>
                                    </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <input type="text" name="min_area" id="area" class="form-control" placeholder="Min area sqft"> </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <input type="text" name="max_area" id="area" class="form-control" placeholder="Max area sqft"> </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <select name="furnished" id="furnished" placeholder="Furnished/Unfurnished" class="form-select formSel selectpicker">
                                            <option value="">N/A</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="communitiesDiv mt-3"> @foreach($communities as $row)
                                    <?php $count = getCommunityCount($row->id); ?> @if($count > 0)
                                        <div class="comRdBtn">
                                            <input type="checkbox" name="community[]" id="community_{{$row->id}}" value="{{$row->id}}" />
                                            <label for='community_{{$row->id}}'>{{ $row->name }}({{$count}})</label>
                                        </div> @endif @endforeach </div>
                            </div>
                        </form>
                    </div>
                    <div class="advLink mt-4 d-none d-sm-none d-md-none d-lg-none d-sm-none"><a>Advance Search <i class="bi bi-chevron-down"></i></a> </div>
                </div>
            </div>
            <div class="row py-5 justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="row py-5 justify-content-center d-lg-block d-md-block d-sm-none d-none">
                        <div class="col-12 col-lg-12">
                            <div class="text-center">
                                <div class="mainHeadingCent  py-2">Latest <span class="secText text-primary">Properties</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-0 justify-content-center d-lg-none d-md-none d-sm-block">
                        <div class="col-12 col-lg-12">
                            <div class="text-center">
                                <div class="mainHeadingCent  py-2">Latest <span class="secText text-primary">Properties</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 latest-options">
                        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" style="z-index: 999;">
                            <nav align="center">
                                <div class="nav nav-tabs border-0 justify-content-center" id="nav-tab" role="tablist">
                                    <button class="filter-button myBtn nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
                                    <button class="filter-button myBtn nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Apartment" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Apartment</button>
                                    <button class="filter-button myBtn nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Villa1" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Villa</button>
                                    <button class="filter-button myBtn nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Townhouse" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Townhouse</button>
                                    <button class="filter-button myBtn nav-link" id="nav-contact-tab"><a href="{{url('off-plans') }}" class="text-white text-decoration-none"> VIEW MORE</a></button>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="tab-content clearfix">
                        <!-- single -->
                        <div class="tab-pane active " tabId="all" id="all">
                            <div class="swiper swipeProp1 py-5">
                                <div class="swiper-wrapper"> @if(count($properties) > 0) @foreach($properties as $row)
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
                                        <div class="swiper-slide">
                                            <div class="card mb-3 bg-white rounded-0 border-0">
                                                <div class="row g-0">
                                                    <div class="col-md-12 my-auto">
                                                        <center> <a href="{{ url('off-plans-property/'.$row->slug) }}">

                                                            <img src="{{ asset($row->image) }}" class="card-img-top propImage rounded-0" alt="{{$row->title}}">

                                                        </a> </center>
                                                        <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Off Plan</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card-body py-2">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="card-text priceText mb-0">@if($row->price == '0') {{ $price }} @else AED {{ $price }} @endif </p>
                                                                <div class="d-flex justify-content-center propDet my-auto"> @if($row->propertyBedrooms->count() > 0)
                                                                    <p><i class="fa fa-bed"></i>{{$row->propertyBedrooms->implode('bedrooms',',')}}</p>@endif @if($row->bathrooms != 0)
                                                                    <p><i class="fa fa-shower"></i> {{$row->bathrooms}}</p>@endif @if($row->area != 0)
                                                                    <p><i class="fa fa-map-o"></i> {{$row->area}}sqft</p>@endif </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="text-start">
                                                                    <p class="card-text propNameText mb-0"> <a class="text-decoration-none " href="{{ url('off-plans-property/'.$row->slug) }}">{{ substr_replace($row->title, "...", 25)}}</a> </p> <small class="text-primary">

                                                                <?php 

                                                                    echo substr_replace($row->address, "...", 35);

                                                                    //$address = explode("-",$row->address);

                                                                    //echo implode(' - ', array_splice($address,0 , 2)); 

                                                                ?>

                                                                </small> </div>
                                                                <div class="d-flex justify-content-center propShare my-auto">
                                                                    <p><i class="bi bi-share-fill"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>@endif @endforeach @endif </div>
                                <div class="btn btn-lg btn-pill swiper-button-prev"></div>
                                <div class="btn btn-lg btn-pill swiper-button-next"></div>
                                <!--<div class="swiper-pagination" style="text-align:center;">-->
                                <!--</div>-->
                            </div>
                        </div>
                        <!-- Appartent Start -->
                        <div class="tab-pane" tabId="all" id="Apartment">
                            <div class="swiper swipeProp1 py-5">
                                <?php 

                                $count = 0;

                                $brk_val=10;

                                ?>
                                    <div class="swiper-wrapper"> @foreach($properties as $property) @if($property->accommodation == 3 && $property->is_crm == 0)
                                        <div class="swiper-slide">
                                            <div class="card mb-3 bg-white rounded-0 border-0">
                                                <div class="row g-0">
                                                    <div class="col-md-12 my-auto">
                                                        <center> <a href="{{ url('off-plans-property/'.$property->slug) }}">

                                                        <img src="{{ asset($property->image) }}"class="card-img-top propImage rounded-0" alt="...">

                                                        </a> </center>
                                                        <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Off Plan</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card-body py-2">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="card-text priceText mb-0">AED {{$property->price}} </p>
                                                                <div class="d-flex justify-content-center propDet my-auto"> @if($property->bedrooms != 0)
                                                                    <p><i class="fa fa-bed"></i> {{$property->bedrooms}}</p>@endif @if($property->bathrooms != 0)
                                                                    <p><i class="fa fa-shower"></i> {{$property->bathrooms}}</p>@endif @if($property->area != 0)
                                                                    <p><i class="fa fa-map-o"></i> {{$property->area}}sqft</p>@endif </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="text-start">
                                                                    <p class="card-text propNameText mb-0"><a class="text-decoration-none " href="{{ url('off-plans-property/'.$property->slug) }}">{{$property->title}}</a> </p> <small class="text-primary">

                                                                    <?php 

                                                                        echo substr_replace($property->address, "...", 40);

                                                                        //$address = explode("-",$property->address);

                                                                        //echo implode(' - ', array_splice($address,0 , 2)); 

                                                                    ?>

                                                                </small> </div>
                                                                <div class="d-flex justify-content-center propShare my-auto">
                                                                    <p><i class="bi bi-share-fill"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  ?> @endif
                                            <?php 

                                    $count++;

                                  if($count == $brk_val){

                                      break;

                                  }

                                    ?> @endforeach </div>
                                    <div class="swiper-pagination" style="text-align:center;"> </div>
                            </div>
                        </div>
                        <!-- Appartment start -->
                        <!-- Villa start -->
                        <div class="tab-pane" tabId="all" id="Villa1">
                            <div class="swiper swipeProp1 py-5">
                                <?php 

                                $count = 0;

                                $brk_val=10;

                                ?>
                                    <div class="swiper-wrapper"> @foreach($properties as $property) @if($property->accommodation == 4 && $property->is_crm == 0) {{--dd($property)--}}
                                        <div class="swiper-slide">
                                            <div class="card mb-3 bg-white rounded-0 border-0">
                                                <div class="row g-0">
                                                    <div class="col-md-12 my-auto">
                                                        <center> <a href="{{ url('off-plans-property/'.$property->slug) }}">

                                                        <img src="{{ asset($property->image) }}"class="card-img-top propImage rounded-0" alt="...">

                                                        </a> </center>
                                                        <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Off Plan</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card-body py-2">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="card-text priceText mb-0">AED {{$property->price}} </p>
                                                                <div class="d-flex justify-content-center propDet my-auto"> @if($property->bedrooms != 0)
                                                                    <p><i class="fa fa-bed"></i> {{$property->bedrooms}}</p>@endif @if($property->bathrooms != 0)
                                                                    <p><i class="fa fa-shower"></i> {{$property->bathrooms}}</p>@endif @if($property->area != 0)
                                                                    <p><i class="fa fa-map-o"></i> {{$property->area}}sqft</p>@endif </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="text-start">
                                                                    <p class="card-text propNameText mb-0"><a class="text-decoration-none " href="{{ url('off-plans-property/'.$property->slug) }}">{{$property->title}}</a> </p> <small class="text-primary">

                                                                    <?php 

                                                                        echo substr_replace($property->address, "...", 40);

                                                                        //$address = explode("-",$property->address);

                                                                        //echo implode(' - ', array_splice($address,0 , 2)); 

                                                                    ?>

                                                                </small> </div>
                                                                <div class="d-flex justify-content-center propShare my-auto">
                                                                    <p><i class="bi bi-share-fill"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  ?> @endif
                                            <?php 

                                    $count++;

                                  if($count == $brk_val){

                                      break;

                                  }

                                    ?> @endforeach </div>
                                    <div class="swiper-pagination" style="text-align:center;"> </div>
                            </div>
                        </div>
                        <!-- Villa end -->
                        <!-- Townhouse start -->
                        <div class="tab-pane" tabId="all" id="Townhouse">
                            <div class="swiper swipeProp1 py-5">
                                <?php 

                                $count = 0;

                                $brk_val=10;

                                ?>
                                    <div class="swiper-wrapper"> @foreach($properties as $property) @if($property->accommodation == 5 && $property->is_crm == 0)
                                        {{dd($property)}}
                                        <div class="swiper-slide">
                                            <div class="card mb-3 bg-white rounded-0 border-0">
                                                <div class="row g-0">
                                                    <div class="col-md-12 my-auto">
                                                        <center> <a href="{{ url('off-plans-property/'.$property->slug) }}">

                                                        <img src="{{ asset($property->image) }}"class="card-img-top propImage rounded-0" alt="...">

                                                        </a> </center>
                                                        <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Off Plan</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card-body py-2">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="card-text priceText mb-0">AED {{$property->price}} </p>
                                                                <div class="d-flex justify-content-center propDet my-auto"> @if($property->bedrooms != 0)
                                                                    <p><i class="fa fa-bed"></i> {{$property->bedrooms}}</p>@endif @if($property->bathrooms != 0)
                                                                    <p><i class="fa fa-shower"></i> {{$property->bathrooms}}</p>@endif @if($property->area != 0)
                                                                    <p><i class="fa fa-map-o"></i> {{$property->area}}sqft</p>@endif </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="text-start">
                                                                    <p class="card-text propNameText mb-0"><a class="text-decoration-none " href="{{ url('off-plans-property/'.$property->slug) }}">{{$property->title}}</a> </p> <small class="text-primary">

                                                                    <?php 

                                                                        echo substr_replace($property->address, "...", 40);

                                                                        //$address = explode("-",$property->address);

                                                                        //echo implode(' - ', array_splice($address,0 , 2)); 

                                                                    ?>

                                                                </small> </div>
                                                                <div class="d-flex justify-content-center propShare my-auto">
                                                                    <p><i class="bi bi-share-fill"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  ?> @endif
                                            <?php 

                                    $count++;

                                  if($count == $brk_val){

                                      break;

                                  }

                                    ?> @endforeach </div>
                                    <div class="swiper-pagination" style="text-align:center;"> </div>
                            </div>
                        </div>
                        <!-- Townhouse end -->
                    </div>
                </div>
            </div>
            <div class="row py-5 justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="row py-5 justify-content-center d-lg-block d-md-block d-sm-none d-none">
                    <div class="col-12 col-lg-12">
                        <div class="text-center">
                            <div class="mainHeadingCent  py-2">Featured <span class="secText text-primary">listings</span> </div>
                        </div>
                    </div>
                </div>
                <div class="row py-0 justify-content-center d-lg-none d-md-none d-sm-block">
                    <div class="col-12 col-lg-12">
                        <div class="text-center">
                            <div class="mainHeadingCent  py-2">Featured <span class="secText text-primary">listings</span> </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 latest-options">
                    <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" style="z-index: 999;">
                        <nav align="center">
                            <div class="nav nav-tabs border-0 justify-content-center" id="nav-tab" role="tablist">
                                <button class="filter-button myBtn nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#all_one" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
                                <button class="filter-button myBtn nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Apartment_one" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Apartment</button>
                                <button class="filter-button myBtn nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Villa_one" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Villa</button>
                                <button class="filter-button myBtn nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Penthouse_one" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Penthouse</button>
                                <button class="filter-button myBtn nav-link" id="nav-contact-tab"><a href="{{url('featured-listings') }}" class="text-white text-decoration-none"> VIEW MORE</a></button>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="tab-content clearfix">
                    <!-- single -->
                    <div class="tab-pane active " tabId="all" id="all_one">
                        <div class="swiper swipeProp1 py-5">
                            <div class="swiper-wrapper"> @if(count($properties) > 0) 
                                @foreach($properties as $row)
                                @if($row->is_crm == 1)
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
                                    <div class="swiper-slide">
                                        <div class="card mb-3 bg-white rounded-0 border-0">
                                            <div class="row g-0">
                                                <div class="col-md-12 my-auto">
                                                    <center> <a href="{{ url('off-plans-property/'.$row->slug) }}">

                                                        <img src="{{ asset($row->image) }}" class="card-img-top propImage rounded-0" alt="{{$row->title}}">

                                                    </a> </center>
                                                    @if($row->status =='8')
                                                    <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Completed</button>
                                                    @endif
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card-body py-2">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="card-text priceText mb-0">@if($row->price == '0') {{ $price }} @else AED {{ $price }} @endif </p>
                                                            <div class="d-flex justify-content-center propDet my-auto"> @if($row->bedrooms != 0)
                                                                <p><i class="fa fa-bed"></i> {{$row->bedrooms}}</p>@endif @if($row->bathrooms != 0)
                                                                <p><i class="fa fa-shower"></i> {{$row->bathrooms}}</p>@endif @if($row->area != 0)
                                                                <p><i class="fa fa-map-o"></i> {{$row->area}}sqft</p>@endif </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="text-start">
                                                                <p class="card-text propNameText mb-0"> <a class="text-decoration-none " href="{{ url('off-plans-property/'.$row->slug) }}">{{ substr_replace($row->title, "...", 65)}}</a> </p> <small class="text-primary">

                                                            <?php 

                                                                echo substr_replace($row->address, "", 65);

                                                                //$address = explode("-",$row->address);

                                                                //echo implode(' - ', array_splice($address,0 , 2)); 

                                                            ?>

                                                            </small> </div>
                                                            <div class="d-flex justify-content-center propShare my-auto">
                                                                <p><i class="bi bi-share-fill"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> @endif @endforeach @endif </div>
                            <div class="btn btn-lg btn-pill swiper-button-prev"></div>
                            <div class="btn btn-lg btn-pill swiper-button-next"></div>
                            <!--<div class="swiper-pagination" style="text-align:center;">-->
                            <!--</div>-->
                        </div>
                    </div>
                    <!-- Appartent Start -->
                    <div class="tab-pane" tabId="all" id="Apartment_one">
                        <div class="swiper swipeProp1 py-5">
                            <?php 

                            $count = 0;

                            $brk_val=10;

                            ?>
                                <div class="swiper-wrapper"> @foreach($properties as $property) @if($property->accommodation == 3 && $property->is_crm == 1)
                                    <div class="swiper-slide">
                                        <div class="card mb-3 bg-white rounded-0 border-0">
                                            <div class="row g-0">
                                                <div class="col-md-12 my-auto">
                                                    <center> <a href="{{ url('off-plans-property/'.$property->slug) }}">

                                                    <img src="{{ asset($property->image) }}"class="card-img-top propImage rounded-0" alt="...">

                                                    </a> </center>
                                                    @if($property->status =='8')
                                                    <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Completed</button>
                                                    @endif
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card-body py-2">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="card-text priceText mb-0">AED {{$property->price}} </p>
                                                            <div class="d-flex justify-content-center propDet my-auto"> @if($property->bedrooms != 0)
                                                                <p><i class="fa fa-bed"></i> {{$property->bedrooms}}</p>@endif @if($property->bathrooms != 0)
                                                                <p><i class="fa fa-shower"></i> {{$property->bathrooms}}</p>@endif @if($property->area != 0)
                                                                <p><i class="fa fa-map-o"></i> {{$property->area}}sqft</p>@endif </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="text-start">
                                                                <p class="card-text propNameText mb-0"><a class="text-decoration-none " href="{{ url('off-plans-property/'.$property->slug) }}">{{$property->title}}</a> </p> <small class="text-primary">

                                                                <?php 

                                                                    echo substr_replace($property->address, "", 65);

                                                                    //$address = explode("-",$property->address);

                                                                    //echo implode(' - ', array_splice($address,0 , 2)); 

                                                                ?>

                                                            </small> </div>
                                                            <div class="d-flex justify-content-center propShare my-auto">
                                                                <p><i class="bi bi-share-fill"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  ?> @endif
                                        <?php 

                                $count++;

                              if($count == $brk_val){

                                  break;

                              }

                                ?> @endforeach </div>
                                <div class="swiper-pagination" style="text-align:center;"> </div>
                        </div>
                    </div>
                    <!-- Appartment start -->
                    <!-- Villa start -->
                    <div class="tab-pane" tabId="all" id="Villa_one">
                        <div class="swiper swipeProp1 py-5">
                            <?php 

                            $count = 0;

                            $brk_val=10;

                            ?>
                                <div class="swiper-wrapper"> @foreach($properties as $property) @if($property->accommodation == 4 && $property->is_crm == 1) {{--dd($property)--}}
                                    <div class="swiper-slide">
                                        <div class="card mb-3 bg-white rounded-0 border-0">
                                            <div class="row g-0">
                                                <div class="col-md-12 my-auto">
                                                    <center> <a href="{{ url('off-plans-property/'.$property->slug) }}">

                                                    <img src="{{ asset($property->image) }}"class="card-img-top propImage rounded-0" alt="...">

                                                    </a> </center>
                                                    @if($property->status =='8')
                                                    <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Completed</button>
                                                    @endif
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card-body py-2">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="card-text priceText mb-0">AED {{$property->price}} </p>
                                                            <div class="d-flex justify-content-center propDet my-auto"> @if($property->bedrooms != 0)
                                                                <p><i class="fa fa-bed"></i> {{$property->bedrooms}}</p>@endif @if($property->bathrooms != 0)
                                                                <p><i class="fa fa-shower"></i> {{$property->bathrooms}}</p>@endif @if($property->area != 0)
                                                                <p><i class="fa fa-map-o"></i> {{$property->area}}sqft</p>@endif </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="text-start">
                                                                <p class="card-text propNameText mb-0"><a class="text-decoration-none " href="{{ url('off-plans-property/'.$property->slug) }}">{{$property->title}}</a> </p> <small class="text-primary">

                                                                <?php 

                                                                    echo substr_replace($property->address, "", 65);

                                                                    //$address = explode("-",$property->address);

                                                                    //echo implode(' - ', array_splice($address,0 , 2)); 

                                                                ?>

                                                            </small> </div>
                                                            <div class="d-flex justify-content-center propShare my-auto">
                                                                <p><i class="bi bi-share-fill"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  ?> @endif
                                        <?php 

                                $count++;

                              if($count == $brk_val){

                                  break;

                              }

                                ?> @endforeach </div>
                                <div class="swiper-pagination" style="text-align:center;"> </div>
                        </div>
                    </div>
                    <!-- Villa end -->
                    <!-- Townhouse start -->
                    <div class="tab-pane" tabId="all" id="Penthouse_one">
                        <div class="swiper swipeProp1 py-5">
                            <?php 

                            $count = 0;

                            $brk_val=10;

                            ?>
                                <div class="swiper-wrapper"> @foreach($properties as $property) @if($property->accommodation == 6 && $property->is_crm == 1)
                                    <div class="swiper-slide">
                                        <div class="card mb-3 bg-white rounded-0 border-0">
                                            <div class="row g-0">
                                                <div class="col-md-12 my-auto">
                                                    <center> <a href="{{ url('off-plans-property/'.$property->slug) }}">

                                                    <img src="{{ asset($property->image) }}"class="card-img-top propImage rounded-0" alt="...">

                                                    </a> </center>
                                                    @if($property->status =='8')
                                                    <button class="btn btn-pill btnType mb-0" style="font-size:11px;">Completed</button>
                                                    @endif
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card-body py-2">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="card-text priceText mb-0">AED {{$property->price}} </p>
                                                            <div class="d-flex justify-content-center propDet my-auto"> @if($property->bedrooms != 0)
                                                                <p><i class="fa fa-bed"></i> {{$property->bedrooms}}</p>@endif @if($property->bathrooms != 0)
                                                                <p><i class="fa fa-shower"></i> {{$property->bathrooms}}</p>@endif @if($property->area != 0)
                                                                <p><i class="fa fa-map-o"></i> {{$property->area}}sqft</p>@endif </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="text-start">
                                                                <p class="card-text propNameText mb-0"><a class="text-decoration-none " href="{{ url('off-plans-property/'.$property->slug) }}">{{$property->title}}</a> </p> <small class="text-primary">

                                                                <?php 

                                                                    echo substr_replace($property->address, "", 65);

                                                                    //$address = explode("-",$property->address);

                                                                    //echo implode(' - ', array_splice($address,0 , 2)); 

                                                                ?>

                                                            </small> </div>
                                                            <div class="d-flex justify-content-center propShare my-auto">
                                                                <p><i class="bi bi-share-fill"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  ?> @endif
                                        <?php 

                                $count++;

                              if($count == $brk_val){

                                  break;

                              }

                                ?> @endforeach </div>
                                <div class="swiper-pagination" style="text-align:center;"> </div>
                        </div>
                    </div>
                    <!-- Townhouse end -->
                </div>
            </div>
        </div>
            <div class="container d-none d-md-block">
                <div class="row py-5">
                    <div class="col-12 col-lg-12 my-auto">
                        <div class="d-flex justify-content-between my-auto">
                            <div class="mainHeadingCent  py-2">Our <span class="secTextShort text-primary">Team</span> </div>
                            <div class="my-auto  position-relative">
                                <div class="swiper-button-prev-unique"><i class="bi bi-arrow-left"></i></div>
                                <div class="swiper-button-next-unique"><i class="bi bi-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="bg-black position-relative agents d-none d-md-block">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="swiper swipeTeam pb-2" style="background: #DEC093;">
                        <div class="swiper-wrapper"> @foreach($agents as $agent)
                            <div class="swiper-slide teamSwipe"> <img src="{{ $agent->image }} " class="img-fluid" alt="slider">
                                <div class="imgHover">
                                    <div class="imgHovrText">
                                        <div class="mb-5">
                                            <h5 class="mb-0">{{ $agent->first_name }}</h5>
                                            <p>{{ $agent->designation }}</p>
                                            <p>{{ $agent->whatsapp }}</p>
                                        </div>
                                        <!--<div>-->
                                        <!--    <p class="mb-0">Languages Spoken-->
                                        <!--    </p><small class="text-primary">{{$agent->languages}}</small>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div> @endforeach </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-black">
        <div class="container bestCont">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-6 my-auto">
                            <div>
                                <div class="mainHeadingCent pb-2">We are the Best and Most Trusted <span class="secText text-primary">Real Estate Agents</span></div>
                                <div class="mainDesc py-2">
                                    <div class="d-flex justify-content-start py-4 pe-3">
                                        <div class="my-auto1"> <img src="{{ asset('frontend/assets/images/buy.png') }}" alt="" class="img-fluid pe-3 w-100"> </div>
                                        <div class="my-auto text-white">
                                            <h4 class="text-primary">Buy a Home</h4>
                                            <h5>Browse from millions of best properties in your city, save your favorites, and set up search alerts.</h5> </div>
                                    </div>
                                    <div class="d-flex justify-content-start py-4 pe-3">
                                        <div class="my-auto1"> <img src="{{ asset('frontend/assets/images/rent.png') }}" alt="" class="img-fluid pe-3 w-100"> </div>
                                        <div class="my-auto text-white">
                                            <h4 class="text-primary">Rent a Home</h4>
                                            <h5>Communicate directly with the advertiser and get verified leads with us.</h5> </div>
                                    </div>
                                    <div class="d-flex justify-content-start py-4 pe-3">
                                        <div class="my-auto1"> <img src="{{ asset('frontend/assets/images/sell.png') }}" alt="" class="img-fluid pe-3 w-100"> </div>
                                        <div class="my-auto text-white">
                                            <h4 class="text-primary">Sell a Home</h4>
                                            <h5>Are you looking to sell your home? In just a few steps, you can find the best buyer for your property.</h5> </div>
                                    </div>
                                    <div class="d-flex justify-content-start py-4">
                                        <div class="col-12">
                                            <button class="btn btn-secondary" id="getCalendarModalhome">BOOK YOUR SLOT NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-1"></div>
                        <div class="col-12 col-lg-5">
                            <div class="estate-agents"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="communities d-blok d-md-none {{url()->current()}}">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-12 col-12">
                    <div class="row g-0">
                        <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery1.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                            <a href="{{ url('listing?communitieslists[]='.$communities[3]->slug)}}">
                                <div class="ratio ratio-1x1 ratio-lifestyle"> <img src="{{ asset($communities[3]->image) }}" />
                                    <h2> {{ $communities[3]->name  }} </h2> </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery2.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                            <a href="{{ url('listing?communitieslists[]='.$communities[1]->slug) }}">
                                <div class="ratio ratio-1x1 ratio-lifestyle"> <img src="{{ asset($communities[1]->image) }}" />
                                    <h2> {{ $communities[1]->name  }} </h2> </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery3.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                            <a href="{{ url('listing?communitieslists[]='.$communities[2]->slug) }}">
                                <div class="ratio ratio-1x1 ratio-lifestyle">
                                    <!--<img src="{{ asset($communities[1]->image) }}"/>--><img src="{{ asset($communities[2]->image) }}" />
                                    <h2> {{ $communities[2]->name  }} </h2> </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery4.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                            <a href="{{ url('listing?communitieslists[]='.$communities[0]->slug) }}">
                                <div class="ratio ratio-1x1 ratio-lifestyle"> <img src="{{ asset($communities[0]->image) }}" />
                                    <h2> {{ $communities[0]->name  }} </h2> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bgMainAllRotate">
        <div class="container bestCont" style="padding-top:125px;">
            <div class="row">
                <div class="col-12 col-lg-12 my-auto text-center">
                    <div>
                        <div class="mainHeadingCent pb-2">Eligibility and Perks for<span class="secText text-primary">

                                Golden Visa</span></div>
                        <!--<h5 class="text-white">10-year renewable residency granted to exceptional talent & investors</h5>--></div>
                </div>
                <div class="col-12 col-lg-12 py-5">
                    <div class="row">
                        <div class="col-12 col-lg-4 my-auto">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-10 col-4">
                                    <div class="text-center py-3">
                                        <div class="">
                                            <center><img src="{{ asset('frontend/assets/images/group1.png') }}" alt="" class="img-fluid" width="100px"></center>
                                        </div>
                                        <div class="my-auto text-white">
                                            <!--<h5>10-year renewable residency granted to exceptional talent & investors</h5>-->
                                            <h5>Get access to a 10-year renewable residency</h5> </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-4">
                                    <div class="text-center py-3">
                                        <div class="">
                                            <center><img src="{{ asset('frontend/assets/images/group1.png') }}" alt="" class="img-fluid" width="100px"></center>
                                        </div>
                                        <div class="my-auto text-white">
                                            <!--<h5>No age limit for residency of family members</h5>-->
                                            <h5>No age limit for residency of family members</h5> </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-4">
                                    <div class="text-center py-3">
                                        <div class="">
                                            <center><img src="{{ asset('frontend/assets/images/group1.png') }}" alt="" class="img-fluid" width="100px"></center>
                                        </div>
                                        <div class="my-auto text-white">
                                            <h5>No limit on maximum stay duration outside UAE</h5> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 my-auto">
                            <div class="">
                                <center><img src="{{ asset('frontend/assets/images/golden.png') }}" alt="" class="img-fluid middle-image"> </center>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 my-auto">
                            <div class="row g-4">
                                <div class="col-lg-10 col-4">
                                    <div class="text-center py-3">
                                        <div class="">
                                            <center><img src="{{ asset('frontend/assets/images/group1.png') }}" alt="" class="img-fluid" width="100px"></center>
                                        </div>
                                        <div class="my-auto text-white">
                                            <h5>No sponsor or employer is required to apply.</h5> </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-4">
                                    <div class="text-center py-3">
                                        <div class="">
                                            <center><img src="{{ asset('frontend/assets/images/group1.png') }}" alt="" class="img-fluid" width="100px"></center>
                                        </div>
                                        <div class="my-auto text-white">
                                            <!--<h5>No maximum number of support service laborers</h5>-->
                                            <h5>No maximum number of support service laborers</h5> </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-4">
                                    <div class="text-center py-3">
                                        <div class="">
                                            <center><img src="{{ asset('frontend/assets/images/group1.png') }}" alt="" class="img-fluid" width="100px"></center>
                                        </div>
                                        <div class="my-auto text-white">
                                            <h5>Entry visa valid for 6 months with multiple entries</h5> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="developer mb-none">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-12 my-auto">
                    <div class="d-flex justify-content-center my-auto">
                        <div class="mainHeadingCent  text-primary">Our Partners</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="container">
                        <div class="developers">
                            <?php

                    // if(count($property->imagegalleries) > 0){

                    ?> @foreach($developers as $row)
                                <div class="">
                                    <a href="{{ asset($row->dev_logo) }}"> <img src="{{ asset($row->dev_logo) }}"> </a>
                                </div> @endforeach
                                <?php


                    ?>
                                    <?php

                    ?>
                        </div>
                    </div>
                    <!--new slider end -->
                </div>
            </div>
        </div>
    </section>
    <section class="developer dt-none">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-12 my-auto">
                    <div class="d-flex justify-content-center my-auto">
                        <div class="mainHeadingCent  text-primary">Our Partners</div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 col-12">
                    <div class="devlopers pb-2" style="background: #fff;"> @foreach($developers as $row )
                        <div class="devSwipe">
                            <center><img src="{{ $row->dev_logo }}" alt="{{ $row->title }}" width="120" class="img-fluid"> </center>
                        </div> @endforeach </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-black position-relative agents d-block d-md-none d-lg-none">
        <div class="container d-block d-md-none">
            <div class="row py-5">
                <div class="col-12 col-lg-12 my-auto">
                    <div class="d-flex justify-content-between my-auto">
                        <div class="mainHeadingCent  py-2">Our <span class="secTextShort text-primary">Team</span> </div>
                        <div class="my-auto position-relative">
                            <div class="swiper-button-prev-unique"><i class="bi bi-arrow-left"></i></div>
                            <div class="swiper-button-next-unique"><i class="bi bi-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pb-4">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="swiper swipeTeam pb-2" style="background: #DEC093;">
                        <div class="swiper-wrapper"> @foreach($agents as $agent)
                            <div class="swiper-slide teamSwipe"> <img src="{{ $agent->image }} " class="img-fluid" alt="slider">
                                <div class="imgHover">
                                    <div class="imgHovrText">
                                        <div class="mb-5">
                                            <h5 class="mb-0">{{ $agent->first_name }}</h5>
                                            <p>{{ $agent->designation }}</p>
                                            <p>{{ $agent->whatsapp }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div> @endforeach </div>
                    </div>
                </div>
            </div>
        </div>
    </section> @endsection