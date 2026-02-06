@extends('admin.layout.default')
@section('pageTitle', 'Admin | News') 
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card-box">
            <div class="row">
               <div class="col-md-12">
                  <h4 class="mt-0 mb-3 header-title">Add Blogs</h4>
               </div>
            </div>
            <form class="mt-3" action="{{ url('admin/blog/add') }}" id="form">
               @csrf  
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="email"> Image </label>
                        <input class="form-control" type="file" name="image" required>
                     </div>
                  </div>
                  
                
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="email"> Title </label>
                        <input class="form-control" type="text" name="title" required>
                     </div>
                  </div>
                  <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email"> Meta Title </label>
                                    <input class="form-control" type="text" name="meta_title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email"> Meta Keywords </label>
                                    <input class="form-control" type="text" name="meta_keyword">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email"> Meta Description </label>
                                    <textarea class="form-control" name="meta_description" rows="3"></textarea>
                                </div>
                            </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="email"> Description </label>
                        <textarea class="form-control ckeditor" id="description" rows="6" name="description" required></textarea>
                        
                     </div>
                  </div>

          
                   <div class="col-md-6">
                     <div class="form-group">
                        <label for="email">Is Active</label>
                        <select class="form-control" name="is_active" required>
                           <option value="1">Active</option>
                           <option value="2">Inactive</option>
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