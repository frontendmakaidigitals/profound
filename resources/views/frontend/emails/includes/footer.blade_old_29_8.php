<section>
    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.0636489366975!2d55.17506251500759!3d25.09970668394162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b42d12be9d9%3A0xad11d3317295f268!2sTop%20Line%20Real%20Estate%20%7C%20Off%20plan%20Properties%20%7C%20Investments%20%7C%20Dubai%20-%20UAE!5e0!3m2!1sen!2sae!4v1655357359705!5m2!1sen!2sae"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!--communities-->
<section>
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-lg-12 col-12">
                <div class="row g-0">
                    <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery1.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                        <a href="{{ url('listing?communitieslists[]='.$communities[3]->slug)}}">
                            <div class="ratio ratio-1x1 ratio-lifestyle">
                                 <img src="{{ asset($communities[3]->image) }}"/>
                                 <h2> {{ $communities[3]->name  }} </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery2.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                        <a href="{{ url('listing?communitieslists[]='.$communities[1]->slug) }}">
                            <div class="ratio ratio-1x1 ratio-lifestyle">
                                <img src="{{ asset($communities[1]->image) }}"/>
                                <h2> {{ $communities[1]->name  }} </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery3.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                        <a href="{{ url('listing?communitieslists[]='.$communities[2]->slug) }}">
                            <div class="ratio ratio-1x1 ratio-lifestyle">
                                 <!--<img src="{{ asset($communities[1]->image) }}"/>-->
                                 <img src="{{ asset($communities[2]->image) }}"/>
                                 <h2> {{ $communities[2]->name  }} </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6" style="background-image: url('{{ asset('frontend/assets/images/gallery4.png') }}');background-repeat:no-repeat;background-size:cover;background-position:center;min-height:300px;">
                        <a href="{{ url('listing?communitieslists[]='.$communities[0]->slug) }}">
                            <div class="ratio ratio-1x1 ratio-lifestyle">
                                 <img src="{{ asset($communities[0]->image) }}"/>
                                 <h2> {{ $communities[0]->name  }} </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--communities-->
<footer class="footBg">
    <div class="footBgClr d-flex justify-content-center ">
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-12 py-5 borderBotFoot">
                            <div class="logoFootCont text-center">
                                <img src="{{ asset('frontend/assets/images/logoFoot.png') }}" alt="LOGO"
                                    class="img-fluid mb-2" width="500px">
                            </div>
                            <div class="text-center">
                                <p class="mb-1"><small class="text-white">Be updated on new projects and latest blog posts</small></p>
                                <form id="formSubscribe">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control inputSubscribe" id="subscrbEmail" name="subscrbEmail" placeholder="Enter Your Email Address" >
                                            <button class="btn btnSubscribe" type="button" id="button-addon2"><i class="bi bi-arrow-right text-primary"></i> </button>
                                          </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="socialIcon">
                                    <ul class="ps-0 mb-0">
                                        <li> <i class="bi bi-facebook"></i></li>
                                        <li><i class="fab fa-google-plus-g"></i></li>
                                        <li><i class="bi bi-twitter"></i></li>
                                        <li><i class="fab fa-pinterest"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-12  col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-12 col-lg-4 text-white">
                                    <h5 class="my-3">CONTACT US</h5>
                                    <div class="d-flex justify-content-start">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-phone text-primary me-2" style="width: 15px"></i></li>
                                            <li><i class="fa fa-envelope text-primary me-2" style="width: 15px"></i> </li>
                                            <li><i class="fa fa-map-marker text-primary me-2" style="width: 20px"></i></li>
                                        </ul>
                                        <ul class="list-unstyled text-grey ">
                                            <li> Call Us <a href="tel:+97144558379"
                                                    class="text-primary text-decoration-none">+971 4
                                                    455 8379</a></li>
                                            <li> Send an Email on <a href="mailto:info@tlre.ae"
                                                    class="text-primary text-decoration-none">info@tlre.ae</a></li>
                                            <li><a href="https://goo.gl/maps/iFrnMeqdHqKMG1gcA"
                                                    class="text-grey text-decoration-none">Office No. 1002, Tameem House,
                                                    Tecom Barsha Heights Dubai, United Arab Emirates</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-8">
                                    <div class="text-white">
                                        <h5 class="my-3">LATEST NEWS</h5>
                                        <div class="row">
                                            @foreach($news as $row)
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="card mb-3 bg-transparent border-0">
                                                    <div class="row g-0">
                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                            <img src="{{ asset($row->image) }}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-md-12 col-12 col-lg-8">
                                                            <div class="card-body  py-0 ps-2">
                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('news-details/'.$row->slug) }}">{!! Str::limit($row->title,40)  !!}</a></small>
                                                                <p class="card-text text-primary" style="font-size: 12px;"><small
                                                                        class="">{{ date('D m Y', strtotime($row->created_at)); }}</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!--<div class="col-lg-4 col-md-6 col-6">-->
                                            <!--    <div class="card mb-3 bg-transparent border-0">-->
                                            <!--        <div class="row g-0">-->
                                            <!--            <div class="col-md-12 col-12 col-lg-4 my-auto">-->
                                            <!--                <img src="{{ asset('frontend/assets/images/blog/02.png') }}"-->
                                            <!--                    class="img-fluid" alt="...">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-12 col-12 col-lg-8">-->
                                            <!--                <div class="card-body  py-0 ps-2">-->
                                            <!--                    <small class="card-text text-grey">This is a wider card with-->
                                            <!--                        supporting text below </small>-->
                                            <!--                    <p class="card-text text-primary" style="font-size: 12px;"><small-->
                                            <!--                            class="">Dec 12 - 2015</small></p>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-4 col-md-6 col-6">-->
                                            <!--    <div class="card mb-3 bg-transparent border-0">-->
                                            <!--        <div class="row g-0">-->
                                            <!--            <div class="col-md-12 col-12 col-lg-4 my-auto">-->
                                            <!--                <img src="{{ asset('frontend/assets/images/blog/03.png') }}"-->
                                            <!--                    class="img-fluid" alt="...">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-12 col-12 col-lg-8">-->
                                            <!--                <div class="card-body py-0 ps-2">-->
                                            <!--                    <small class="card-text text-grey">This is a wider card with-->
                                            <!--                        supporting text below </small>-->
                                            <!--                    <p class="card-text text-primary" style="font-size: 12px;"><small-->
                                            <!--                            class="">Dec 12 - 2015</small></p>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-3 col-md-6 col-6">-->
                                            <!--    <div class="card mb-3 bg-transparent border-0">-->
                                            <!--        <div class="row g-0">-->
                                            <!--            <div class="col-md-12 col-12 col-lg-4 my-auto">-->
                                            <!--                <img src="{{ asset('frontend/assets/images/blog/03.png') }}"-->
                                            <!--                    class="img-fluid" alt="...">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-12 col-12 col-lg-8">-->
                                            <!--                <div class="card-body py-0 ps-2">-->
                                            <!--                    <small class="card-text text-grey">This is a wider card with-->
                                            <!--                        supporting text below </small>-->
                                            <!--                    <p class="card-text text-primary" style="font-size: 12px;"><small-->
                                            <!--                            class="">Dec 12 - 2015</small></p>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="col-12">
                                                <a href="{{url('news')}}" class="text-decoration-none text-grey">Read More <i
                                                        class="fa fa-angle-double-right text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-12 col-lg-4 text-white">
                                    <h5 class="my-3">FACEBOOK</h5>
                                    <div class="row g-3">
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 text-white">
                                    <h5 class="my-3">INSTAGRAM</h5>
                                    <div class="row g-3">
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                        <div class="col-4 col-lg-4">
                                            <center><img src="{{ asset('frontend/assets/images/gallery1.png') }}"
                                                alt="Xpertise" width="120" class="img-fluid"></center>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-12 col-md-12 col-lg-12">
                                    <h5 class="my-3 text-white">POPULAR LOCATION TAGS</h5>
                                    <div class="communitiesDiv">
                                        @foreach($communities as $row)
                                        <?php $count = \App\Models\Property::where('communities', '=', $row->id)->count(); ?>
                                        @if($count > 0)
                                        <div class="comRdBtnFoot">
                                          <a href="javascript:void(0)" class="text-decoration-none <?php if(!empty(request()->community) && in_array($row->id,request()->community)){ echo 'active'; } ?>">{{ $row->name }}({{$count}})</a>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footNav">
    <div class="container">
        <div class=" navbar footNavLinks pb-0">
            <div class="float-start my-auto">
                <p class="mb-0">© Designed by Xpertise Creative Studio, HTM</p>
            </div>
            <div class="float-end forPC">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('off-Plans')}}">Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('about-us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('list-your-property')}}">List Your Property</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('contact-us')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="quickSearch" style="display: none;">
    <div class="container">
        <div class="searchDivQuick">
            <div class="row">
                <div class="col-12 col-lg-12 text-end">
                    <div class="quickSearClose mb-3 text-white fs1" style="cursor: pointer;"><i class="bi bi-x fs-1"></i>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <form id="searchForm" action="{{ url('off-Plans') }}" method="GET" enctype="multipart/form-data">

                            <div class="d-flex flex-row justify-content-center bg-white flexBoxMain">

                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <select name="status" id="property_status" class="form-select formSel" >
                                        @foreach($statuses as $row)
                                        <option value="{{ $row->id }}"<?php if(request()->status == $row->id){ echo 'selected'; } ?>> {{ $row->name }} </option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="neighbourhood[]" id="neighbourhood" placeholder="All Neighbourhoods" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        <!--<option value="">All Neighbourhoods</option>-->
                                        @foreach($neighbourhoods as $row)
                                        <option value="{{ $row->id }}" <?php if(!empty(request()->neighbourhood) && in_array($row->id,request()->neighbourhood)){ echo 'selected'; } ?>>{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="accommodation[]" id="accommodation" placeholder="Property Type" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        <!--<option value="">Property Type</option>-->
                                        @foreach($accommodataion as $row)
                                        <option value="{{ $row->id }}"<?php if(!empty(request()->accommodation) && in_array($row->id,request()->accommodation)){ echo 'selected'; } ?>>{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                    <select name="bedroom[]" id="bedroom" placeholder="No. of Bedrooms" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true"> 
                                        <!--<option value="">No. of Bedrooms</option>-->
                                        <?php 
                                        $bedroom = array(0,1,2,3,4,5,6,7);
                                        ?>
                                        @foreach($bedroom as $key => $row)
                                        <?php 
                                        if($row == 0){
                                        ?>
                                        <option value="0" <?php if(!empty(request()->bedroom) && in_array($key,request()->bedroom)){ echo 'selected'; } ?>>Studio</option>
                                        <?php }else{ ?>
                                        <option value="{{$row}}" <?php if(!empty(request()->bedroom) && in_array($row,request()->bedroom)){ echo 'selected'; } ?>>{{$row}} Bedrooms</option>
                                        <?php } ?>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <input type="text" name="minprice" id="minprice" class="form-control" placeholder="Min Price" >
                                    <!--<select name="minprice" id="minprice" class="form-select formSel">
                                        <option value="">Min Price</option>
                                        <option value="100000">AED 100000</option>
                                        <option value="200000">AED 200000</option>
                                        <option value="300000">AED 300000</option>
                                    </select>-->
                                </div>
                                <div class="p-2 flex-fill bd-highlight d-flex">
                                    <input type="text" name="maxprice" id="maxprice" class="form-control" placeholder="Max Price">
                                    <!--<select name="maxprice" id="maxprice" class="form-select formSel">
                                        <option value="">Max Price</option>
                                        <option value="1000000">AED 1000000</option>
                                        <option value="2000000">AED 2000000</option>
                                        <option value="3000000">AED 3000000</option>
                                    </select>-->
                                </div>
                                <div class="flex-fill bd-highlight d-grid">
                                    <button name="search" value="search" class="btn btn-primary btnSearch" type="submit">SEARCH</button>
                                </div>
                            </div>
                            <div class="advncSearch" style="display:none;">
                                <div class="advSearClose mt-4" style="display: none;"><a><i class="bi bi-x-square"></i></a>
                                </div>
                                <div class="d-flex flex-row justify-content-center bg-white mt-3 flexBoxMain">

                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <select name="amenities[]" id="amenities" placeholder="All Amenities" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                        @foreach($amenities as $row)
                                        <option value="{{ $row->id }}" <?php if(!empty(request()->amenities) && in_array($row->id,request()->amenities)){ echo 'selected'; } ?>>{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <input type="text" name="min_area" id="area" class="form-control" placeholder="Min Area">
                                    </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <input type="text" name="max_area" id="area" class="form-control" placeholder="Max Area">
                                    </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                                        <select name="furnished" id="furnished" placeholder="Furnished / Unfurnished"  class="form-select formSel selectpicker">
                                            <option value="" >N/A</option>
                                            <option value="Furnished"<?php if(request()->furnished == 'Furnished'){ echo 'selected'; } ?>>Furnished</option>
                                            <option value="Unfurnished"<?php if(request()->furnished == 'Unfurnished'){ echo 'selected'; } ?>>Unfurnished</option>
                                        </select>
                                    </div>
                                    <!--<div class="p-2 flex-fill bd-highlight d-flex">
                                        <select name="parking" id="parking" class="form-select formSel">
                                            <option value="">Parking</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>-->

                                </div>
                                <div class="communitiesDiv mt-3">
                                    
                                    @foreach($communities as $row)
                                    <?php $count = \App\Models\Property::where('communities', '=', $row->id)->count(); ?>
                                    @if($count > 0)
                                    <div class="comRdBtn">
                                        <input type="checkbox" name="community[]" id="communityid_{{$row->id}}" value="{{$row->id}}" <?php if(!empty(request()->community) && in_array($row->id,request()->community)){ echo 'checked'; } ?> />
                                        <label for='communityid_{{$row->id}}'>{{ $row->name }}({{$count}})</label>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </form>
                    <!--form action="" id="quickSearchForm">

                        <div class="d-flex flex-row justify-content-center bg-white flexBoxMain">

                            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                <select id="searchType" class="form-select formSel">
                                    <option value="Rent">Rent</option>
                                    <option value="Buy">Buy</option>
                                    <option value="Off-plan">Off-plan</option>
                                </select>
                            </div>
                            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                <select id="neighbourhoods" class="form-select formSel">
                                    <option value="">All Neighbourhoods</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Buy">Buy</option>
                                    <option value="Off-plan">Off-plan</option>
                                </select>
                            </div>
                            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                <select id="prop_type" class="form-select formSel">
                                    <option value="">All Types</option>
                                    <option value="Apartments">Apartments</option>
                                    <option value="Villas">Villas</option>
                                    <option value="Townhouses">Townhouses</option>
                                </select>
                            </div>
                            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                <select id="bedroom" class="form-select formSel">
                                    <option value="">Any Bedrooms</option>
                                    <option value="1">1 Bedroom</option>
                                    <option value="2">2 Bedrooms</option>
                                    <option value="3">3 Bedrooms</option>
                                </select>
                            </div>
                            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                <select id="min-price" class="form-select formSel">
                                    <option value="">Min Price</option>
                                    <option value="100000">AED 100000</option>
                                    <option value="200000">AED 200000</option>
                                    <option value="300000">AED 300000</option>
                                </select>
                            </div>
                            <div class="p-2 flex-fill bd-highlight d-flex">
                                <select id="max-price" class="form-select formSel">
                                    <option value="">Max Price</option>
                                    <option value="1000000">AED 1000000</option>
                                    <option value="2000000">AED 2000000</option>
                                    <option value="3000000">AED 3000000</option>
                                </select>
                            </div>
                            <div class="flex-fill bd-highlight d-grid">
                                <button class="btn btn-primary btnSearch" type="button">SEARCH</button>
                            </div>

                        </div>
                           
                            <div class="d-flex flex-row justify-content-center bg-white mb-4 mt-5 flexBoxMain">

                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <select id="amenities" class="form-select formSel">
                                        <option value="">Features and Amenities</option>
                                        <option value="Park">Park</option>
                                        <option value="Pool">Pool</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <select id="area" class="form-select formSel">
                                        <option value="">Area (Sqft)</option>
                                        <option value="2000">2000 Sqft</option>
                                        <option value="1000">1000 Sqft</option>
                                        <option value="800">800 Sqft</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <select id="furnished" class="form-select formSel">
                                        <option value="Furnished">Furnished</option>
                                        <option value="Not Furnished">Not Furnished</option>
                                    </select>
                                </div>
                                <div class="p-2 flex-fill bd-highlight d-flex">
                                    <select id="parking" class="form-select formSel">
                                        <option value="">Parking</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="communitiesDiv mt-3">
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Burj Khalifa"
                                        value="Burj Khalifa" /><label for='Burj Khalifa'>Burj Khalifa(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Al Furjan North"
                                        value="Al Furjan North" /><label for='Al Furjan North'>Al Furjan
                                        North(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Arabian Ranches"
                                        value="Arabian Ranches" /><label for='Arabian Ranches'>Arabian
                                        Ranches(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Al Jaddaf"
                                        value="Al Jaddaf" /><label for='Al Jaddaf'>Al Jaddaf(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Emaar Beachfront"
                                        value="Emaar Beachfront" /><label for='Emaar Beachfront'>Emaar
                                        Beachfront(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Al Quoz" value="Al Quoz" /><label
                                        for='Al Quoz'>Burj Khalifa(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Meydan City"
                                        value="Meydan City" /><label for='Meydan City'>Meydan City(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Serena" value="Serena" /><label
                                        for='Serena'>Serena(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Dubai Science Park"
                                        value="Dubai Science Park" /><label for='Dubai Science Park'>Dubai Science
                                        Park(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Jebel Ali"
                                        value="Jebel Ali" /><label for='Jebel Ali'>Jebel Ali(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Dubai Studio City"
                                        value="Dubai Studio City" /><label for='Dubai Studio City'>Dubai Studio
                                        City(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Emirates Hills"
                                        value="Emirates Hills" /><label for='Emirates Hills'>Emirates Hills(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Dubai Creek Harbour"
                                        value="Dubai Creek Harbour" /><label for='Dubai Creek Harbour'>Dubai Creek
                                        Harbour(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Madinat Jumeirah Living"
                                        value="Madinat Jumeirah Living" /><label for='Madinat Jumeirah Living'>Madinat
                                        Jumeirah Living(1)</label>
                                </div>
                                <div class="comRdBtn">
                                    <input type="checkbox" name="community" id="Golf City"
                                        value="Golf City" /><label for='Golf City'>Golf City(1)</label>
                                </div>
                            </div>
                    </form-->
                </div>
                <div class="advLink mt-4 d-none d-md-block d-lg-block"><a>Advance Search <i class="bi bi-chevron-down"></i></a> </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal Enquire -->
<div class="modal" id="myModalEnquire">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enquire Now</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
        <div class="modal-body">
            <form action="{{ url('sell-contact-us') }}" id="form" name="enquireForm">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="text" name="name" class="form-control" placeholder="Enter Name*"  required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="email" name="email" class="form-control" placeholder="Enter Email*"  required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="text" class="form-control" placeholder="Enter Phone Number*" name="phone" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="text" name="propertyDetails" class="form-control" placeholder="Enter Property Details*" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                        <button name="submit" type="button" class="btn btn-secondary btn-mb mr-2 btnEnquire">Submit</button>
                    </div>
                </div>
            </form>
        </div>
     
    </div>
  </div>
</div>

<!-- The Modal Speak to an Advisor-->
<div class="modal" id="myModalAdvisor">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Speak to an Advisor</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
        <div class="modal-body">
            <form action="{{ url('sell-contact-us') }}" id="form" name="enquireForm">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="text" name="name" class="form-control" placeholder="Enter Name*"  required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="email" name="email" class="form-control" placeholder="Enter Email*"  required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="text" class="form-control" placeholder="Enter Phone Number*" name="phone" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                      <input type="text" name="propertyDetails" class="form-control" placeholder="Enter Property Details*" required>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                        <button name="submit" type="button" class="btn btn-secondary btn-mb mr-2 btnEnquire">Submit</button>
                    </div>
                </div>
            </form>
        </div>
     
    </div>
  </div>
</div>

<!--BOOK YOUR SLOT NOW-->
<div class="modal fade" id="calendarModalHome">

    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">BOOK YOUR SLOT NOW</h4>
                <button type="button" class="btn-close close" data-bs-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body"> 

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="row">

                                <div class="col-md-12 ">

                                    <div class="logo mt-2">

                                        <div class="logo-img">

                                            <img src="{{ asset('/frontend/assets/images/logo.png') }}" alt="">

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                   <div class="agent-img mt-2">

                                    <img src="{{ asset('/frontend/assets/images/Tech-Support00.jpg') }}" alt="">

                                   </div>

                                </div>

                                <div class="col-md-12 mt-3 mb-3">

                                    <h4 >Live meeting with our team</h4>

                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 30 Min</p>

                                    <p><i class="fa fa-video-camera" aria-hidden="true"></i> Web conferencing details provided upon confirmation.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-8">

                            <div class="calenderDiv">

                                <form action="{{ url('agent-video-call') }}" id="formVideo" method="POST">

                                    @csrf

                                    <div class="step-1">

                                        <div class="row">

                                            <div class="col-md-12 newcol">

                                                <h4>Select a Date & Time</h4>

                                                <div id="calendar1"></div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="timepic">

                                                    <p class="ths_date"><?php echo date('D M Y'); ?></p>

                                                    <input type="hidden" name="id" value="">

                                                    <input type="hidden" name="ths_date" id="ths_date">

                                                    <input type="hidden" name="ths_time" id="ths_time">

                                                    <div class="listitem">

                                                        <?php 

                                                        $start_time         = date('Y-m-d')." 10:00";

                                                        $end_time           = date('Y-m-d')." 20:00";

                                                        $start_timestamp    = strtotime($start_time);

                                                        $end_timestamp      = strtotime($end_time);

                                                        $cur_date_time      = date('Y-m-d H:i');

                                                        //echo date('Y-m-d H:i');

                                                        for($i=$start_timestamp; $i<=$end_timestamp;){

                                                            //if($i>strtotime($cur_date_time)){

                                                            $cur_time = date('H:i A',$i);

                                                        ?>

                                                            <div class="pickitem">

                                                                <button type="button" class="timeitem" value="{{ $cur_time }}">{{ $cur_time}}</button>

                                                                <button class="confirm-button" type="button" value="{{ $cur_time }}">Confirm</button>

                                                            </div>

                                                        <?php 

                                                            //}

                                                            $i = strtotime('+30 minutes', $i);

                                                        }

                                                        ?>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="step-2" >

                                        <div class="row">

                                            <div class="col-md-12">

                                                <h4>Enter Details<h4>

                                                <div class="mb-3 mt-3">

                                                    <label>Name*</label>

                                                    <input type="text" name="full_name" class="form-control" placeholder="Enter your name" autocomplete="off" required>

                                                </div>

                                                <div class="mb-3 mt-3">

                                                    <label>Email*</label>

                                                    <input type="text" name="email" class="form-control" placeholder="Enter your email" autocomplete="off" required>

                                                </div>

                                                <div class="mb-3 mt-3">

                                                    <label>Message*</label>

                                                    <input type="text" name="question" class="form-control" placeholder="" autocomplete="off">

                                                </div>

                                            </div>

                                        </div>

                                        <button type="button" name="submit" class="btn btn-dark btnSchedule">Schedule Event</button>

                                    </div>                                     

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!--calendar Modal Home -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

<!--Slick-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.js"></script>
<script src="{{ asset('frontend/assets/js/toastr.min.js') }}"></script>

<!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $('.testimonial_owlCarousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: false,
        smartSpeed: 3000,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
$(document).ready(function(){
    window.setTimeout(function() {
        $('#myModalEnquire').modal('show');
    }, 1500);
    
    $('.btnSpeak').on('click', function(){
        $('#myModalAdvisor').modal('show');
    });
    
    $('.btnBook').on('click', function(){
        $('#myModalAdvisor').modal('show');
        $('.modal-title').html('Book Now');
    });
    
    $(".btnEnquire").click(function(){
       var formData = new FormData($("#form")[0]);
       $.ajax({
         beforeSend:function(){
            $("#form").find('button').attr('disabled',true);
            $("#form").find('button>i').show();
         },
         url: $("#form").attr('action'),
         data: formData,
         type: 'POST',
         processData: false,
         contentType: false,
         success:function(response){
            if(response.success){
               if(Array.isArray(response.message)){
                   $.each(response.message, function(i,v){
                       if(v['type'] == 'success'){
                           toastr.success(v['message'],'Success');
                       }else{
                           toastr.error(v['message'],'Error');
                       }
                   });
               }else{
                   toastr.success(response.message,'Success');
               }
            }else{
               toastr.error( 'Something going wrong!','Opps!');
            }
         },
         complete:function(){
            $("#form").find('button').attr('disabled',false);
            $("#form").find('button>i').hide();
         },
         error:function(status,error){
           var errors = JSON.parse(status.responseText);
           //console.log(errors);
           if(status.status == 401){
               $("#form").find('button').attr('disabled',false);
               $("#form").find('button>i').hide();
               $.each(errors.error, function(i,v){
                   toastr.error( v[0],'Opps!');
               });
            }else{
               toastr.error(errors.message,'Opps!');
            }
         }
      });
      return false;
   });
   
   
      $(".btnSchedule").click(function(){
       var formData = new FormData($("#formVideo")[0]);
       $.ajax({
         beforeSend:function(){
            $("#formVideo").find('button').attr('disabled',true);
            $("#formVideo").find('button>i').show();
         },
         url: $("#formVideo").attr('action'),
         data: formData,
         type: 'POST',
         processData: false,
         contentType: false,
         success:function(response){
            if(response.success){
               if(Array.isArray(response.message)){
                   $.each(response.message, function(i,v){
                       if(v['type'] == 'success'){
                           toastr.success(v['message'],'Success');
                       }else{
                           toastr.error(v['message'],'Error');
                       }
                   });
               }else{
                   toastr.success(response.message,'Success');
               }
            }else{
               toastr.error( 'Something going wrong!','Opps!');
            }
         },
         complete:function(){
            $("#formVideo").find('button').attr('disabled',false);
            $("#formVideo").find('button>i').hide();
         },
         error:function(status,error){
           var errors = JSON.parse(status.responseText);
           //console.log(errors);
           if(status.status == 401){
               $("#formVideo").find('button').attr('disabled',false);
               $("#formVideo").find('button>i').hide();
               $.each(errors.error, function(i,v){
                   toastr.error( v[0],'Opps!');
               });
            }else{
               toastr.error(errors.message,'Opps!');
            }
         }
      });
      return false;
   });
    
    
});

$(document).on('click', '#getCalendarModalhome', function(){ 

    //alert('check');   
    $('.timepic').hide();
    $("#calendarModalHome").modal('show');
    $('.newcol').removeClass('col-md-8').addClass('col-md-12'); 
    $('.step-1').show(); 
    $('.step-2').hide(); 
    $('.pickitem ').removeClass('active');

});
$('#calendar1').datepicker({

    inline:true,

    minDate: new Date(),

    firstDay: 1,

    showOtherMonths:true,

    dayNamesMin:['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

    onSelect: function(dateText) {

        console.log(this.value);

        $('.timepic').show();

        $(".ths_date").text(this.value);

        $("#ths_date").val(this.value);

        $('.newcol').removeClass('col-md-12').addClass('col-md-8');   

    }

});


$(document).on('click','.timeitem', function(){
    $("#ths_time").val($(this).val());
    $(this).parent('.pickitem').addClass('active'); 
});

$(document).on('click','.confirm-button', function(){
    $("#ths_time").val($(this).val());
    $('.step-1').hide(); 
    $('.step-2').show();       

});

$(document).on('click','.close', function(){
    //$('#calendarModalHome').hide(); 
    $('.timepic').hide(); 
    $('.newcol').removeClass('col-md-8').addClass('col-md-12'); 
    $('.step-2').hide(); 
    $('.step-1').show();  

      

});



</script>
<!-- Initialize Swiper -->
<script>

        var swiper = new Swiper(".swipeProp", {
        	slidesPerView: 4,
        	grid: {
                rows: 2,
            },
        	spaceBetween: 10,
        	navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        	pagination: {
        		el: ".swiper-pagination",
        		clickable: true
        	},
        	on: {
        	init:  function () {
               swiperClassHandler (this.activeIndex, '.swiper-slide')
            },
            slideChange: function () {
               swiperClassHandler (this.activeIndex, '.swiper-slide')
            },
            orientationchange: function(){},
            beforeResize: function(){
                let vw = window.innerWidth;
                if(vw > 1000){
                    swiper.params.slidesPerView = 4
                    swiper.params.slidesPerColumn =4;
                }else{
                    swiper.params.slidesPerView = 1
                    swiper.params.slidesPerColumn = 1;
                }
                swiper.init();
             },
          },
        });
        
        
        function swiperClassHandler (i, csl) {
            let sliders = document.querySelectorAll(csl);
        	sliders.forEach(n => n.classList.remove('swiper-slide_left', 'swiper-slide_right'));
        	console.log(sliders);
    		 Array.prototype.slice.call(sliders, i * 2, i * 2 + 4).forEach(n => n.classList.add('swiper-slide_left'));
    		 Array.prototype.slice.call(sliders, i * 2 + 4, i * 2 + 4 + 4).forEach(n => n.classList.add('swiper-slide_right'));
        }


    var swiper = new Swiper(".swipeProp1", {
        slidesPerView: "auto",
        centeredSlides: false,
        spaceBetween: 10,
        //rows: 2,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                items: 1
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
    });
    var swiper = new Swiper(".similar-listing", {
        slidesPerView: "auto",
        centeredSlides: false,
        spaceBetween: 10,
        //rows: 2,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                items: 1
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
    });
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 50,
            },
        },
    });
    
    var swiper = new Swiper(".swipeDeveloper", {
        slidesPerView: 5,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique'
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            540: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 0,
            },
            1400: {
                slidesPerView: 5,
                spaceBetween: 0,
            },
        },
    });
    var swiper = new Swiper(".swipeTeam", {
        slidesPerView: 6,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique'
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            540: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 0,
            },
            1400: {
                slidesPerView: 6,
                spaceBetween: 0,
            },
        },
    });
</script>
<script>
    $(document).ready(function() {
        $(".advLink a").on("click", function() {
            $(".advLink").css("display","none");
            $(".advncSearch").css("display","block");
            $(".advSearClose").css("display","block");
           
        });
        $(".quickSearClose").on("click", function() {
            $(".quickSearch").css("display","none");
            $("body").css("overflow-y","scroll");
           
        });
        $(".btnQuickSear").on("click", function() {
            $(".quickSearch").css("display","flex");
            $("body").css("overflow-y","hidden");
           
        });
        $(".advSearClose a").on("click", function() {
            $(".advLink").css("display","block");
            $(".advncSearch").css("display","none");
            $(".advSearClose").css("display","none");
           
        });
        $(".btnVideo").on("click", function() {
            $("#lightbox").fadeIn(1000);
            $(".navbar").css("z-index","0");
            $("body").css("overflow","hidden");
            
            $(this).hide();
            var videoURL = $('#video').prop('src');
            videoURL += "?autoplay=1";
            $('.btnVideo').prop('src', videoURL);

        });

        // When the close button is clicked make the lightbox fade out in the span of 0.5 seconds and show the play button
        $("#close-btn").on("click", function() {
            $(".navbar").css("z-index","1030");
            $("body").css("overflow","visible");
            $("#lightbox").fadeOut(500);
            $("#button").show(250);
            $("btnVideo").css("display","block");
        });

        function triggerHtmlEvent(element, eventName) {
            var event;
            if (document.createEvent) {
                event = document.createEvent('HTMLEvents');
                event.initEvent(eventName, true, true);
                element.dispatchEvent(event);
            } else {
                event = document.createEventObject();
                event.eventType = eventName;
                element.fireEvent('on' + event.eventType, event);
            }
        }

        
        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');
            $(".filter").removeClass("active");
            $(".filter").not('.' + value).addClass("active");
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');
        });
        $(".nav-link").click(function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });



    });
    
if($('.carousel2-1 .carousel').length>0) {
   $('.carousel2-1 .carousel').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 10000,
      centerPadding: '30px',
      responsive: [
         {
            breakpoint: 1200,
            settings: {
               centerPadding: '150px',
               slidesToShow: 1
            }
         },
         {
            breakpoint: 768,
            settings: {
               arrows: false,
               centerPadding: '30px',
               slidesToShow: 1
            }
         }
      ]
   });
}

// Slick lightbox

if($('.lightbox').length>0) {
   $('.lightbox').slickLightbox({
      itemSelector: 'a.open-lightbox',      
      navigateByKeyboard: true,
      layouts: {
         closeButton: '<button class="btn close"><i class="fas fa-times"></i></button>'
      }
   });
}
</script>
<script type="text/javascript">

    function googleTranslateElementInit() {
        console.log('lang init::');
        new google.translate.TranslateElement({ 
            pageLanguage: 'en', 
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE, 
            autoDisplay: false 
        }, 'google_translate_element');
    }
    
    function translateLanguage(lang) {
        var $frame = $('.goog-te-menu-frame:first');
        var $frame2 = $('.goog-te-banner-frame:first');
        if (!$frame.length) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        if(lang != "English"){
            $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
        }else{
            $frame2.contents().find('.goog-te-banner .goog-te-button button').get(1).click();
        }
        return false;
    }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
