@extends('admin.layout.default')
@section('pageTitle', 'Admin | Laterst Property News') 
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card-box">
            <div class="row">
               <div class="col-md-9">
                  <h4 class="mt-0 mb-3 header-title">Contacts List</h4>
               </div>
               <div class="col-md-3 text-right">
                 <a class="btn btn-sm btn-primary delete-all"> Delete Selected</a>
               </div>
            </div>
            <div class="row">
              
               <div class="col-md-12">
                   <div class="table-responsive">
                       <table id="table" class="table table-hover">
                     <thead>
                        <tr>
                           <th scope="col">S.No</th>
                           <th scope="col">Name</th>
                           <th scope="col">Contact</th>
                           <th scope="col">Email</th>
                           <th scope="col">Property Details</th>
                           <th scope="col">Message</th>
                           <th scope="col">Page URL</th>
                           <th scope="col">Date</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $i =1; ?>
                        @foreach($contact as $rows)
                        <tr dataId={{$rows->id}}>
                           <th scope="row">{{ $i++ }}</th>
                           <td>{{ $rows->name }}</td>
                           <td>{{ $rows->phone }}</td>
                           <td>{{ $rows->email }}</td>
                           <td>{{ $rows->propertyDetails }}</td>
                           <td>{{ $rows->message }}</td>
                           <td>{{ $rows->page_url }}</td>
                           <td>{{ $rows->created_at }}</td>
                           <td>
                              <div class="dropdown float-right">
                                 <a class="dropdown-item delete" data-id="{{ $rows->id}}" href="{{ url('admin/contactlist/delete/'.$rows->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
                                 <i class="fa fa-trash"></i> Delete
                                 </a>
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
</div>
<script type="text/javascript">
   var $property = $('#table tr');
   $('#search').keyup(function() {
       var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
       $property.show().filter(function() {
           var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
           return !~text.indexOf(val);
       }).hide();
   });
    $(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'csv',
            'print',
            'pdf',
            
        ],
        select: true
    } );
} );
jQuery('.delete-all').on('click', function(e) { 
var allVals = [];  

    $('#table tr.selected').each(function() {  
      allVals.push($(this).attr('dataId'));
    });  
     
    if(allVals.length <=0)  
    {  
      alert("Please select row.");  
    }  
    else {  
      //$("#loading").show(); 
      WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";  
      var check = confirm(WRN_PROFILE_DELETE);  
      if(check == true){  
        //for server side
       var join_selected_values = allVals.join(","); 
        $.ajax({   
          
          type: "post",  
          url: "contactlist/deleteContact",  
          headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },
          data: {id:join_selected_values},  
          success: function(response)  
          {   
             $.each(allVals, function( index, value ) {
          $('table tr').filter("[dataId='" + value + "']").remove();
        });
            //referesh table
          }   
        });
              //for client side
       
        
      }  
    }  
  });
</script>
@endsection