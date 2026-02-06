@extends('admin.layout.default')
@section('pageTitle', 'Admin | Service') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Service</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/service/store') }}" id="form">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-6">
		                  	<div class="form-group">
		                    	<label>Banner Image</label><br>
		                      	{{Form::file('banner_image',array('class'=>'form-control' )) }}
		                  	</div>
		                  	@if(isset($service))
                                  <img src="{{asset($service->banner_image)}}" alt="" width="100px" height="100px">
                                  @endif
		                </div>
		                
		                <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Banner Heading</label>
                                <input class="form-control" type="text" name="banner_heading" value="{{ isset($service) ? $service->banner_heading : '' }}" required>
                            </div>
                        </div>
                        <div class="col-md-12 text-center"><h4>What we offer Section</h4></div>
		                
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="offer_desc" rows="6" 
                               name="offer_desc" required>{{isset($service) ?  $service->offer_desc : ''}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center"><h4>We Care Section</h4></div>
		               
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="care_desc" rows="6" 
                               name="care_desc" required>{{isset($service) ? $service->care_desc : ''}}</textarea>
                            </div>
                        </div>
                                     
		                <div class="col-md-6">
		                  	<div class="form-group">		                    
			                    <button type="submit" class="btn btn-primary my-4" value="Submit" name="submit">Submit</button>
			                   
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection