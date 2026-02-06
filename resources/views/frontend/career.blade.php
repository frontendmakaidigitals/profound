@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Career')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif
@section('content')
<style>
.propNameText a{
    color: #212529;
}
.mainBgOverlay {
    background: #000;
    position: absolute;
    z-index: 555;
    width: 100%;
    height: 100%;
    min-height: 70vh;
    opacity: .5;
}
.mainBg {
    position: relative;
    background: url('{{ ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-2.webp') }}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;
    min-height: 70vh;
    display: flex;
    flex-direction:column;
    justify-content: center;
    background-blend-mode: multiply;
}
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
</style>

    <section class="mainBg">
        <div class="mainBgOverlay"></div>
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="text-center text-white">
                        <h1 class="display-5 text-white text-center">{{ ($banner != null) ? $banner->heading_one :  'Careers'}}</h1>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--<a href="#scrollto" class="btn-mouse"></a>-->
    </section>
     <!--section class="bgMainAll" id="scrollto">
        <div class="container ">
            <div class="row py-5 justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="text-white px-4">
                        <div class="mainHeadingCent pb-2">Speak to an <span class="secText text-primary">Advisor</span></div>
                        <div class="mainDesc py-2">
                            <p>Our highly experienced team of professionals will guide you through the process to help you find the perfect home. Get in touch with us and our real estate advisor will help you discover the best options for investment.</p>
                            <h3>4000+ <span class="secText text-primary mr-10">Real Estate</span> 400+ <span class="secText text-primary">Clients</span></h3>
                            <div class="d-flex justify-content-start py-4 d-sm-inline">
                                <button class="btn btn-secondary btn-mb mr-2 btnSpeak">Buy Property</button>
                                <button class="btn btn-light btn-mb mr-2 btnSpeak">Sell Property</button>
                                <button class="btn btn-default btn-mb btnSpeak">Rent Property</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-5">
                    <div class="mainDesc py-2">
                        <div class="d-flex justify-content-start py-2 pe-3">
                            <div class="my-auto">
                                <img src="{{ asset('frontend/assets/images/Mask Group.png') }}" alt="" class="img-fluid pe-3" width="100px">
                            </div>
                            <div class="my-auto text-white">
                                <p class="mb-0">First LastName, Designation Nationality, Languages</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start py-2 pe-3">
                            <div class="my-auto">
                                <img src="{{ asset('frontend/assets/images/Mask Group.png') }}" alt="" class="img-fluid pe-3" width="100px">
                            </div>
                            <div class="my-auto text-white">
                                <p class="mb-0">First LastName, Designation Nationality, Languages</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start py-2 pe-3">
                            <div class="my-auto">
                                <img src="{{ asset('frontend/assets/images/Mask Group.png') }}" alt="" class="img-fluid pe-3" width="100px">
                            </div>
                            <div class="my-auto text-white">
                                <p class="mb-0">First LastName, Designation Nationality, Languages</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 borderBotFoot"></div>
            </div>
        </div>
    </section-->
    <section class="bg-black py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="text-center part-of-range-section text-white">
                        <h1 class="part-of-range-heading text-center">Join the Team</h1>
                        <p class="part-of-range-text text-center mb-5">Be a part of our passionate and enthusiastic team of individuals who constantly strive to provide the best service for our customers. </p>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#joinTeam"  class="btn btn-secondary">Upload CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-black conatct_info">
        <div class="container ">
            <div class="row py-5 justify-content-center">
                <div class="col-12 col-lg-4 text-white text-center px-4">
                    <div class="my-auto">
                        <a href="mailto:info@profoundrealtors.com">
                            <img src="{{ asset('frontend/assets/images/Icon.png') }}"  loading="lazy" alt="icon" class="img-fluid" width="50px">
                        </a>
                    </div>
                    <div class="my-auto">
                        <h4>Email</h4>
                        <p>Email us with your general questions, including marketing and partnership queries </p>
                    </div>
                    <div class="my-auto">
                        <a href="mailto:info@profoundrealtors.com">info@profoundrealtors.com</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-white text-center px-4">
                    <div class="my-auto">
                        <a href="telto:+971 4 513 9666">
                            <img src="{{ asset('frontend/assets/images/Icon-1.png') }}" loading="lazy" alt="icon" class="img-fluid" width="50px">
                        </a>
                    </div>
                    <div class="my-auto">
                        <h4>Call Us</h4>
                        <p>Call us to speak to a member of our team. We are always happy to help.</p>
                    </div>
                    <div class="my-auto">
                        <a href="telto:+971 4 513 9666">+971 4 513 9666</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-white text-center px-4">
                    <div class="my-auto">
                        <img src="{{ asset('frontend/assets/images/Icon-2.png') }}" loading="lazy" alt="icon" class="img-fluid" width="50px">
                    </div>
                    <div class="my-auto">
                        <h4>Support</h4>
                        <p>Check out helpful resources, FAQs, and developer tools.</p>
                    </div>
                    <div class="my-auto">
                        <a href="mailto:info@profoundrealtors.com" class="btn btn-secondary">Support Center</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 borderBotFoot"></div>
            </div>
        </div>
    </section>
@endsection