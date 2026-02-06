@extends('frontend.layout.default')

@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'All Properties')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif

@section('content')

<style>

.propNameText a{

    color: #212529;

}
.page-item:first-child .page-link {
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
}
.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
    border-color: #dee2e6;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #DEC093;
    border-color: #DEC093;
}
.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    justify-content: center;
}
/*.mainBgOverlay {

    background: #000;

    position: absolute;

    z-index: 555;

    width: 100%;

    height: 100vh;

    opacity: .5;

}

.mainBg {

    position: relative;

    background: url('{{ asset('frontend/assets/images/image-2.png') }}');

    background-repeat: no-repeat;

    background-position: center;

    background-size: cover;

    width: 100%;

    height: 100vh;

    display: flex;

    justify-content: center;

    background-blend-mode: multiply;

}*/

h1.display-5 {

    position: absolute;

    z-index: 666;

    left: 50%;

    transform: translate(-50%, 10px);

}

.breadcrumb {

    display: flex;

    flex-wrap: wrap;

    padding: 0 0;

    margin-bottom: 1rem;

    list-style: none;

    position: absolute;

    z-index: 666;

    left: 50%;

    transform: translate(-50%, -60%);

    top: 65%;

}

.breadcrumb-item a {

    color: #fff;

    text-decoration: none;

}

.item li::marker{

    color:#DEC093 !important;

  font-weight: bold;

  display: inline-block; 

  width: 1em;

  margin-left: -1em;

} 



.breadcrumb-item.active {

    color: #fff;

}

.missionImg img {

    width: 100%;

    max-width: 80%;

}

.mainimg img {

    max-width: 1240px;

    margin: 0 auto;

}

.mainHeadingCent .secText::after {

    position: absolute;

    right: 0;

    width: 10vw;

    display: block;

    content: '';

    height: 3px;

    margin: auto;

    border-bottom: #DEC093 solid 5px;

    border-radius: 25vw / 7vh;

}

span.bi.bi-quote {

    font-size: 50px;

}

.mr-10 {

    margin-right: 30px;

}

.borderBotFoot {

    border-bottom: 1.5px solid #DEC093;

}

.btn-default {

    background-color: transparent;

    border: 2px solid #ebeef5 !important;

    color: #ebeef5!important;

    outline: 0 !important;

    box-shadow: 0 0 0 0 rgb(13 110 253 / 25%) !important;

    padding: 10px 20px;

}

.btn-light {

    padding: 10px 20px;

}

.btn-secondary {

    background-color: #DEC093 !important;

    color: #06112C !important;

    border-color: #DEC093 !important;

    border-radius: 5px !important;

    padding: 10px 30px;

}

.mr-2 {

    margin-right: 2rem;

}

/*ul.item {list-style-type: circle;}*/

.propImage {
    height: 250px;
    object-fit: cover;
}

</style>

<?php
$currency = session()->get('currency');
if (empty($currency)) {
  $currency =  'AED';
}
?>

    <!--<section class="mainBg">

        <div class="mainBgOverlay"></div>

        <div class="container my-auto">

            <div class="row">

                <div class="col-12 col-lg-12">

                    <div class="text-center text-white">

                        <h1 class="display-5 text-white text-center">Ready</h1>

                        <nav aria-label="breadcrumb">

                          <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Ready</li>

                          </ol>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

        

    </section>-->

    <section class="mainBg" style="background:url('{{!empty($banner) ? $banner->image :  asset('frontend/assets/images/property/img_1647490856.jpg')}}')">

        <!--<div class="mainBgOverlay"></div>-->

        <div class="container my-auto">

            <div class="row">

                <div class="col-12 col-lg-12">

                    <div class="mainPropForm">

                        <form id="searchForm" action="" method="GET" enctype="multipart/form-data">

                            <div class="row d-flex flex-row justify-content-center flexBoxMain">



                                <div class="col-12 col-lg-2 p-1 flex-fill bd-highlight border-end d-flex  my-auto">

                                    <div class="single-query form-group">

                                        <div class="intro form-select formSel">

                                            <input type="hidden" name="status_id" class="status_id" value="5">

                                            <input type="hidden" name="completion_status" class="completion_status" value="8">

                                            <input type="hidden" name="rent_status" class="rent_status" value="0">

                                            <div class="dropdown  pe-1 myDrop">

                                                <a onclick="BShameMenu();" role="button" data-toggle="dropdown" data-target="#" class="d-flex justify-content-between align-items-center">

                                                    <span class="stat_name">Rent/Buy</span> <span class="caret"></span>

                                                </a>

                                                <ul class="dropdown-menu dLabel" role="menu" aria-labelledby="dLabel" id="dLabel">

                                                    <!--ul role="tablist" class="nav nav-tabs dropNavTab" id="nav-tab">

                                                        <?php 

                                                            $statuses = \App\Models\Status::where('is_active', 1)

                                                            ->orderBy('id', 'DESC')

                                                            ->get(); 

                                                        ?>

                                                        @foreach ($statuses as $status)

                                                            <?php $stats = $status->name; ?>

                                                            @if ($stats == 'Buy' || $stats == 'Rent')

                                                                <li class="nav-link @if ($stats == 'Buy') active @endif" data-bs-toggle="tab" href="#{{ $stats }}">



                                                                    <a href="#{{ $stats }}" data-toggle="tab" btnId="{{ $stats }}" data-id="{{ $status->id }}" statId="{{ $status->id }}">{{ $stats }}</a>



                                                                </li>

                                                            @endif



                                                        @endforeach



                                                    </ul-->

                                                    <!-- Tab panes -->

                                                    <div class="tab-content myTabCon myTabTyp">

                                                        @foreach ($statuses as $status)

                                                            <?php $stats = $status->name; ?>

                                                            @if ($stats == 'Buy' || $stats == 'Rent')

                                                                

                                                                <div class="tab-pane @if ($stats == 'Buy') active @endif" id="{{ $stats }}">



                                                                    @if ($stats == 'Buy')

                                                                        <div>

                                                                            <p>Completion Status</p>

                                                                            <div class="">

                                                                                <button type="button" class="btn btn-outline-primary btnSelBuy mb-2" btnById="All">All</button>

                                                                                 @foreach ($statuses as $status)

                                                                                <?php $stats = $status->name; ?>

                                                                                @if ($stats == 'Off-Plan' || $stats == 'Ready')

                                                                                <button type="button" class="btn btn-outline-primary btnSelBuy mb-2 @if ($stats == 'Ready') active @endif" btnId="{{ $stats }}" btnById="{{ $status->id }}">{{ $stats }}</button>

                                                                                @endif

                                                                                @endforeach

                                                                            </div>

                                                                        </div>

                                                                    @elseif($stats == 'Rent')

                                                                        <div>

                                                                            <p>Rent Frequency</p>

                                                                            <div class="">

                                                                                <button type="button" class="btn btn-outline-primary btnSelRnt mb-2" btnId="{{ $stats }}" btnRnId="{{ $status->id }}">Yearly</button>

                                                                            </div>

                                                                        </div>

                                                                    @endif

                                                                </div>

                                                            @endif

                                                        @endforeach

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

                                <div class="col-12 col-lg-2 p-1 flex-fill bd-highlight border-end d-flex formMul my-auto">

                                    <select name="neighbourhood[]" id="neighbourhood" placeholder="All Neighbourhoods" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">

                                        <!--<option value="">All Neighbourhoods</option>-->

                                        @foreach($neighbourhoods as $row)

                                        <option value="{{ $row->id }}" <?php if(!empty(request()->neighbourhood) && in_array($row->id,request()->neighbourhood)){ echo 'selected'; } ?>>{{ $row->name }}</option>

                                        @endforeach

                                    </select>

                                </div>

                                <div class="col-12 col-lg-2 p-1 flex-fill bd-highlight border-end d-flex formMul my-auto">

                                    <select name="accommodation[]" id="accommodation" placeholder="Property Type" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">

                                        <!--<option value="">Property Type</option>-->

                                        @foreach($accommodataion as $row)

                                        <option value="{{ $row->id }}"<?php if(!empty(request()->accommodation) && in_array($row->id,request()->accommodation)){ echo 'selected'; } ?>>{{ $row->name }}</option>

                                        @endforeach

                                    </select>

                                </div>

                                <div class="col-12 col-lg-2 p-1 flex-fill bd-highlight border-end d-flex formMul my-auto">

                                    <select name="bedroom[]" id="bedroom" placeholder="No. of Bedrooms" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true"> 

                                       <option value="0" <?php if(!empty(request()->bedroom) && in_array(0,request()->bedroom)){ echo 'selected'; } ?>>Studio</option>

                                        <option value="1" <?php if(!empty(request()->bedroom) && in_array(1,request()->bedroom)){ echo 'selected'; } ?>>1 Bedroom</option>

                                        <option value="2" <?php if(!empty(request()->bedroom) && in_array(2,request()->bedroom)){ echo 'selected'; } ?>>2 Bedrooms</option>

                                        <option value="3" <?php if(!empty(request()->bedroom) && in_array(3,request()->bedroom)){ echo 'selected'; } ?>>3 Bedrooms</option>

                                        <option value="4" <?php if(!empty(request()->bedroom) && in_array(4,request()->bedroom)){ echo 'selected'; } ?>>4 Bedrooms</option>

                                        <option value="5" <?php if(!empty(request()->bedroom) && in_array(5,request()->bedroom)){ echo 'selected'; } ?>>5 Bedrooms</option>

                                        <option value="6" <?php if(!empty(request()->bedroom) && in_array(6,request()->bedroom)){ echo 'selected'; } ?>>6 Bedrooms</option>

                                        <option value="7" <?php if(!empty(request()->bedroom) && in_array(7,request()->bedroom)){ echo 'selected'; } ?>>7+ Bedrooms</option>

                                    </select>

                                </div>

                                <div class="col-12 col-lg-1 p-1 flex-fill bd-highlight border-end d-flex my-auto">

                                    <input type="number" name="minprice" id="minprice" class="form-control" placeholder="Min Price" >

                                </div>

                                <div class="col-12 col-lg-1 p-1 flex-fill bd-highlight border-end d-flex my-auto">

                                    <input type="number" name="maxprice" id="maxprice" class="form-control" placeholder="Max Price">

                                </div>

                                

                                <div class="col-12 col-lg-2 p-1 flex-fill bd-highlight d-grid">

                                    <button name="search" value="search" class="btn btn-primary btnSearch" type="submit">SEARCH</button>

                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                        <div class="advLink mt-4"><a>Advanced Search <i class="bi bi-chevron-down"></i></a> </div>
                        <div class="advSearClose mt-4 mb-1" style="display: none;"><a><i class="bi bi-x-square"></i></a>

                                </div>
                        <div class="resetBtn mt-4 text-white"><a href="{{url('all-properties')}}" class="text-white">Reset</a></div>
                    </div>

                            <div class="advncSearch" style="display:none;">

                                

                                <div class="row d-flex flex-row justify-content-center mt-3 flexBoxMain">

                                    <div class="col-12 col-lg-3 p-1 flex-fill bd-highlight border-end d-flex my-auto">

                                        <select name="amenities[]" id="amenities" placeholder="Amenities" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">

                                            @foreach($amenities as $row)

                                            <option value="{{ $row->id }}" <?php if(!empty(request()->amenities) && in_array($row->id,request()->amenities)){ echo 'selected'; } ?>>{{ $row->name }}</option>

                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="col-12 col-lg-3 p-1 flex-fill bd-highlight border-end d-flex formMul my-auto">

                                        <select name="furnished" id="furnished" placeholder="Furnished / Unfurnished"  class="form-select formSel selectpicker">

                                            <option value="">N/A</option>

                                            <option value="Furnished"<?php if(request()->furnished == 'Furnished'){ echo 'selected'; } ?>>Furnished</option>

                                            <option value="Unfurnished"<?php if(request()->furnished == 'Unfurnished'){ echo 'selected'; } ?>>Unfurnished</option>

                                        </select>

                                    </div>

                                    <div class="col-12 col-lg-3 p-1 flex-fill bd-highlight border-end d-flex my-auto">

                                        <input type="number" name="min_area" id="area" class="form-control" placeholder="Min area sq.ft">

                                    </div>

                                    <div class="col-12 col-lg-3 p-1 flex-fill bd-highlight d-flex my-auto">

                                        <input type="number" name="max_area" id="area" class="form-control" placeholder="Max area sq.ft">

                                    </div>

                                </div>

                                 <div class="communitiesDiv mt-3">

                                    <?php //print_r(request()->community); ?>

                                    @foreach($communities as $row)

                                    <?php $count = \App\Models\Property::where('communities', '=', $row->id)->count(); ?>

                                    @if($count > 0)

                                    <div class="comRdBtn">

                                        <input type="checkbox" name="community[]" id="community_{{$row->id}}" value="{{$row->id}}" 

                                        <?php if(!empty(request()->community) && in_array($row->id,request()->community)){ echo 'checked'; } ?>  />

                                        <label for='community_{{$row->id}}'>{{ $row->name }}({{$count}})</label>

                                    </div>

                                    @endif

                                    @endforeach

                                </div>

                            </div>

                        </form>

                    </div>
                    
                    

                </div>

            </div>

        </div>

        <!-- <a href="#scrollto" class="btn-mouse"></a> -->

    </section>
    <section class="bgMainAll" id="scrollto">
        <div class="container">
            <div class="row py-5 justify-content-center">
@if(count($featuredproperties) > 0)
                <div class="col-12 col-lg-12">

                    <div class="row py-5 justify-content-center d-lg-block d-md-block d-sm-none d-none">

                        <div class="col-12 col-lg-12">

                            <div class="text-center">

                                <div class="mainHeadingCent  py-2">All <span

                                        class="secText text-primary">Properties</span>

                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="row py-0 justify-content-center d-lg-none d-md-none d-sm-block">

                        <div class="col-12 col-lg-12">

                            <div class="text-center">

                                <div class="mainHeadingCent  py-2">All <span

                                        class="secText text-primary">Properties</span>

                                </div>

                            </div>



                        </div>

                    </div>

                    <div class="row">
                    @if(count($featuredproperties) > 0)
                        @foreach($featuredproperties as $row) 
                        <?php
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
                        <div class="col-md-4">
                            <div class="card mb-3 bg-white rounded-0 border-0">
                                <div class="row g-0">
                                    <div class="col-md-12 my-auto">
                                        <center>
                                            <a href="{{ url('off-plans-property/'.$row->slug) }}"> 
                                            @if($row->image)
                                            <img  loading="lazy" src="{{ asset($row->image) }}" alt="{{ asset($row->image) }}" class="card-img-top propImage rounded-0">
                                            @endif
                                            </a>
                                        </center>
                                        <button class="btn btn-pill btnType mb-0" style="font-size:11px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$row->status==2?"Off-Plan":"Completed"}}</font></font>
                                        </button>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card-body py-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="text-start">
                                                    <p class="card-text propNameText mb-0"> <a class="text-decoration-none " href="{{ url('off-plans-property/'.$row->slug) }}"><b>{{$row->title}}</b></a> </p> 
                                                    <small class="text-primary"></small>
                                                </div>
                                                </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex justify-content-center propDet my-auto">
                                                    @if($row->propertyBedrooms->count() > 0) <p><i class="fa fa-bed"></i> {{$row->propertyBedrooms->implode('bedrooms',',')}}</p>@endif

                                                    @if($row->bathrooms != 0)<p><i class="fa fa-shower"></i> {{$row->bathrooms}}</p>@endif

                                                    @if($row->area != 0)<p><i class="fa fa-map-o"></i> {{$row->area}}sq.ft</p>@endif
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="text-start">
                                                    <p class="card-text propNameText mb-0">
                                                        <a class="text-decoration-none " href="{{ url('off-plans-property/'.$row->slug) }}"> <b> @if($row->price == '0') {{ $price }} @else AED {{ $price }} @endif</b></a>
                                                    </p> <small class="text-primary"></small></div>
                                                <!--<div class="d-flex justify-content-center propShare my-auto">-->
                                                <!--    <p><i class="bi bi-share-fill"></i></p>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                            @endif
                        <div class="col-md-12 text-center">   
                            {{$featuredproperties->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
                @else
                <div class="col-12 col-lg-12 borderBotFoot">
                    <div class="row py-5 justify-content-center">
                        <div class="col-12 col-lg-12 justify-content-center g-4 mb-5" style="text-align: center;height: 300px;padding-top: 20px;margin: 20px;background-color: #06112c;">
             
                             <div class="text-center mb-3">
                                <div class="mainHeadingCent  py-2">No
                                    <span class="secText text-primary">Matching Property!</span>
                                </div>
                            </div>
                             <p class="text-white"> Try resetting the filters </p><p>
                             <a href="{{ url('all-properties') }}" class="btn btn-color btn-secondary" style="margin-top: 15px;"> Reset Filters </a>
                            </p>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
        </div>
        </div>
    </section>   

@endsection