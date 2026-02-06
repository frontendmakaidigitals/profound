<section>
    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.0636489366975!2d55.17506251500759!3d25.09970668394162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b42d12be9d9%3A0xad11d3317295f268!2sTop%20Line%20Real%20Estate%20%7C%20Off%20plan%20Properties%20%7C%20Investments%20%7C%20Dubai%20-%20UAE!5e0!3m2!1sen!2sae!4v1655357359705!5m2!1sen!2sae"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!--communities-->
@if (request()->is('/') || request()->is('off-plans') || request()->is('ready') || request()->is('list-your-property') || request()->is('rent') )
<section class="communities {{url()->current()}}">
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
@endif
<!--communities-->
<footer class="footBg">
    <div class="footBgClr d-flex justify-content-center ">
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-5">
                    <!--<div class="row justify-content-center">
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
                    </div>-->
                    <!--<div class="row py-5">-->
                    <!--    <div class="col-12 col-md-4 col-lg-4">-->
                    <!--        <div class="logoFootCont">-->
                    <!--            <img src="{{ asset('frontend/assets/images/logoFoot.png') }}" alt="LOGO" class="img-fluid mb-2" width="500px">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-12 col-md-4 col-lg-4">-->
                    <!--        <div class="socialIcon">-->
                    <!--            <p class="text-primary pl-1">Follow Us On</p>-->
                    <!--            <ul class="ps-0 mb-0">-->
                    <!--                <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="bi bi-facebook"></i></a></li>-->
                    <!--                <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="fab fa-google-plus-g"></i></a></li>-->
                    <!--                <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="bi bi-twitter"></i></a></li>-->
                    <!--                <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="fab fa-pinterest"></i></a></li>-->
                    <!--                <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="fab fa-youtube"></i></a></li> -->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-12 col-md-4 col-lg-4">-->
                    <!--        <p class="text-primary subscribe-text">Subscribe to our exclusive offers</p>-->
                    <!--        <form id="formSubscribe">-->
                    <!--            <div class="row justify-content-center">-->
                    <!--                <div class="col-12 col-lg-12">-->
                    <!--                <div class="input-group mb-3">-->
                    <!--                    <input type="text" class="form-control inputSubscribe" id="subscrbEmail" name="subscrbEmail" placeholder="Enter Your Email Address" >-->
                    <!--                    <button class="btn btnSubscribe" type="button" id="button-addon2"><i class="bi bi-arrow-right text-primary"></i> </button>-->
                    <!--                  </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </form>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="row py-5 pt-0">
                        <div class="col-12  col-md-12 col-lg-12">
                            <div class="row">
                                <!--<div class="col-12 col-md-3 col-lg-3">-->
                                <!--    <div class="text-white">-->
                                <!--        <h5 class="my-3 text-uppercase">Important Links</h5>-->
                                <!--        <div class="row">-->
                                <!--            <ul class="list-unstyled">-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a class="text-white text-decoration-none"  aria-current="page" href="{{url('/')}}">Home</a>-->
                                <!--                </li>-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a class="text-white text-decoration-none" href="{{url('off-plans')}}">Properties</a>-->
                                <!--                </li>-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a class="text-white text-decoration-none" href="{{url('services')}}">Services</a>-->
                                <!--                </li>-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a class="text-white text-decoration-none" href="{{url('about-us')}}">About Us</a>-->
                                <!--                </li>-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a class="text-white text-decoration-none" href="{{url('list-your-property')}}">List Your Property</a>-->
                                <!--                </li>-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a class="text-white text-decoration-none" href="{{url('contact-us')}}">Contact</a>-->
                                <!--                </li>-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a type="button" href="{{url('mortgage-calculator')}}" class="text-white text-decoration-none" >Mortgage Calculator </a>-->
                                                    <!--a type="button" href="javascript:void(0)" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#mortgageCalculato">Mortgage Calculator </a-->
                                <!--                </li>-->
                                <!--            </ul>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="text-white">
                                        <h5 class="my-3 text-uppercase">MEDIA CENTER</h5>
                                        <div class="row">
                                            <ul class="list-unstyled">
                                                <li><a class="text-white text-decoration-none" href="{{ url('news') }}" target="_blank">News</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('news') }}" target="_blank">Blogs</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('news') }}" target="_blank">Industry News</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('news') }}" target="_blank">DAMAC in the News</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="text-white">
                                        <h5 class="my-3 text-uppercase">COMMUNITIES</h5>
                                        <div class="row">
                                            <ul class="list-unstyled">
                                               <li><a class="text-white text-decoration-none" href="{{ url('listing?communitieslists[]=golf-estate') }}" >Golf Estate</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('listing?communitieslists[]=urban-life') }}" target="_blank"> Urban Life</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('listing?communitieslists[]=villa-communities') }}" target="_blank">Villa Communities</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('listing?communitieslists[]=waterfront-living') }}" target="_blank">Waterfront Living</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3 text-white">
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
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="text-white">
                                        <div class="logoFootCont text-center">
                                <img src="{{ asset('frontend/assets/images/logoFoot.png') }}" alt="LOGO"
                                    class="img-fluid mb-2" width="500px">
                            </div>
                            <div class="socialIcon">
                                <p class="text-primary pl-1">Follow Us On</p>
                                <ul class="ps-0 mb-0">
                                    <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="bi bi-facebook"></i></a></li>
                                    <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="bi bi-twitter"></i></a></li>
                                    <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="fab fa-pinterest"></i></a></li>
                                    <li><a class="text-white text-decoration-none" href="#" class="text-decoration-none" ><i class="fab fa-youtube"></i></a></li> 
                                </ul>
                            </div>
                            <p class="text-primary subscribe-text">Subscribe to our exclusive offers</p>
                            <form id="formSubscribe">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control inputSubscribe" id="subscrbEmail" name="subscrbEmail" placeholder="Enter Your Email Address" >
                                        <button class="btn btnSubscribe" type="button" id="button-addon2"><i class="bi bi-arrow-right text-primary"></i> </button>
                                      </div>
                                    </div>
                                </div>
                            </form>
                                        <!--<h5 class="my-3 text-uppercase">Important Links</h5>-->
                                        <!--<div class="row">-->
                                        <!--    <ul class="list-unstyled">-->
                                        <!--        <li class="nav-item">-->
                                        <!--            <a class="text-white text-decoration-none"  aria-current="page" href="{{url('/')}}">Home</a>-->
                                        <!--        </li>-->
                                        <!--        <li class="nav-item">-->
                                        <!--            <a class="text-white text-decoration-none" href="{{url('off-plans')}}">Properties</a>-->
                                        <!--        </li>-->
                                        <!--        <li class="nav-item">-->
                                        <!--            <a class="text-white text-decoration-none" href="{{url('services')}}">Services</a>-->
                                        <!--        </li>-->
                                        <!--        <li class="nav-item">-->
                                        <!--            <a class="text-white text-decoration-none" href="{{url('about-us')}}">About Us</a>-->
                                        <!--        </li>-->
                                        <!--        <li class="nav-item">-->
                                        <!--            <a class="text-white text-decoration-none" href="{{url('list-your-property')}}">List Your Property</a>-->
                                        <!--        </li>-->
                                        <!--        <li class="nav-item">-->
                                        <!--            <a class="text-white text-decoration-none" href="{{url('contact-us')}}">Contact</a>-->
                                        <!--        </li>-->
                                        <!--        <li class="nav-item">-->
                                        <!--            <a type="button" href="{{url('mortgage-calculator')}}" class="text-white text-decoration-none" >Mortgage Calculator </a>-->
                                        <!--            a type="button" href="javascript:void(0)" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#mortgageCalculato">Mortgage Calculator </a-->
                                        <!--        </li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-4 text-white social-section d-sm-none d-lg-block d-md-block d-none">
                                    <h5 class="my-3">FACEBOOK</h5>
                                    <div class="row facebookPost">
                                        <!--<div class="col-4 col-lg-4">
                                            <div class="post-list">
                                                <center>
                                                    <img src="{{ asset('frontend/assets/images/gallery1.png') }}" alt="Xpertise" class="img-fluid">
                                                </center>
                                                <div class="imgHover">
                                                    <div class="imgHovrText">
                                                        <h5><a href="#">Dubai records over AED1 billion</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="card mb-3 bg-transparent border-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                        <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-md-12 col-12 col-lg-8">
                                                        <div class="card-body  py-0 ps-2">
                                                            <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                            <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="card mb-3 bg-transparent border-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                        <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-md-12 col-12 col-lg-8">
                                                        <div class="card-body  py-0 ps-2">
                                                            <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                            <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="card mb-3 bg-transparent border-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                        <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-md-12 col-12 col-lg-8">
                                                        <div class="card-body  py-0 ps-2">
                                                            <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                            <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{url('news')}}" class="text-decoration-none text-grey">Read More <i
                                                    class="fa fa-angle-double-right text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-4 text-white social-section d-sm-none d-lg-block d-md-block d-none">
                                    <h5 class="my-3 text-uppercase">Instagram</h5>
                                    <div class="row facebookPost">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="card mb-3 bg-transparent border-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                        <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-md-12 col-12 col-lg-8">
                                                        <div class="card-body  py-0 ps-2">
                                                            <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                            <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="card mb-3 bg-transparent border-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                        <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-md-12 col-12 col-lg-8">
                                                        <div class="card-body  py-0 ps-2">
                                                            <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                            <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="card mb-3 bg-transparent border-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                        <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-md-12 col-12 col-lg-8">
                                                        <div class="card-body  py-0 ps-2">
                                                            <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                            <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{url('news')}}" class="text-decoration-none text-grey">Read More <i
                                                    class="fa fa-angle-double-right text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-4 social-section d-sm-none d-lg-block d-md-block d-none">
                                    <div class="text-white">
                                        <h5 class="my-3">LATEST NEWS</h5>
                                        <div class="row">
                                            @foreach($news as $row)
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="card mb-3 bg-transparent border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                            <img src="{{ asset($row->image) }}"
                                                                class="img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-md-12 col-12 col-lg-8">
                                                            <div class="card-body  py-0 ps-2">
                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('news-details/'.$row->slug) }}">{!! Str::limit($row->title,60)  !!}</a></small>
                                                                <p class="card-text text-primary" style="font-size: 12px;"><small
                                                                        class="">{{ date('D m Y', strtotime($row->created_at)); }}</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="col-12">
                                                <a href="{{url('news')}}" class="text-decoration-none text-grey">Read More <i
                                                        class="fa fa-angle-double-right text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--social section for mobile start -->
                                 <?php /* ?> <div class="col-12 col-md-12 col-lg-4 text-white social-section-active">
                                    <h5 class="my-3 text-uppercase">Instagram</h5>
                                    <div class="swiper-social-active">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card mb-3 bg-transparent border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                            <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-md-12 col-12 col-lg-8">
                                                            <div class="card-body  py-0 ps-2">
                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                                <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card mb-3 bg-transparent border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                            <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-md-12 col-12 col-lg-8">
                                                            <div class="card-body  py-0 ps-2">
                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                                <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card mb-3 bg-transparent border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                            <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                        </div>
                                                        <div class="col-md-12 col-12 col-lg-8">
                                                            <div class="card-body  py-0 ps-2">
                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                                <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div> <?php */?>
                                    
                                <!--social section for mobile end -->
                                
                                    <!--<section class="developer">-->
                                        <div class="container py-5 swiper-social-inactive">
                                            <div class="row">
                                                <div class="col-lg-12 col-12">
                                                    <div class="swiper swiper-social-active pb-2" >
                                                        <div class="swiper-wrapper">
                                                           
                                                            <div class="swiper-slide devSwipe">
                                                                <div class="card mb-3 bg-transparent border-0">
                                                                    <div class="row g-0 align-items-center">
                                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                                            <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                                        </div>
                                                                        <div class="col-md-12 col-12 col-lg-8">
                                                                            <div class="card-body  py-0 ps-2">
                                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                                                <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide devSwipe">
                                                                <div class="card mb-3 bg-transparent border-0">
                                                                    <div class="row g-0 align-items-center">
                                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                                            <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                                        </div>
                                                                        <div class="col-md-12 col-12 col-lg-8">
                                                                            <div class="card-body  py-0 ps-2">
                                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                                                <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide devSwipe">
                                                                <div class="card mb-3 bg-transparent border-0">
                                                                    <div class="row g-0 align-items-center">
                                                                        <div class="col-md-12 col-12 col-lg-4 my-auto">
                                                                            <img src="{{ asset('frontend/assets/images/blog/img_1658139596.jpg') }}" class="img-fluid" alt="...">
                                                                        </div>
                                                                        <div class="col-md-12 col-12 col-lg-8">
                                                                            <div class="card-body  py-0 ps-2">
                                                                                <small class="card-text text-grey"><a class="text-grey" href="{{ url('/') }}">Dubai records over AED1 billion in real estate transactions...</a></small>
                                                                                <p class="card-text text-primary" style="font-size: 12px;"><small class="">Mon 07 2022</small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <!--<div class="my-auto  position-relative">-->
                                                    <!--    <div class="swiper-button-prev-unique"><i class="bi bi-arrow-left"></i></div>-->
                                                    <!--    <div class="swiper-button-next-unique"><i class="bi bi-arrow-right"></i></div>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    <!--</section>-->
                                
                                
                                <div class="col-12">
                                        <div class="navbar footNavLinks pb-0 text-white w-100">
                                            <div class="row w-100">
                                                <div class="col-12 col-md-6">
                                                    <div class="float-start my-auto">
                                                        <p class="mb-0">© Designed by Xpertise Creative Studio, HTML</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <!--<div class="float-end forPC">-->
                                                    <!--    <ul class="navbar-nav mb-2 mb-lg-0">-->
                                                    <!--        <li class="nav-item">-->
                                                    <!--            <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}">Home</a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="nav-item">-->
                                                    <!--            <a class="nav-link text-white" href="{{url('off-plans')}}">Properties</a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="nav-item">-->
                                                    <!--            <a class="nav-link text-white" href="{{url('services')}}">Services</a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="nav-item">-->
                                                    <!--            <a class="nav-link text-white" href="{{url('about-us')}}">About Us</a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="nav-item">-->
                                                    <!--            <a class="nav-link text-white" href="{{url('list-your-property')}}">List Your Property</a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="nav-item">-->
                                                    <!--            <a class="nav-link text-white" href="{{url('contact-us')}}">Contact</a>-->
                                                    <!--        </li>-->
                                                    <!--    </ul>-->
                                                    <!--</div>-->
                                                </div>
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
                                
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</footer>

<div class="bottomNav fixed-bottom side-bar-menu">
    <!--<div class="footNav">
        <div class="container">
            <div class="navbar footNavLinks pb-0">
                    <div class="float-start my-auto">
                        <p class="mb-0">© Designed by Xpertise Creative Studio, HTM</p>
                    </div>
                    <div class="float-end forPC">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('off-plans')}}">Properties</a>
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
    </div>-->
    <div class="container">
        <div class="sidebar-items-wrapp row">
            <div class="sidebar-item col-md-3">
                <div class="sidebar-img-container" id="getCalendarModalhome">
                    <i class="fa fa-envelope text-primary me-2" style="width: 15px"></i>
                </div>
                <p>Enquire</p>
            </div>
            <div class="sidebar-item phone-sidebar col-md-3">
                <div class="phone-container">
                    <div class="side-phone">
                        <a href="tel:+97144558379">
                            <div class="sidebar-img-container">
                                <i class="fa fa-phone text-primary me-2" style="width: 15px"></i>
                            </div>
                            <p>Call</p>
                        </a>
                    </div>
                    <div class="side-phone-slide">
                        <div class="h-phone">
                            <p><a href="tel:+97144558379"><span>Sales</span>+971 4 455 8379</a></p>
                            <span class="line-seperator"></span>
                            <p><span>Customer Relations</span>
                            <a id="phone-customer" href="tel:+97144558379">+971 4 455 8379</a>
                            </p>
                        </div>
                        <div class="arrow-up"></div>
                    </div>
                </div>
            </div>
            <div class="sidebar-item whatsapp-sidebar col-md-3">
                <div class="whatsapp-container">
                    <div class="side-whatsapp">
                        <div class="sidebar-img-container">
                            <h3><i class="fab fa-whatsapp text-primary me-2" style="width: 15px"></i></h3>
                        </div>
                        <p>Whatsapp</p>
                    </div>
                    <div class="side-whatsapp-slide"><div class="h-whatsapp">
                        <p><a href="https://wa.me/97144558379" target="_blank" id="whatsapp" rel="nofollow noopener">Sales</a></p>
                        <span class="line-seperator"></span><p><a href="https://wa.me/97144558379" target="_blank" id="whatsapp-customer" rel="nofollow noopener">Customer Relations</a></p>
                        </div>
                        <div class="arrow-up"></div>
                    </div>
                </div>
            </div>
            <div class="sidebar-item col-md-3">
                <a href="https://meet.google.com/" target="_blank">
                    <div class="sidebar-img-container">
                        <img src="{{ asset('frontend/assets/images/googlemmet.png')}}" width="20px">
                        <!--<i class="fa fa-address-book text-primary me-2" style="width: 15px"></i>-->
                    </div>
                    <p>Google Meet</p>
                </a>
            </div>
            <div class="sidebar-item col-md-3">
                <a type="button" href="{{url('mortgage-calculator')}}" class="text-white text-decoration-none" >
                    <div class="sidebar-img-container">
                        <img src="{{ asset('frontend/assets/images/Mortgage.jpg')}}" width="15px">
                    </div>
                    <p>Mortgage Calculator</p>
                </a>
                <!--a type="button" href="javascript:void(0)" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#mortgageCalculato">
                
                    <div class="sidebar-img-container">
                        <img src="{{ asset('frontend/assets/images/Mortgage.jpg')}}" width="15px">
                    </div>
                    <p>Mortgage Calculator</p>
                </a-->
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
                    <form id="searchForm" action="{{ url('off-plans') }}" method="GET" enctype="multipart/form-data">

                            <div class="d-flex flex-row justify-content-center bg-white flexBoxMain">

                                <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                    <div class="single-query form-group">
                                        <div class="intro">
                                            <input type="hidden" name="status_id" class="status_id" value="0">
                                            <input type="hidden" name="completion_status" class="completion_status" value="0">
                                            <input type="hidden" name="rent_status" class="rent_status" value="0">
                                            <div class="dropdown myDrop">
                                                <a onclick="BShameMenuFotter();" role="button" data-toggle="dropdown" data-target="#">
                                                    <span class="stat_name">Rent/Buy</span> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu dLabel1" role="menu" aria-labelledby="dLabel" id="dLabel">
                                                    <ul role="tablist" class="nav nav-tabs dropNavTab" id="nav-tab">
                                                        <?php 
                                                            $statuses = \App\Models\Status::where('is_active', 1)
                                                            ->orderBy('id', 'DESC')
                                                            ->get(); 
                                                        ?>
                                                        @foreach ($statuses as $status)
                                                            <?php $stats = $status->name; ?>
                                                            @if ($stats == 'Buy' || $stats == 'Rent')
                                                                <li class="nav-link @if ($stats == 'Rent') active @endif" data-bs-toggle="tab" href="#tab_{{ $stats }}">

                                                                    <a href="#{{ $stats }}" data-toggle="tab" btnId="{{ $stats }}" data-id="{{ $status->id }}" statId="{{ $status->id }}">{{ $stats }}</a>

                                                                </li>
                                                            @endif

                                                        @endforeach

                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content myTabCon myTabTyp">
                                                        @foreach ($statuses as $status)
                                                            <?php $stats = $status->name; ?>
                                                            @if ($stats == 'Buy' || $stats == 'Rent')
                                                                
                                                                <div class="tab-pane @if ($stats == 'Rent') active @endif" id="tab_{{ $stats }}">

                                                                    @if ($stats == 'Buy')
                                                                        <div>
                                                                            <p>Completion Status</p>
                                                                            <div class="">
                                                                                <button type="button" class="btn btn-outline-primary btnSelBuy mb-2" btnById="All">All</button>
                                                                                 @foreach ($statuses as $status)
                                                                                <?php $stats = $status->name; ?>
                                                                                @if ($stats == 'Off-Plan' || $stats == 'Ready')
                                                                                <button type="button" class="btn btn-outline-primary btnSelBuy mb-2" btnById="{{ $status->id }}">{{ $stats }}</button>
                                                                                @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    @elseif($stats == 'Rent')
                                                                        <div>
                                                                            <p>Rent Frequency</p>
                                                                            <div class="">
                                                                                <button type="button" class="btn btn-outline-primary btnSelRnt mb-2" btnRnId="{{ $status->id }}">Yearly</button>
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
                                    <!--<select name="status" id="property_status" class="form-select formSel" >
                                        @foreach($statuses as $row)
                                        <option value="{{ $row->id }}"<?php if(request()->status == $row->id){ echo 'selected'; } ?>> {{ $row->name }} </option>
                                        @endforeach
                                    </select>-->
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
                                        $bedroom = array(0,1,2,3,4,5,6);
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
                                        <option value="7" <?php if(!empty(request()->bedroom) && in_array(7,request()->bedroom)){ echo 'selected'; } ?>>7+ Bedrooms</option>
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
                                        <input type="text" name="min_area" id="area" class="form-control" placeholder="Min area sqft">
                                    </div>
                                    <div class="p-2 flex-fill bd-highlight border-end d-flex">
                                        <input type="text" name="max_area" id="area" class="form-control" placeholder="Max area sqft">
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
<!--join Team-->
<div class="modal" id="joinTeam">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Join the Team</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ url('join-team') }}" id="formTeam" name="formTeam">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                          <input type="text" name="name" class="form-control" placeholder="Enter Name*"  required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                          <input type="email" name="email" class="form-control" placeholder="Enter Email*"  required>
                        </div>
                        <div class="col-sm-12 col-md6 col-lg-6 mb-3 mt-3">
                          <input type="text" class="form-control" placeholder="Enter Phone Number*" name="phone" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                          <input type="text" name="message" class="form-control" placeholder="Message">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3 mt-3">
                            <lable>Attach CV</lable>
                            <input type="file" name="resume" class="form-control" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                            <button name="submit" type="button" class="btn btn-secondary btn-mb mr-2 btnJoinTeam" style="margin-top:22px;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
     
        </div>
    </div>
</div>
<!---->
<!--Calculator model-->
<!-- Modal -->
<div class="modal fade" id="mortgageCalculato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mortgage Calculator</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <style>
          a#mcw-back {
        display: none;
        }
        
        .mcw-wrap_250 {
        width: 375px !important;
        }
        </style>
      <div class="modal-body">
           
    
                 <!--Mortgage Calculator Widget -->
                <!--div class="mcw-wrap_250" id="maoWrap">
                	<div id="mcwWidget"></div>
                	<script>
                	var maoCalc = {};
                	maoCalc.settings = {
                		"theme": "theme1",
                		"view": "vertical1",
                		"responsive": "mcw-wrap_250",
                		"font": "Open Sans, Helvetica, Arial, sans-serif",
                		"border": false,
                		"boxShadow": true,
                		"backgroundColor": "#fff",
                		"fieldColor": "#fff",
                		"textColor": "#334356",
                		"borderColor": "#dde2e5",
                		"currency": "",
                		"currencySide": "right",
                		"delimiters": ",.",
                		"popup": true,
                		"popupView": "doughnutPopup",
                		"style": true,
                		"widgetTotalInterest": false,
                		"widgetTotalPrincipal": false,
                		"monthlyPayment": "Monthly Payment",
                		"totalPrincipalPaid": "Total Principal",
                		"totalInterestPaid": "Total Interest",
                		"totalPayments": "Total Payments",
                		"years": "years",
                		"title": {
                			"enabled": true,
                			"color": "#334356",
                			"label": "Mortgage Calculator"
                		},
                		"homePrice": {
                			"label": "Home Price",
                			"value": "350,000"
                		},
                		"downPayment": {
                			"enabled": true,
                			"label": "Down Payment",
                			"value": "52,000"
                		},
                		"interestRate": {
                			"label": "Interest Rate",
                			"value": "4.05"
                		},
                		"mortgageTerm": {
                			"label": "Mortgage Term",
                			"value": "30"
                		},
                		"pmi": {
                			"enabled": false,
                			"label": "PMI",
                			"value": false
                		},
                		"taxes": {
                			"enabled": false,
                			"label": "Taxes",
                			"value": false
                		},
                		"insurance": {
                			"enabled": false,
                			"label": "Insurance",
                			"value": false
                		},
                		"hoa": {
                			"enabled": false,
                			"label": "HOA",
                			"value": false
                		},
                		"extra": {
                			"enabled": true,
                			"labelAdd": "Add extra payments",
                			"labelRemove": "Remove extra payments",
                			"labelToMonthy": "To monthly",
                			"labelYearly": "Extra yearly"
                		},
                		"startDate": {
                			"enabled": true,
                			"label": "Start Date"
                		},
                		"monthsArr": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                		"button": {
                			"color": "#fff",
                			"bg": "#dec093",
                			"label": "Calculate"
                		},
                		"amortizationSchedule": "Amortization Schedule",
                		"popupLabels": {
                			"monthlyPrincipalInterest": "Monthly Principal & Interest",
                			"monthlyExtraPayment": "Monthly Extra Payment",
                			"monthlyPayment": "MONTHLY PAYMENT",
                			"downPayment": "Down payment",
                			"extraPayments": "Extra payments",
                			"totalPrincipalPaid": "Total principal paid",
                			"totalInterestPaid": "Total interest paid",
                			"totalOfAllPayments": "TOTAL OF ALL PAYMENTS",
                			"amortizationSchedule": "Amortization Schedule",
                			"tablePaymentDate": "Payment date",
                			"tablePayment": "Payment",
                			"tablePrincipal": "Principal",
                			"tableInterest": "Interest",
                			"tableTotalInterest": "Total Interest",
                			"tableBalance": "Balance",
                			"pmi": "PMI",
                			"taxes": "Taxes",
                			"insurance": "Insurance",
                			"shortInsurance": "Ins",
                			"hoa": "HOA",
                			"chartBalance": "Balance",
                			"chartPrincipal": "Principal",
                			"chartInterest": "Interest"
                		},
                		"useTitleAsLink": false,
                		"titleLinkUrl": "",
                		"useFooterLink": false,
                		"footerLinkAnchor": "",
                		"footerLinkUrl": ""
                	};
                	(function() {
                		function loadScript(src) {
                			var s, t;
                			s = document.createElement("script");
                			s.src = src;
                			t = document.getElementsByTagName("script")[0];
                			t.parentNode.insertBefore(s, t);
                		}
                
                		function decode(str) {
                			return !window.btoa ? 'not_found' : window.btoa(unescape(encodeURIComponent(str)));
                		}
                		var uri = 'https://mortgage-advice-online.org/widget/' + decode(window.location) + '.js';
                		loadScript(uri);
                	})();
                	</script>
                </div-->
                <!-- End Mortgage Calculator Widget -->

            

<!--<div style="width:320px; position:relative;"><iframe src ="https://www.mortgagecalculator.net/embeddable/v2/?size=5&textColor=003140&backgroundColor=e7f0f3" width="100%" frameborder=0 scrolling=no height=330></iframe><a style="width: 100%;background: #075269;color: #fff;text-align: center;font-weight: bold;display: block;clear: both;padding: 3px 0;font-size: 12px;text-transform: uppercase;font-family: arial;text-decoration: none; cursor:pointer;margin-top:-26px; position:absolute;" href="https://www.mortgagecalculator.net">Powered By www.MortgageCalculator.net</a></div>-->

      </div>
    </div>
  </div>
</div>
<!--Calculator model-->

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
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.js"></script>-->
<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------- slider & lightbox ------------------------------------------------------------------------>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script src="https://mreq.github.io/slick-lightbox/dist/slick-lightbox.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.15/slick.js"></script>
<!-------------------------------------------------------------------------------------------------------------------------------------------->

<script src="{{ asset('frontend/assets/js/toastr.min.js') }}"></script>

<!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript">
    // lightbox &
    $(document).ready(function(){
      
    $('.your-class1').slick({
         autoplay: true,
        dots : false,
        slidesToShow :4,
        arrows:true,
        responsive: [
    
          {
            breakpoint: 400,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:true
            }
          }
        ]
      });  
    
    });
    
    
    $('.your-class1').slickLightbox({
      itemSelector        : 'a',
      arrows              : true,
      navigateByKeyboard  : true
    });
</script>
<script type="text/javascript">
    // lightbox &
    $(document).ready(function(){
      
    $('.feature-slider').slick({
         autoplay: true,
        dots : false,
        slidesToShow :3,
        arrows:true,
        responsive: [
    
          {
            breakpoint: 400,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:true
            }
          }
        ]
      });  
    
    });
    
    
    $('.feature-slider').slickLightbox({
      itemSelector        : 'a',
      arrows              : true,
      navigateByKeyboard  : true
    });
</script>
<script type="text/javascript">
    // lightbox &
    $(document).ready(function(){
      
    $('.developers').slick({
         autoplay: true,
        dots : false,
        slidesToShow :5,
        arrows:true,
        responsive: [
    
          {
            breakpoint: 400,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:true
            }
          }
        ]
      });  
    
    });
    
    
    $('.feature-slider').slickLightbox({
      itemSelector        : 'a',
      arrows              : true,
      navigateByKeyboard  : true
    });
</script>
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
    }, 15000);
    
    $('.btnSpeak').on('click', function(){
        $('#myModalAdvisor').modal('show');
    });
    
    $('.btnBook').on('click', function(){
        $('#myModalAdvisor').modal('show');
        $('.modal-title').html('Book Now');
    });
    
    $(".btnJoinTeam").click(function(){
        //alert('ok');
        var formData = new FormData($("#formTeam")[0]);
        $.ajax({
         beforeSend:function(){
            $("#formTeam").find('button').attr('disabled',true);
            $("#formTeam").find('button>i').show();
         },
         url: $("#formTeam").attr('action'),
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
            $("#formTeam").find('button').attr('disabled',false);
            $("#formTeam").find('button>i').hide();
         },
         error:function(status,error){
           var errors = JSON.parse(status.responseText);
           //console.log(errors);
           if(status.status == 401){
               $("#formTeam").find('button').attr('disabled',false);
               $("#formTeam").find('button>i').hide();
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
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 300) {
        $(".navbar.forPC").addClass("fixed-top");
        $(".footerContact").addClass("fixed-bottom");
    } else {
        $(".navbar.forPC").removeClass("fixed-top");
        $(".footerContact").removeClass("fixed-bottom");
    }
});

$(document).on('click', '.dropNavTab li a', function(e){
    e.preventDefault();
    var stat = $(this).data('id');
    var btnId = $(this).attr('btnId');
    var url = '<?php echo url('/') ?>';
    console.log(url);
    if(btnId == 'Rent'){
        var newurl = url+'/rent';
        $('#searchForm').attr('action',newurl);
    }
    if(btnId == 'Buy'){
        var newurl = url+'/off-plans';
        $('#searchForm').attr('action',newurl);
    }
    $(".stat_name").html(btnId);
    $(".status_id").val(stat);
});

$('.btnSelRnt').click(function(e) {
    e.preventDefault();
    var stat = $(".status_id").val();
    $(".btnSelBuy").removeClass("active");
    $(this).toggleClass('active');
    var btnId = $(this).attr('btnId');
    var url = '<?php echo url('/') ?>';
    if(btnId == 'Rent'){
        var newurl = url+'/rent';
        $('#searchForm').attr('action',newurl);
    }
    if (stat != '') {
        $(".status_id").val(stat);
    }
    var btnRnId = $(this).attr('btnRnId');
    $(".completion_status").val();
    $(".rent_status").val(btnRnId);
});
$('.btnSelBuy').click(function(e) {
    e.preventDefault();
    var btnById = $(this).attr('btnById');
    $(".btnSelBuy").removeClass("active");
    $(".btnSelRnt").removeClass("active");
    $(this).toggleClass('active');
    var btnId = $(this).attr('btnId');
    var url = '<?php echo url('/') ?>';
    $(".rent_status").val("");
    if(btnId == 'Ready'){
        var newurl = url+'/ready';
        $('#searchForm').attr('action',newurl);
    }
    if(btnId == 'Off-Plan'){
        var newurl = url+'/off-plans';
        $('#searchForm').attr('action',newurl);
    }
    if(btnById == 'All'){
        var newurl = url+'/off-plans';
        $('#searchForm').attr('action',newurl);
    }
    if (btnById == 2) {
        $(".status_id").val("2");
    }
    $(".completion_status").val(btnById);

})
function BShameMenu() {

    jQuery('.dLabel').toggle();

    $("#dLabelAcc").hide();

    $("#dLabelPri").hide();

}
function BShameMenuFotter() {

    jQuery('.dLabel1').toggle();

    $("#dLabelAcc").hide();

    $("#dLabelPri").hide();

}


$('.RestStat').click(function(e) {
    $(".rent_status").val("");
    $(".completion_status").val("");
    $(".status_id").val("");
    $(".btnSelBuy").removeClass("active");
    $(".btnSelRnt").removeClass("active");
});

$('.doneStat').click(function(e) {
    jQuery('.dLabel').toggle();
    jQuery('.dLabel1').toggle();
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
        // centeredSlides: false,
        spaceBetween: 10,
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
                
                pagination: {
            el: ".swiper-pagination",
            clickable: false,
        },
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    
            
    var swiper = new Swiper(".swiper-social-active", {
        slidesPerView: 5,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
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
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 1,
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
        loop: true,
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
