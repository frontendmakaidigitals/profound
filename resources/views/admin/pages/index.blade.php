@extends('admin.layout.default')
@section('pageTitle', 'Admin | Pages') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-9">
			          <h4 class="mt-0 mb-3 header-title">Pages</h4>
			        </div>
			        <div class="col-md-3 text-right">
		                <a href="{{ url('admin/page/store') }}" class="btn btn-sm btn-primary">Add Page</a>
		            </div>
		        </div>	
				<div class="row">
				<div class="col-md-12">
					  <table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Sr. No.</th>
									<th scope="col">Page Name</th>
									<th scope="col">Page Heading</th>
									<th scope="col">Description</th>									
									<th scope="col">Page URL</th>
									<th scope="col">Image</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i =1; ?>
								@foreach($pages as $page)
								<?php $des = str_replace(['<p>', '</p>'], '', $page->page_desc); ?>
								<tr>
									<th scope="row">{{ $i++ }}</th>									
									<td><a href="{{ url('admin/page/edit/'.$page->id) }}" class="">{{$page->page_name }}</a></td>
									<td>{{$page->page_heading }}</td>
									<td><?php echo mb_strimwidth($des, 0, 100, '...' ); ?></td>
									<td>{{$page->page_url }}</td>
									<td>
										<div class="">
											<img src="{{ asset($page->image ) }}" alt="" width="100px" height="50px">
										</div>
									</td>
									<td>
										<div class="dropdown float-right">
											<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
												<i class="mdi mdi-dots-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item edit"  data-data='{{ $page->id }}' href="{{ url('admin/page/edit/'.$page->id ) }}">
												<i class="fa fa-pencil-alt"></i> Edit
												</a>
												<a class="dropdown-item delete" data-id=" {{ $page->id}}" href="{{ url('admin/page/delete/'.$page->id) }}" onclick="return confirm('Are you sure?')">
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
@endsection

