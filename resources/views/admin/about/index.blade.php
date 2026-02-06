@extends('admin.layout.default')
@section('pageTitle', 'Admin | About') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">About</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/about/store') }}" id="form">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-6">
		                  	<div class="form-group">
		                    	<label>Banner Image</label><br>
		                      	{{Form::file('banner_image',array('class'=>'form-control', 'required'=>'required' )) }}
		                  	</div>
		                  	@if($about->banner_image)
                                  <img src="{{asset($about->banner_image)}}" alt="" width="100px" height="100px">
                                  @endif
		                </div>
		                
		                <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Banner Heading</label>
                                <input class="form-control" type="text" name="banner_heading" value="{{$about->banner_heading}}" required>
                            </div>
                        </div>
                        <div class="col-md-12 text-center"><h4>Mission and Vision Section</h4></div>
		                
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="mission_desc" rows="6" 
                               name="mission_desc" required>{{$about->mission_desc}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center"><h4>Message from our CEO Section</h4></div>
		               
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">CEO Image (round with border)</label>
                                 {{Form::file('ceo_image',array('class'=>'form-control', 'required'=>'required' )) }}
                            </div>
                            	@if($about->ceo_image)
                                  <img src="{{asset($about->ceo_image)}}" alt="" width="100px" height="100px">
                                  @endif
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="ceoMsg" rows="6" 
                               name="ceoMsg" required>{{$about->ceoMsg}}</textarea>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">CEO Name</label>
                                <input class="form-control" type="text" name="ceoName" value="{{$about->ceoName}}" required>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Designation</label>
                                <input class="form-control" type="text" name="ceoDesignation" value="{{$about->ceoDesignation}}" required>
                            </div>
                        </div>
                        <div class="col-md-12 text-center"><h4>Team Section</h4></div>
		                
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="teamDesc" rows="6" 
                               name="teamDesc" required>{{$about->teamDesc}}</textarea>
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