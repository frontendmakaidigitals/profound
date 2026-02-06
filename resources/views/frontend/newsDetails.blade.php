@extends('frontend.layout.default')
@if($newsDetails->meta_title != "")
    @section('title', $newsDetails->meta_title)
@else
    @section('title', $newsDetails->title)
@endif
@if($newsDetails->meta_description != "")
    @section('pageDescription', $newsDetails->meta_description)
@else
    @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')

@endif
@if($newsDetails->meta_keyword != "")
    @section('pageKeyword', $newsDetails->meta_keyword)
@else
    @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
@endif
@section('content')
<style>
.image-head img {
    height: 400px;
    object-fit: cover;
    object-position: center;
}
</style>
 <div class="main-content spacing-20">
                <!-- blog-single-wrap -->
                <div class="blog-single-wrap">
    
                    <!-- image-head -->
                    <div class="image-head">
                        <img src="{{ asset($newsDetails->image) }}" alt="">
                    </div>
                    <!-- /image-head -->
    
                    <!-- blog-single-inner -->
                    <div class="cl-container">
                        <div class="row justify-center">
                            <div class="col-xl-8 col-12">
                                <div class="blog-single-inner">
                                    <div>
                                        <h2 class="wow fadeInUp">{{ $newsDetails->title }}</h2> 
                                    </div>
                                    <div>
                                       {!! $newsDetails->description !!}
                                    </div>
                                   
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /blog-single-inner -->
                
                </div>
                <!-- /blog-single-wrap -->
            </div>

@endsection
