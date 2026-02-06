@extends('admin.layout.default')
@section('pageTitle', 'Admin | Neighbourhoods') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-9">
			          <h4 class="mt-0 mb-3 header-title">Neighbourhoods</h4>
			        </div>
			        <div class="col-md-3 text-right">
		                <a href="{{ url('admin/neighbourhoods/add') }}" class="btn btn-sm btn-primary">Add Neighbourhoods </a>
		            </div>
		        </div>	
				<div class="row">
				<div class="col-md-12">
					  <table  id=table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">S.No</th>
									<th scope="col">Neighbourhoods Name</th>
									<th scope="col">Is Active</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i =1; ?>
								@foreach($neighbourhoods as $rows)
								<tr>
									<th scope="row">{{ $i++ }}</th>									
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
												<a class="dropdown-item edit"  data-data='{{ $rows->id }}' href="{{ url('admin/neighbourhoods/add/'.$rows->id ) }}">
												<i class="fa fa-pencil-alt"></i> Edit
												</a>
												<a class="dropdown-item delete" data-id=" {{ $rows->id}}" href="{{ url('admin/neighbourhoods/delete/'.$rows->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
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
				<!--<div class="row">
				    <div class="col-md-12">
				        
				    </div>
				</div>-->
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
@endsection
