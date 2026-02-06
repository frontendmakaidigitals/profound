@extends('admin.layout.default')
@section('content')
@section('pageTitle', 'Dashboard')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-4">Users</h4>       
                <h2 class="font-weight-normal pt-1 mb-1">
                  <strong>
                    <a href="{{ url('admin/customers') }}">{{ count($users) }}</a>
                  </strong>
                </h2>
            </div>
        </div>
    <!--     <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-4">Applications</h4>       
                <h2 class="font-weight-normal pt-1 mb-1">
                  <strong>
                    <a href="{{ url('admin/applications') }}">{{ count($applications) }}</a>
                  </strong>
                </h2>
            </div>
        </div> -->
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-4">Sliders</h4>       
                <h2 class="font-weight-normal pt-1 mb-1">
                  <strong>
                    <a href="{{ url('admin/sliders') }}">{{ count($sliders) }}</a>
                  </strong>
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- container -->

<script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!--script>

function get_sales_chart(type){
    $.ajax({  
        url: "{{ url('admin/getsalesReport') }}",
        data: {
            _token: "{{ csrf_token() }}",
            type: type
        },
        type: 'POST',
        success:function(response){
            console.log(response);
            $("#sales_chart").html(response.data);
        },
        error:function(status,error){

        }     
    });     
}
  get_sales_chart('Weekly');

//get sales count
function get_sales_chart_count(type){
    $.ajax({  
        url: "{{ url('admin/getsalesReportCount') }}",
        data: {
            _token: "{{ csrf_token() }}",
            type: type
        },
        type: 'POST',
        success:function(response){
            console.log(response);
            $("#sales_chart_count").html(response.data);
        },
        error:function(status,error){
        
        }     
    });     
}
get_sales_chart_count('Weekly');
  
jQuery(document).ready(function(){
    jQuery('.chartHeading').click(function(){
        var chartHeadingText = jQuery(this).text();
        var finlyHeadingText = chartHeadingText+ " Sales";
        jQuery('#sales_heading').text(' ');
        jQuery('#sales_heading').text(finlyHeadingText);
    });
    jQuery('.chartHeadingCount').click(function(){
        var chartHeadingText = jQuery(this).text();
        var finlyHeadingText = chartHeadingText+ " Orders";
        jQuery('#sales_heading_count').text(' ');
        jQuery('#sales_heading_count').text(finlyHeadingText);
    });
});
 
</script-->
@endsection