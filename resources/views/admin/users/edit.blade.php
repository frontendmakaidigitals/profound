@extends('admin.layout.default')
@section('pageTitle', 'Admin | User edit Password') 
@section('content')
<style type="text/css">
input[name=email] {
    pointer-events: none;
 }
 .form-control:disabled, .form-control[readonly] {
    background-color: #dddd;
    opacity: 1;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                      <h4 class="mt-0 mb-3 header-title">Edit Admin Password </h4>
                    </div>
                </div>
                
                <form accept="{{ route('admin.user.edit',$user->id) }}" id="form" method="POST">
                    @csrf  
                    <div class="row">                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" type="email" value="{{ $user->email }}" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" class="form-control" type="password" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">                            
                                <button type="submit" class="btn btn-primary my-4">Update</button>
                                <a href="{{ url('admin/dashboard') }}" class="btn btn-primary my-4">Back</a>
                            </div>                             
                        </div>                             
                    </div>                        
                </form>         
            </div>
        </div>
    </div>
</div>
@endsection