@extends('admin.layout.default')
@section('pageTitle', 'Admin | Status') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Add Status</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/status/add') }}" id="form">
                    @csrf  
                    <div class="row">                      
		                <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Status Name</label>
                                 <input class="form-control" type="text" name="name" value="{{ !empty($statuslist)?$statuslist->name:''}}" required>
                                 <input type="hidden" name="id" class="form-control" value="{{ !empty($statuslist)?$statuslist->id:''}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Is Active</label>
                                 <select class="form-control" name="is_active" required>
                                  <option value="1" {{( !empty($statuslist)? $statuslist->is_active == 1:'' ) ? 'Selected' : ''}}>Active</option>
                                  <option value="2" {{( !empty($statuslist)? $statuslist->is_active == 2:'' ) ? 'Selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>	                
		                <div class="col-md-6">
		                  	<div class="form-group">	
                            <input type="submit" class="btn btn-primary"  value="Submit" name="submit">	  
			                    <a href="{{ url('admin/status') }}" class="btn btn-primary my-4">Back</a>
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection