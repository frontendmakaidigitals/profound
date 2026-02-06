@extends('admin.layout.default')
@section('pageTitle', 'Admin | Page Edit') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Edit Page</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/page/edit/'.$page->id) }}" id="form">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="page_name">Page Name</label>
                                <input class="form-control" type="text" name="page_name" placeholder="Page name" value="{{$page->page_name}}"  required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="page_heading">Page Heading</label>
                                <input class="form-control" type="text" name="page_heading" placeholder="Page heading" value="{{$page->page_heading}}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input class="form-control" type="text" name="meta_title" placeholder="Meta title" value="{{$page->meta_title}}"  >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="meta_tag">Meta Tag</label>
                                <input class="form-control" type="text" name="meta_tag" placeholder="Meta tag" value="{{$page->meta_tag}}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="meta_desc">Meta Description</label>
                                <input class="form-control" type="text" name="meta_desc" placeholder="Meta description" value="{{$page->meta_desc}}" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="page_url">Page URL</label>
                                <input class="form-control" type="text" name="page_url" placeholder="Page url" value="{{$page->page_url}}"  required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="page_desc">Page Description</label>
                                <textarea class="form-control" id="page_desc" rows="10" cols="20"  name="page_desc" placeholder="Page description" data-sample-short style="width:100%;">{{ $page->page_desc }}</textarea>                                                               
                            </div>
                        </div>
                        
                        <div class="col-md-12">
		                  	<div class="form-group">
		                    	<label>Image</label><br>
		                      	{{Form::file('image',array('class'=>'' )) }}
                                @if($page->image)
                                  <img src="{{asset($page->image)}}" alt="" width="100px" height="100px">
                                @endif
		                  	</div>
		                </div>		                
		                <div class="col-md-6">
		                  	<div class="form-group">		                    
			                    <button type="submit" class="btn btn-primary my-4">Submit</button>
			                    <a href="{{ url('admin/pages') }}" class="btn btn-primary my-4">Back</a>
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection