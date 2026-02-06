@extends('admin.layout.default')
@section('pageTitle', 'Admin | Banners') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Add Banner</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/slider/store') }}" id="form">
                    @csrf  
                    <div class="row">                      
                        
                        <div class="col-md-12">
		                  	<div class="form-group">
		                    	<label>Banner Image</label><br>
		                      	{{Form::file('image',array('class'=>'', 'required'=>'required' )) }}
		                  	</div>
		                </div>	
		                <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">Banner URL:</label>
                                <input class="form-control" type="url" name="page_url" required>
                            </div>
                        </div>
		                <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">Banner Main Title:</label>
                                <input class="form-control" type="text" name="heading_one" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">Banner Sub Title:</label>
                                <input class="form-control" type="text" name="heading_two">
                            </div>
                        </div>	                
		                <div class="col-md-6">
		                  	<div class="form-group">		                    
			                    <button type="submit" class="btn btn-primary my-4">Submit</button>
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