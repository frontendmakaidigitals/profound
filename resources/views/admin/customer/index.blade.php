@extends('admin.layout.default')
@section('pageTitle', 'Admin | Customers') 
@section('content')

<div class="container-fluid">  
  <div class="row">
    <div class="col-12">
      <div class="card-box">
        <form action="" method="get">
          <div class="row">
            <div class="col-md-9">
              <h4 class="mt-0 mb-3 header-title">Customers</h4>
            </div>
            <div class="col-md-3 text-right">
                <a href="{{ request()->has('action') ? request()->fullUrl().'&export=1' : request()->fullUrl().'?export=1'  }}" class="btn btn-sm btn-primary search_clear_btn"><i class="fa fa-download"></i> Export</a>
                @if(\Request::get('action') == 'submit_filter')
                <a class="btn btn-sm btn-warning search_clear_btn" href="{{ url(Auth::user()->roles()->first()->name.'//customers') }}">Clear Search</a>
                @endif
            </div>            
          </div>
        </form>
        
        <div class="table-responsive">
        <table id="datatable" class="table">
          <thead>
            <tr>
              <th width="15px">#</th>
              <th>Name</th>
              <!-- <th>Email</th> -->
              <th>Phone</th>
              <th>Chasis Number</th>
              <th>Application</th>
              <th>Others Application</th>
              <th>Agree for Call</th>
              <th>Agree for Whatsapp</th>
              <th>Ragistration Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1; ?>
            @foreach($customers as $customer)
            <?php $getApplication = \App\Models\Application::find($customer->application); ?>
            <tr>
              <td width="15px">{{ $i++ }}</td>
              <td>{{ $customer->full_name }}</td>
              <!-- <td>{{ ($customer->email)?$customer->email:'N/A' }}</td> -->
              <td>{{  $customer->phone }}</td>
              <td>{{ $customer->chasis_number }}</td>
              <td>{{ $getApplication ? $getApplication['title'] : 'N/A' }}</td>
              <td>{{ ($customer->others_application)?$customer->others_application:'N/A' }}</td>
              <td>
                @if($customer->agree_tnc=='on')
                <span href="javascript:void(0);" class="badge badge-success">Yes</span>
                @else
                <span href="javascript:void(0);" class="badge badge-danger">No</span>
                @endif
              </td>
              <td>
                @if($customer->agree_for_whatsapp=='on')
                <span href="javascript:void(0);" class="badge badge-success">Yes</span>
                @else
                <span href="javascript:void(0);" class="badge badge-danger">No</span>
                @endif                
              </td>
              <td>{{ $customer->created_at->format('d/m/Y') }}</td>
              <td>
                @if($customer->status=='Active')
                  <a href="javascript:void(0);" class="badge badge-success statusChange" data-id="{{$customer->id}}">Active</a>
                @else
                  <a href="javascript:void(0);#" class="badge badge-danger statusChange" data-id="{{$customer->id}}">Inactive</a>
                @endif
              </td>
              <td>
                <div class="dropdown float-right">
                  <a href="javascript:void(0);" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item editCustomer" data-data="{{ $customer }}" href="{{ url('admin/customers/edit/'.$customer->id ) }}">
                      <i class="fa fa-pencil-alt"></i> Edit 
                    </a>
                    <a class="dropdown-item "  data-id="{{ $customer->id}}" href="{{ url('admin/customer/delete/'.$customer->id)}}" onclick="return confirm('Are you sure?')">
                      <i class="fa fa-trash"></i> Delete 
                    </a>
                    <!-- <a class="dropdown-item sendMailToCustomer" data-id="{{ $customer->id }}" href="javascript:void(0);">
                      <i class="fa fa-envelope"></i> Send mail to customer <i class="fa fa-spinner fa-spin" id="spin_loader1" style="display:none"></i>
                    </a> -->
                    <!-- <a class="dropdown-item sendMailToAdmin" data-id="{{ $customer->id }}" href="javascript:void(0);">
                      <i class="fa fa-envelope"></i> Send mail to admin <i class="fa fa-spinner fa-spin" id="spin_loader2" style="display:none"></i>
                    </a> -->
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
  <!-- end row -->
</div>

<!-- Modal -->
<div id="editCustomerModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title exp_heading">Update customer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <!--begin::Form-->
                {{ Form::open(array('url' => 'admin/customer/update', 'files' => true, 'class' => '','id'=>'form')) }}
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>Custome Name</label>
                                {{Form::text('first_name',null,array('class'=>'form-control required','id'=>'first_name')) }}
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                {{Form::text('phone',null,array('class'=>'form-control required','id'=>'phone')) }}
                           </div>
                             <div class="form-group">
                                <label>Chasis Number</label>
                                {{Form::text('chasis_number',null,array('class'=>'form-control required','id'=>'chasis_number')) }}
                            </div>
                          <div class="form-group">
                                <label>Application Number</label>
                                {{Form::text('application',null,array('class'=>'form-control required','id'=>'application')) }}
                            </div>
                           <div class="form-group">
                                <label>Other Application</label>
                                {{Form::text('others_application',null,array('class'=>'form-control required','id'=>'others_application')) }}
                           </div>
                             <div class="form-group">
                                <label>Agree for Call</label>
                                {{Form::select('agree_tnc',['on'=>'Yes','off'=>'No'],null,array('class'=>'form-control required','id'=>'agree_tnc')) }}
                            </div>
                            <div class="form-group">
                                <label>Agree to Whatsapp</label>
                                {{Form::select('agree_for_whatsapp',['off'=>'No','on'=>'Yes'],null,array('class'=>'form-control required','id'=>'agree_for_whatsapp')) }}
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20">
                    {{Form::hidden('hid_id',null,array('id'=>'hid_id')) }}
                        <button type="submit" class="btn btn-primary btn-rounded float-right">SUBMIT <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection