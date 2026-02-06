@extends('frontend.layout.default')

@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Thank You')
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
height:100%;
    min-height: 70vh;

    opacity: .5;

}

.mainBg {

    position: relative;

    background: url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/thankyou.jfif') }}');

    background-repeat: no-repeat;

    background-position: center;

    background-size: cover;

    width: 100%;

    height: 70vh;

    display: flex;

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

h3.message-text {
    color: #fff;
    line-height: 34px;
    width: 100%;
    padding: 0 100px;
    display: block;
}

.invest-heading {
    color: #fff;
    font-weight: 500;
    font-size: 36px;
}
section.main-section.py-4 {
    padding: 70px 0;
    background: #06122C;
}

.message-section {
    /* background: #000; */
    text-align: center;
    color: #fff;
    padding: 50px;
    position: relative;
    width: 100%;
    max-width: 700px;
    height: 400px;
    margin: 0 auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

<section class="mainBg">

        <div class="mainBgOverlay"></div>

        <div class="container my-auto">

            <div class="row">

                <div class="col-12 col-lg-12">

                    <div class="text-center text-white">

                        <h1 class="display-5 text-white text-center">{{ ($banner != null) ? $banner->heading_one :  'Thank You'}}</h1>

                        <nav aria-label="breadcrumb">

                          <ol class="breadcrumb mt-4">

                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Thank You</li>

                          </ol>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

         <!--<a href="#scrollto" class="btn-mouse"></a>-->

    </section>

    <section class="main-section py-4">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12 col-12">
	            <div class="message-section">
	            	<!-- <div class="newsOverlay"></div> -->
	            	<div class="banner-with-text1 ">
	            		<h2 class="main-title invest-heading">Thanks for submitting your CV.</h2>
	            		<h3 class="message-text">Our team will get in touch with you shortly.</h3>
                        <a href="{{url('/')}}" class="btn btn-secondary btn-mb mr-2 btnSpeak">Back to Home page</a>
	            	</div>	            	
	        	</div>
	        </div>
	    </div>
	</div>	
</section>
@endsection


