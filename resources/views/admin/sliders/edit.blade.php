@extends('admin.layout.default')
@section('pageTitle', 'Admin | Banner') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Edit Banner</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/slider/edit/'.$slider->id) }}" id="form">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Page URL </label>
                                <input class="form-control" type="url" name="page_url" value="{{$slider->page_url}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Banner Main Title </label>
                                <input class="form-control" type="text" name="heading_one" value="{{$slider->heading_one}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Banner Sub Title </label>
                                <input class="form-control" type="text" name="heading_two" value="{{$slider->heading_two}}">
                            </div>
                        </div>
                        
                        <div class="col-md-12">
		                  	<div class="form-group">
		                    	<label>Banner Image</label><br>
		                      	{{Form::file('image',array('class'=>'' )) }}
                                  @if($slider->image)
                                  <img src="{{asset($slider->image)}}" alt="" width="100px" height="100px">
                                  @endif
		                  	</div>
		                </div>	
		                
		                <div class="col-md-6">
		                  	<div class="form-group">		                    
			                    <button type="submit" class="btn btn-primary my-4">Update</button>
			                    <a href="{{ url('admin/sliders') }}" class="btn btn-primary my-4">Back</a>
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection