@extends('admin.layout.default')
@section('pageTitle', 'Admin | Agents') 
@section('content')
<style>
    
</style>
<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-9">
			          <h4 class="mt-0 mb-3 header-title">Agents</h4>
			        </div>
			        <div class="col-md-3 text-right">
		                <a href="{{ url('admin/agent/store') }}" class="btn btn-sm btn-primary">Add Agent </a>
		            </div>
		        </div>	
				<div class="row">
					 <div class="col-md-3">
                            <div class="form-group">
                                 <input class="form-control" type="text" name="title" id="search" placeholder="Search">
                            </div>
                        </div>
          
			<div class="col-md-12"> 
			    <div class="table-responsive table-wrapper">
					  <table id=table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">S.No</th>
									<th scope="col">Agent Image</th>
									<th scope="col">Agent Name</th>
									<th scope="col">Agent BRN</th>
									<th scope="col">Agent Phone</th>
									<th scope="col">Agent Email</th>
									<th scope="col">Agent Order</th>
									<th class="text-left">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i =1; ?>
								@foreach($agents as $agent)
								 
								<tr>
									<th scope="row">{{ $i++ }}</th>	
																	
									<td>
										 <img src="{{ asset($agent->image) }}" alt="icon" width="100px" height="70px">
										</div>
									</td>
									<td><a href="{{ url('admin/agent/edit/'.$agent->id ) }}" target="_blank">{{ $agent->full_name }}</a></td>
									<td>{{ $agent->agent_brn }}</td>
									<td>{{ $agent->phone }}</td>
									<td>{{ $agent->email }}</td>
									<td>{{ $agent->agent_order }}</td>
									
									<td>
										<div class="dropdown float-left">
											<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
												<i class="mdi mdi-dots-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item edit"  data-data='{{ $agent->id }}' href="{{ url('admin/agent/edit/'.$agent->id ) }}">
												<i class="fa fa-pencil-alt"></i> Edit
												</a>
												<a class="dropdown-item delete" data-id=" {{ $agent->id}}" href="{{ url('admin/agent/delete/'.$agent->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
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
						<div class="justify-content-center">
                                <nav>
                                 <ul class="pagination pagination-rounded mb-0">
                                    {!! $agents->links() !!}
                                 </ul>
                                </nav>
                        </div>
						
			        </div>
			        
				</div>	        
      		</div>
      	</div>
    </div>
</div>

@endsection
