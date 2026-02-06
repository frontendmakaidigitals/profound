@extends('admin.layout.default')
@section('pageTitle', 'Admin | Amenities') 
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card-box">
            <div class="row">
               <div class="col-md-9">
                  <h4 class="mt-0 mb-3 header-title">Communities</h4>
               </div>
               <div class="col-md-3 text-right">
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
                  Add Communities
                  </button>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <table id="table" class="table table-hover">
                     <thead>
                        <tr>
                           <th scope="col">S.No</th>
                           <th scope="col">Image</th>
                           <th scope="col">Communities Name</th>
                           <th scope="col">Is Active</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $i =1; ?>
                        @foreach($communities as $rows)
                        <tr>
                           <th scope="row">{{ $i++ }}</th>
                           <td>
                              <div class="">
                                 <img src="{{ asset($rows->image) }}" alt="icon" width="50px" height="50px">
                              </div>
                           </td>
                           <td>{{$rows->name}}</td>
                           <td>
                              @if($rows->is_active == 1)
                              <span class="badge bg-success">Active</span>
                              @else
                              <span class="badge bg-danger">Inactive</span>
                              @endif
                           </td>
                           <td>
                              <div class="dropdown float-right">
                                 <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                 <i class="mdi mdi-dots-vertical"></i>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                      <a  type="button" class="dropdown-item edit open_modal"  
                                       data-id="{{ $rows->id }}">
                                    <i class="fa fa-pencil-alt"></i> Edit
                                    </a>
                                    
                                    <a class="dropdown-item delete" data-id=" {{ $rows->id}}" href="{{ url('admin/communities/delete/'.$rows->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
                                    <i class="fa fa-trash"></i> Delete
                                    </a>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title"> Add Communities </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <form  action="{{ url('admin/communities/add') }}" method="post" id="form" >
               <div class="form-group">
                  <img id="my_image" src="" style="height: 50px;" />
                  <label for="email">Communities Image:</label>
                  <input type="file" class="form-control" name="image" id="image">
               </div>
               <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="name">
                  <input type="hidden" class="form-control" name="id" id="edit_id">
               </div>
               <div class="form-group">
                  <label for="email">Is Active</label>
                  <select class="form-control" name="is_active" id="is_active" required>
                     <option value="1" >Active</option>
                     <option value="2" >Inactive</option>
                  </select>
               </div>
               <input type="submit" class="btn btn-primary"  value="Submit" name="submit">	 
            </form>
         </div>
      </div>
   </div>
</div>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
} );
</script>
<script type="text/javascript">
   $(document).on('click','.open_modal',function(){
          var url = "communities/edit";
          var id= $(this).attr('data-id') ;
          $.get(url + '/' + id, function (data) {
              //success data
              console.log(data);
              var  img = window.location.origin+'/' +data.data.image;
              $('#edit_id').val(data.data.id);
              $('#name').val(data.data.name);
              $('#is_active').val(data.data.is_active);
              $("#my_image").attr("src",img);
              $('#myModal').modal('show');
          }) 
      });
</script>
@endsection