@extends('admin.layout.default')
@section('pageTitle', 'Admin | Laterst Property News') 
@section('content')
<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
      		<div class="card-box">
      			<div class="row">
	      			<div class="col-md-9">
			          <h4 class="mt-0 mb-3 header-title">Laterst Property Blogs</h4>
			        </div>
			        <div class="col-md-3 text-right">
		                <a href="{{ url('admin/blog/add') }}" class="btn btn-sm btn-primary">Add  Blogs </a>
		            </div>
		        </div>	
				<div class="row">
					 <div class="col-md-3">
                            <div class="form-group">
                                 <input class="form-control" type="text" name="title" id="search" placeholder="Search">
                            </div>
                        </div>

				<div class="col-md-12">
					  <table id=table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">S.No</th>
									<th scope="col">Image</th>
									<th scope="col">Title</th>
									<th scope="col">Is Active</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i =1; ?>
								@foreach($blogs as $blog)
								<tr>
									<th scope="row">{{ $i++ }}</th>								
									<td>
										 <img src="{{ asset($blog->image) }}" alt="icon" width="100px" height="70px">
										</div>
									</td>
									<td>{{ $blog->title }}</td>
									<td>
									       @if($blog->is_active == 1)
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
												<a class="dropdown-item edit"  data-data='{{ $blog->id }}' href="{{ url('admin/blog/edit/'.$blog->id ) }}">
												<i class="fa fa-pencil-alt"></i> Edit
												</a>
												<a class="dropdown-item delete" data-id=" {{ $blog->id}}" href="{{ url('admin/blog/delete/'.$blog->id) }}" onclick="return confirm('Are you sure you want to delete this data ?')">
												<i class="fa fa-trash"></i> Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="justify-content-center">
                                <nav>
                                 <ul class="pagination pagination-rounded mb-0">
                                    {!! $blogs->links() !!}
                                 </ul>
                                </nav>
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
</script>
@endsection
