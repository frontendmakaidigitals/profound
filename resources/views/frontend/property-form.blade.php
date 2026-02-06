<form id="searchForm" action="{{ url('off-Plans') }}" method="GET" enctype="multipart/form-data">

    <div class="d-flex flex-row justify-content-center bg-white flexBoxMain">

        <div class="p-2 flex-fill bd-highlight border-end d-flex">
            <select name="status" id="property_status" class="form-select formSel" >
                @foreach($statuses as $row)
                <option value="{{ $row->id }}"> {{ $row->name }} </option>
                @endforeach
                
            </select>
        </div>
        <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
            <select name="neighbourhood[]" id="neighbourhood" placeholder="All Neighbourhoods" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                <!--<option value="">All Neighbourhoods</option>-->
                @foreach($neighbourhoods as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
            <select name="accommodation[]" id="accommodation" placeholder="Property Type" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                <!--<option value="">Property Type</option>-->
                @foreach($accommodataion as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
            <select name="bedroom[]" id="bedroom" placeholder="No. of Bedrooms" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true"> 
                <!--<option value="">No. of Bedrooms</option>-->
                <option value="1" <?php if(request()->bedroom == 1){ echo 'selected'; } ?>>1 Bedrooms</option>
                <option value="2" <?php if(request()->bedroom == 2){ echo 'selected'; } ?>>2 Bedrooms</option>
                <option value="3" <?php if(request()->bedroom == 3){ echo 'selected'; } ?>>3 Bedrooms</option>
                <option value="4" <?php if(request()->bedroom == 4){ echo 'selected'; } ?>>4 Bedrooms</option>
                <option value="5" <?php if(request()->bedroom == 5){ echo 'selected'; } ?>>5 Bedrooms</option>
                <option value="6" <?php if(request()->bedroom == 6){ echo 'selected'; } ?>>6 Bedrooms</option>
                <option value="7" <?php if(request()->bedroom == 7){ echo 'selected'; } ?>>7 Bedrooms</option>
            </select>
        </div>
        <div class="p-2 flex-fill bd-highlight border-end d-flex">
            <input type="text" name="minprice" id="minprice" class="form-control" placeholder="Min Price" >
            <!--<select name="minprice" id="minprice" class="form-select formSel">
                <option value="">Min Price</option>
                <option value="100000">AED 100000</option>
                <option value="200000">AED 200000</option>
                <option value="300000">AED 300000</option>
            </select>-->
        </div>
        <div class="p-2 flex-fill bd-highlight d-flex">
            <input type="text" name="maxprice" id="maxprice" class="form-control" placeholder="Max Price">
            <!--<select name="maxprice" id="maxprice" class="form-select formSel">
                <option value="">Max Price</option>
                <option value="1000000">AED 1000000</option>
                <option value="2000000">AED 2000000</option>
                <option value="3000000">AED 3000000</option>
            </select>-->
        </div>
        <div class="flex-fill bd-highlight d-grid">
            <button name="search" value="search" class="btn btn-primary btnSearch" type="submit">SEARCH</button>
        </div>
    </div>
    <div class="advncSearch" style="display:none;">
        <div class="advSearClose mt-4" style="display: none;"><a><i class="bi bi-x-square"></i></a>
        </div>
        <div class="d-flex flex-row justify-content-center bg-white mt-3 flexBoxMain">

            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                <select name="amenities[]" id="amenities" placeholder="All Amenities" class="form-select formSel selectpicker" multiple aria-label="Default select example" data-live-search="true">
                @foreach($amenities as $row)
                <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
            </div>
            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                <input type="text" name="min_area" id="area" class="form-control" placeholder="Min Area">
            </div>
            <div class="p-2 flex-fill bd-highlight border-end d-flex">
                <input type="text" name="max_area" id="area" class="form-control" placeholder="Max Area">
            </div>
            <div class="p-2 flex-fill bd-highlight border-end d-flex formMul">
                <select name="furnished" id="furnished" placeholder="Furnished / Unfurnished"  class="form-select formSel selectpicker">
                    <option value="">N/A</option>
                    <option value="Furnished">Furnished</option>
                    <option value="Not Furnished">Not Furnished</option>
                </select>
            </div>
            <!--<div class="p-2 flex-fill bd-highlight d-flex">
                <select name="parking" id="parking" class="form-select formSel">
                    <option value="">Parking</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>-->

        </div>
        <div class="communitiesDiv mt-3">
            
            @foreach($communities as $row)
            <?php $count = \App\Models\Property::where('communities', '=', $row->id)->count(); ?>
            @if($count > 0)
            <div class="comRdBtn">
                <input type="checkbox" name="community[]" id="community_{{$row->id}}" value="{{$row->id}}" />
                <label for='community_{{$row->id}}'>{{ $row->name }}({{$count}})</label>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</form>