@extends('admin.layout.default')
@section('pageTitle', 'Admin | News') 
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.3.0/select2.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.3.0/select2.js"></script>
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card-box">
            <div class="row">
               <div class="col-md-12">
                  <h4 class="mt-0 mb-3 header-title">Add Blogs</h4>
               </div>
            </div>
            <form class="mt-3" action="{{ url('admin/blog/edit/'.$blogs->id) }}" id="form">
               @csrf  
               <div class="row">
                  <div class="col-md-12">
                     @if(!empty($blogs))
                     <img src="{{ asset($blogs->image) }}" alt="icon" width="100px" height="70px">
                     @endif
                     <div class="form-group">
                        <label for="email"> Image </label>
                        <input class="form-control" type="file" name="image">
                     </div>
                  </div>
                  
               
                
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="title"> Title </label>
                        <input class="form-control" type="text" name="title"  value="{{ $blogs->title }}" required>
                     </div>
                  </div>
                  <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Meta Title </label>
                                <input class="form-control" type="text" value="{{ !empty($blogs)?$blogs->meta_title:''}}" name="meta_title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Meta Keywords </label>
                                <input class="form-control" type="text" value="{{ !empty($blogs)?$blogs->meta_keyword:''}}" name="meta_keyword">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Meta Description </label>
                                <textarea class="form-control" name="meta_description" rows="3">{{ !empty($blogs)?$blogs->meta_description:''}}</textarea>
                            </div>
                        </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="description"> Description </label>
                        <textarea class="form-control ckeditor" id="description" rows="6" name="description" required>{{ $blogs->description }}</textarea>
                     </div>
                  </div>
                 
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="email">Is Active</label>
                        <select class="form-control" name="is_active" required>
                        <option value="1" {{( !empty($blogs)? $blogs->is_active == 1:'' ) ? 'Selected' : ''}}>Active</option>
                        <option value="2" {{( !empty($blogs)? $blogs->is_active == 2:'' ) ? 'Selected' : ''}}>Inactive</option>
                        </select>
                     </div>
                  </div>
        
               <div class="col-md-12">
                  <div class="form-group">  
                     <input type="submit" class="btn btn-primary"  value="Submit" name="submit">    
                     <a href="{{ url('admin/blogs') }}" class="btn btn-primary my-4">Back</a>
                  </div>
               </div>
         </div>
         </form>          
      </div>
   </div>
</div>
</div>
<script type="text/javascript">
   $(document).ready(function() {
       $('.basic-multiple').select2();
   });
</script>
@endsection