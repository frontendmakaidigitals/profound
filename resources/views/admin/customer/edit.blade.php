@extends('admin.layout.default')
@section('pageTitle', 'Admin | Customers') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Edit Customers</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/customers/edit/'.$user->id ) }}" id="form">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Custome Name</label>
                                        <input class="form-control" type="text" name="first_name" placeholder="Application title" value="{{$user->first_name}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" name="phone" placeholder="Application title" value="{{$user->phone}}" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Application</label>                                      
                                        {{ Form::select('application',$application,$user->application,array('class'=>'form-control select2')) }} 

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Other Application</label>
                                        <input class="form-control" type="text" name="others_application" placeholder="Application title" value="{{$user->others_application}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Agree to call</label>
                                        {{Form::select('agree_tnc',['on'=>'Yes','off'=>'No'],null,array('class'=>'form-control required','id'=>'agree_tnc')) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Agree to Whatsapp</label>
                                        {{Form::select('agree_for_whatsapp',['off'=>'No','on'=>'Yes'],null,array('class'=>'form-control required','id'=>'agree_for_whatsapp')) }}
                                    </div>
                                </div>
                            </div>
                        </div>
		                <div class="col-md-6">
		                  	<div class="form-group">		                    
			                    <button type="submit" class="btn btn-primary my-4">Update</button>
			                    <a href="{{ url('admin/customers') }}" class="btn btn-primary my-4">Back</a>
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection