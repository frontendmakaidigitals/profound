@extends('admin.layout.default')
@section('pageTitle', 'Admin | Add Agent') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Add Agent</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/agent/store') }}" id="form">
                    @csrf  
                    <div class="row">                      
                        
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Name</label>
                                <input class="form-control" type="text" name="name" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Email</label>
                                <input class="form-control" type="text" name="email" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
		                  	<div class="form-group">
		                    	<label>Agent Image</label><br>
                                {{Form::file('image',array('class'=>'' )) }}
		                  	</div>
		                </div>			                
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent BRN</label>
                                <input class="form-control" type="text" name="agent_brn" value="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Phone</label>
                                <input class="form-control" type="text" name="phone" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent WhatsApp</label>
                                <input class="form-control" type="text" name="whatsapp" value="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Designation</label>
                                <input class="form-control" type="text" name="designation" value="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Languages</label>
                                <input class="form-control" type="text" name="languages" value="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Specialization</label>
                                <input class="form-control" type="text" name="specialization" value="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Experience</label>
                                <input class="form-control" type="text" name="experience" value="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Agent Order</label>
                                <input class="form-control" type="number" name="agent_order" value="" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="description" rows="6" 
                               name="description" ></textarea>
                            </div>
                        </div>
		                <div class="col-md-6">
		                  	<div class="form-group">		                    
			                    <button type="submit" class="btn btn-primary my-4">Submit</button>
			                    <a href="{{ url('admin/agents') }}" class="btn btn-primary my-4">Back</a>
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection