@extends('admin.layout.default')
@section('pageTitle', 'Admin | Banners') 
@section('content')

<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-9">
			          <h4 class="mt-0 mb-3 header-title">Banners</h4>
			        </div>
			        <div class="col-md-3 text-right">
		                <a href="{{ url('admin/slider/store') }}" class="btn btn-sm btn-primary">Add Banner</a>
		            </div>
		        </div>	
				<div class="row">
				<div class="col-md-12">
					  <table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">S.No</th>
									<th scope="col">Image</th>
									<th scope="col">Main Title</th>
									<th scope="col">Page URL</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i =1; ?>
								@foreach($sliders as $slider)
								<tr>
									<th scope="row">{{ $i++ }}</th>
									<td>
										<div class="">
											<img src="{{ asset($slider->image) }}" alt="" width="100px" height="50px">
										</div>
									</td>									
									<td>{{$slider->heading_one}}</td>
									<td>{{$slider->page_url}}</td>
									<td>
										<div class="dropdown float-right">
											<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
												<i class="mdi mdi-dots-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item edit"  data-data='{{ $slider->id }}' href="{{ url('admin/slider/edit/'.$slider->id ) }}">
												<i class="fa fa-pencil-alt"></i> Edit
												</a>
												<a class="dropdown-item delete" data-id=" {{ $slider->id}}" href="{{ url('admin/slider/delete/'.$slider->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
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
