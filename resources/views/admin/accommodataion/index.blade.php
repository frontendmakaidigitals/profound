@extends('admin.layout.default')
@section('pageTitle', 'Admin | Accommodataion') 
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-9">
			          <h4 class="mt-0 mb-3 header-title">Accommodataion</h4>
			        </div>
			        <div class="col-md-3 text-right">
		                <a href="{{ url('admin/accommodataion/add') }}" class="btn btn-sm btn-primary">Add Accommodataion </a>
		            </div>
		        </div>	
				<div class="row">
				<div class="col-md-12">
					  <table id="example" class="table table-hover">
							<thead>
								<tr>
									<th scope="col">S.No</th>
									<th scope="col">Accommodataion Name</th>
									<th scope="col">Is Active</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i =1; ?>
								@foreach($accommodataion as $rows)
								<tr>
									<th scope="row">{{ $i++ }}</th>									
									<td><a href="{{ url('admin/accommodataion/add/'.$rows->id ) }}">{{$rows->name}}</a></td>
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
												<a class="dropdown-item edit"  data-data='{{ $rows->id }}' href="{{ url('admin/accommodataion/add/'.$rows->id ) }}">
												<i class="fa fa-pencil-alt"></i> Edit
												</a>
												<a class="dropdown-item delete" data-id=" {{ $rows->id}}" href="{{ url('admin/accommodataion/delete/'.$rows->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
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
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
