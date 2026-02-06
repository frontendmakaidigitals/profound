@extends('admin.layout.default')
@section('pageTitle', 'Admin | Developer') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-9">
			          <h4 class="mt-0 mb-3 header-title">Developer</h4>
			        </div>
			        <div class="col-md-3 text-right">
		                <a href="{{ url('admin/developers/store') }}" class="btn btn-sm btn-primary">Add Developer</a>
		            </div>
		        </div>	
				<div class="row">
				<div class="col-md-12">
					  <table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">S.No</th>
									<th scope="col">Title</th>
									<th scope="col">Developer Logo</th>
									<th scope="col">Founded In</th>
									<th scope="col">Based In</th>
									<th scope="col">No of Employees</th>
									<th scope="col">Valuation</th>
									<th scope="col">Description</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i =1; ?>
								@foreach($developers as $developer)
								<tr>
									<th scope="row">{{ $i++ }}</th>
                                    <td>{{$developer->title}}</td>
									<td>
										<div class="det btn-dark text-center">
											<img src="{{ asset($developer->dev_logo) }}" alt="" width="100px" height="50px">
										</div>
									</td>									
									<td>{{$developer->founded_in}}</td>
									<td>{{$developer->based_in}}</td>
									<td>{{$developer->employees}}</td>
									<td>{{$developer->valuation}}</td>
									<?php $des = strip_tags($developer->description);?> 
									<td><?php echo  $str = substr($des, 0, 30)?></td>
									<td>
										<div class="dropdown float-right">
											<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
												<i class="mdi mdi-dots-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item edit"  data-data='{{ $developer->id }}' href="{{ url('admin/developers/edit/'.$developer->id ) }}">
												<i class="fa fa-pencil-alt"></i> Edit
												</a>
												<a class="dropdown-item delete" data-id=" {{ $developer->id}}" href="{{ url('admin/developers/delete/'.$developer->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
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
    $('.table').DataTable();
} );
</script>
@endsection
