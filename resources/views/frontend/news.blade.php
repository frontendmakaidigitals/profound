@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Blogs')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif
@section('content')

<style>
.wg-blog .image {
    height: 225px;
}
.wg-blog .content{
min-height:150px;
}
</style>

<div class="main-content">

                <!-- flat-title -->
                <div class="flat-title">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>Blogs</h2>
                                    <ul class="breadcrumbs">
                                        <li><a href="index.html">Home</a></li><li>/</li><li>Blogs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /flat-title -->
    
                <!-- widget-tabs -->
                <div class="widget-tabs style-1">

                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <!-- grid-blog -->
                            <div class="cl-container">
                                <div class="row">
                                @foreach($allnews as $row)
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <div class="wg-blog">
                                            <div class="image">
                                                <img src="{{ asset($row->image) }}" alt="">
                                            </div>
                                            <div class="content">

                                                <div class="name">
                                                    <a href="{{ url('blog-details/'.$row->slug) }}">{!! Str::limit($row->title,50)  !!}</a>
                                                </div>
                                                <a href="{{ url('blog-details/'.$row->slug) }}" class="tf-button-no-bg">
                                                    Read More 
                                                    <i class="icon-arrow-right-add"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            <!-- /grid-blog -->
                        </div>
                     
                                </div>
                            </div>
                            <!-- /grid-blog -->
                        </div>
                      
                                </div>
                            </div>
                            <!-- /grid-blog -->
                        </div>
                       
                                </div>
                            </div>
                            <!-- /grid-blog -->
                        </div>
                    </div>
                </div>
                <!-- /widget-tabs -->
    

            </div>


@endsection