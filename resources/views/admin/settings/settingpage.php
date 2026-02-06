@extends('admin.layout.default')
@section('pageTitle', 'Admin | Neighbourhoods') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-12">
			          <h4 class="mt-0 mb-3 header-title">Add Neighbourhoods</h4>
			        </div>
		        </div>
		        
	        	<form class="mt-3" action="{{ url('admin/neighbourhoods/add') }}" id="form">
                    @csrf  
                    <div class="row">                      
		                   <div class="col-md-6">
                            <div class="form-group">
                            	 <label for="conteant"> Contact Number </label>
                                 <input class="form-control" type="text" name="conteant" value="{{ !empty($neighbourhoodslist)?$neighbourhoodslist->name:''}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="email"> Email ID </label>
                                 <input class="form-control" type="text" name="email" value="{{ !empty($neighbourhoodslist)?$neighbourhoodslist->name:''}}">
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="address"> Address  </label>
                               <textarea class="form-control" name="address">{{ !empty($neighbourhoodslist)?$neighbourhoodslist->name:''}}</textarea>
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="email"> Facebook ID </label>
                                 <input class="form-control" type="text" name="email" value="{{ !empty($neighbourhoodslist)?$neighbourhoodslist->name:''}}">
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="email"> Linkedin  ID </label>
                                 <input class="form-control" type="text" name="email" value="{{ !empty($neighbourhoodslist)?$neighbourhoodslist->name:''}}">
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="email"> Viomi  ID </label>
                                 <input class="form-control" type="text" name="email" value="{{ !empty($neighbourhoodslist)?$neighbourhoodslist->name:''}}">
                            </div>
                         </div>

                          <div class="col-md-6">
                            <div class="form-group">
                               <label for="email"> pinterest  ID </label>
                                 <input class="form-control" type="text" name="email" value="{{ !empty($neighbourhoodslist)?$neighbourhoodslist->name:''}}">
                            </div>
                         </div>







                         

                                       
		                <div class="col-md-6">
		                  	<div class="form-group">	
                            <input type="submit" class="btn btn-primary"  value="Submit" name="submit">	  
			                    <a href="{{ url('admin/neighbourhoods') }}" class="btn btn-primary my-4">Back</a>
			                </div>                             
			            </div>                             
                    </div>                        
                </form>	        
      		</div>
      	</div>
    </div>
</div>
@endsection