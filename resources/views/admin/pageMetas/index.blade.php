@extends('admin.layout.default')
@section('pageTitle', 'Admin | Page Metas') 
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card-box">
            <div class="row">
               <div class="col-md-9">
                  <h4 class="mt-0 mb-3 header-title">Page Metas</h4>
               </div>
               <div class="col-md-3 text-right">
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
                  Add Page Metas
                  </button>
                  <!--  <a href="{{ url('admin/accommodataion/add') }}" class="btn btn-sm btn-primary">Add Amenities </a> -->
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <table id="table" class="table table-hover">
                     <thead>
                        <tr>
                           <th scope="col">S.No</th>
                           <th scope="col">Page URL</th>
                           <th scope="col">Page Title</th>
                           <th scope="col">Page Keywords</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $i =1; ?>
                        @foreach($pageMetas as $rows)
                        <tr>
                           <th scope="row">{{ $i++ }}</th>
                           <td>
                              {{$rows->page_url}}
                           </td>
                           <td>{{$rows->page_title}}</td>
                           <td>{{$rows->page_keywords}}</td>
                           
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
                                    
                                    <a class="dropdown-item delete" data-id=" {{ $rows->id}}" href="{{ url('admin/pagemetas/delete/'.$rows->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
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
            <h4 class="modal-title"> Add Page Metas </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <form  action="{{ url('admin/pagemetas/add') }}" method="post" id="form" >
               
               <div class="form-group">
                  <label for="name">Page Url:</label>
                  <input type="text" class="form-control" name="page_url" id="page_url">
                  <input type="hidden" class="form-control" name="id" id="edit_id">
               </div>
               <div class="form-group">
                  <label for="name">Page Title:</label>
                  <input type="text" class="form-control" name="page_title" id="page_title">
               </div>
               <div class="form-group">
                  <label for="name">Page Keywords:</label>
                  <textarea class="form-control" name="page_keyword" id="page_keyword" rows="2"></textarea>
               </div>
               <div class="form-group">
                  <label for="name">Page Description:</label>
                  <textarea class="form-control" name="page_description" id="page_description" rows="3"></textarea>
               </div>
               
               <input type="submit" class="btn btn-primary"  value="Submit" name="submit">	 
            </form>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).on('click','.open_modal',function(){
          var url = "pagemetas/edit";
          var id= $(this).attr('data-id') ;
          $.get(url + '/' + id, function (data) {
              //success data
              console.log(data);
              
              $('#edit_id').val(data.data.id);
              $('#page_url').val(data.data.page_url);
              $('#page_title').val(data.data.page_title);
              $('#page_keyword').val(data.data.page_keywords);
              $('#page_description').val(data.data.page_description);
              $('#myModal').modal('show');
          }) 
      });
</script>
@endsection