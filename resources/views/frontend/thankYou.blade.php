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
<script>
fbq('track', 'Lead');
</script>

 <!-- main-content -->
            <div class="main-content default">
                <!-- slider -->
                <section class="slider page-404">
                    <div class="wrap-slider" style="background:url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/thankyou.jfif') }}');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="slider-item">
                            <div class="cl-container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content">
                                            <div class="heading">Thank You</div>
                                            <h2>Thank you for your query!</h2>
                                            <div class="text-content">Our Specialist will get it touch with you Shortly.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /slider -->
            </div>
            <!-- /main-content -->

@endsection


