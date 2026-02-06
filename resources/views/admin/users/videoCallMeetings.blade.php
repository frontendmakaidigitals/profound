@extends('admin.layout.default')

@section('pageTitle', 'Admin | Video Call Meetings') 

@section('content')



<div class="container-fluid">

	<div class="row">

    	<div class="col-12">

      		<div class="card-box">

      			<div class="row">

	      			<div class="col-md-9">

			          <h4 class="mt-0 mb-3 header-title">Video Call Meetings</h4>

			        </div>

			        <div class="col-md-3 text-right">

		               <!--  <a href="{{ url('admin/developers/store') }}" class="btn btn-sm btn-primary">Add Developer</a> -->

		            </div>

		        </div>	

				<div class="row">

				<div class="col-md-12">

					  <table class="table table-hover">

							<thead>

								<tr>

									<th scope="col">#</th>

									<th scope="col">Name</th>

									<th scope="col">Email</th>

									<th scope="col">Date</th>

									<th scope="col">Time</th>

									<th scope="col">Question</th>

								</tr>

							</thead>

							<tbody>

								<?php $i =1; ?>

								@foreach($videocalls as $row)

								<tr>

									<th scope="row">{{ $i++ }}</th>

                                    <td>{{$row->name}}</td>								

									<td>{{$row->email}}</td>

									<td>{{$row->date}}</td>

									<td>{{$row->time}}</td>

									<td>{{$row->question}}</td>

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

