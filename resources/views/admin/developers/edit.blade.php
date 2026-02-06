@extends('admin.layout.default')
@section('pageTitle', 'Admin | Developrs') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Edit Developr</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/developers/edit/'.$developer->id) }}" id="form">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-12">
		                  	<div class="form-group">
		                    	<label>Developr Logo</label><br>
                                {{Form::file('dev_logo',array('class'=>'' )) }}
                                  @if($developer->dev_logo)
                                  <img src="{{asset($developer->dev_logo)}}" alt="" width="100px" height="100px">
                                  @endif
		                  	</div>
		                </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Developr Title</label>
                                <input class="form-control" type="text" name="title" value="{{$developer->title}}" required>
                            </div>
                        </div>
                        			                
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Founded In</label>
                                <input class="form-control" type="text" name="founded_in" value="{{$developer->founded_in}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Based In</label>
                                <input class="form-control" type="text" name="based_in" value="{{$developer->based_in}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">No of Employees</label>
                                order_id
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="email">Valuation of the Developer</label>
                                <input class="form-control" type="text" name="valuation" value="{{$developer->valuation}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="status">Status</label>
                            	 <select name="is_active" class="form-control">
                            	     <option value="1" <?php if($developer->is_active == 1){ echo 'selected'; } ?>>Active</option>
                            	     <option value="0" <?php if($developer->is_active == 0){ echo 'selected'; } ?>>Inactive</option>
                            	 </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="status">Order ID</label>
                            	 <input class="form-control" type="text" name="order_id" value="{{$developer->order_id}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                        <label for="email"> Description </label>
                                <textarea class="form-control ckeditor" id="description" rows="6" 
                               name="description" required>{{ !empty($developer)?$developer->description:''}}</textarea>
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