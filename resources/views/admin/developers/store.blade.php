@extends('admin.layout.default')
@section('pageTitle', 'Admin | Developrs') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Add Developer</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/developers/store') }}" id="form">
                    @csrf  
                    <div class="row">                      
                        
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">Developr Title</label>
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="col-md-12">
		                  	<div class="form-group">
		                    	<label>Developr Logo</label><br>
		                      	{{Form::file('dev_logo',array('class'=>'', 'required'=>'required' )) }}
		                  	</div>
		                </div>			                
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">Founded In</label>
                                <input class="form-control" type="text" name="founded_in" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">Based In</label>
                                <input class="form-control" type="text" name="based_in" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">No of Employees</label>
                                <input class="form-control" type="text" name="employees" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="email">Valuation of the Developer</label>
                                <input class="form-control" type="text" name="valuation" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            	 <label for="status">Status</label>
                            	 <select name="is_active" class="form-control">
                            	     <option value="1" >Active</option>
                            	     <option value="0" >Inactive</option>
                            	 </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="status">Order ID</label>
                            	 <input class="form-control" type="text" name="order_id" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="description" rows="6" 
                               name="description" required></textarea>
                            </div>
                        </div>	                
		                <div class="col-md-6">
		                  	<div class="form-group">		                    
			                    <button type="submit" class="btn btn-primary my-4">Submit</button>
			                    <a href="{{ url('admin/developers') }}" class="btn btn-primary my-4">Back</a>
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection