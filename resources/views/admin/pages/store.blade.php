@extends('admin.layout.default')
@section('pageTitle', 'Admin | Page') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Add Page</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/page/store') }}" id="form">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="page_name" placeholder="Page name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="page_heading" placeholder="Page heading" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="meta_title" placeholder="Meta title" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="meta_tag" placeholder="Meta tag" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="meta_desc" placeholder="Meta description" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="page_url" placeholder="Page url" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="10" cols="20"  name="page_desc" placeholder="Page description"></textarea>
                            </div>
                        </div>                        
                        <div class="col-md-12">
		                  	<div class="form-group">
		                    	<label>Image</label><br>
		                      	{{Form::file('image',array('class'=>'', 'required'=>'required' )) }}
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