<?php
$currency = session()->get('currency');
if (empty($currency)) {
  $currency =  'AED';
}
?>
@if(count($properties) > 0)
    @foreach($properties as $row) 
    <?php
       //dd($row);
        if($row->price == '0'){
            $price = 'Ask for Price';
            $currencySign = '';
            $class = 'btn_ask';
        }else{
            $class = '';
            $currencySign = $currency;
            $price = number_format(getprice($row->price), 2);
        }
    ?>                                   
    <div class="col-12 col-lg-3">
        <div class="card mb-3 bg-white rounded-0 border-0">
            <div class="row g-0">
                <div class="col-md-12 my-auto">
                    <center>
                        <a href="{{ url('off-plans-property/'.$row->slug) }}">
                            <img src="{{ asset($row->image) }}" class="card-img-top propImage rounded-0" alt="{{$row->title}}" loading="lazy">
                        </a>                                                        
                    </center>
                    <button class="btn btn-pill btnType mb-0"
                        style="font-size:11px;">Off-plan</button>
                </div>
                <div class="col-md-12">
                    <div class="card-body py-2">
                        <div class="d-flex justify-content-between">
                            <p class="card-text priceText mb-0">@if($row->price == '0') {{ $price }} @else AED {{ $price }} @endif</p>
                            <div class="d-flex justify-content-center propDet my-auto">
                                @if($row->bedrooms != 0)<p><i class="fa fa-bed"></i> {{$row->bedrooms}}</p>@endif
                                @if($row->bathrooms != 0)<p><i class="fa fa-shower"></i> {{$row->bathrooms}}</p>@endif
                                @if($row->area != 0)<p><i class="fa fa-map-o"></i> {{$row->area}}sqft</p>@endif
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="text-start">
                                <p class="card-text propNameText mb-0">
                                    <a class="text-decoration-none " href="{{ url('off-Plans-property/'.$row->slug) }}">{{substr_replace($row->title, "...", 25)}}</a>
                                </p>
                                <small class="text-primary">
                                <?php 
                                    echo substr_replace($row->address, "...", 35);
                                    //$address = explode("-",$row->address);
                                    //echo implode(' - ', array_splice($address,0 , 2)); 
                                ?>
                                </small>
                            </div>

                            <div class="d-flex justify-content-center propShare my-auto">
                                <p><i class="bi bi-share-fill"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@else
<div class="col-12 col-lg-12 justify-content-center g-4 mb-5 bg-black" style="text-align: center;height: 300px;padding-top: 20px;margin: 20px;">
     
     <div class="text-center">
        <div class="mainHeadingCent  py-2">No
            <span class="secTextMed text-primary">Matching Property!</span>
        </div>
    </div>
     <p class="text-white"> Try resetting the filters </p><p>
     <a href="{{ url('listing') }}" class="btn btn-color btn-secondary" style="margin-top: 15px;"> Reset Filters </a>
  </p></div>
@endif

<div class="col-12 col-lg-12">
    <center class="d-flex justify-content-center py-4">
       {{ $properties->withQueryString()->links("pagination::bootstrap-4") }} 
    </center>
</div>
