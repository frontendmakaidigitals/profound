@extends('admin.layout.default')

@section('pageTitle', 'Edit Property') 

@section('content')



<div class="container-fluid">

    <div class="row">

        <div class="col-12">

            <div class="card-box">

                <div class="row">

                    <div class="col-md-12">

                        <h4 class="mt-0 mb-3 header-title">Edit Property</h4>

                    </div>

                </div>

                <form class="mt-3" action="{{ url('admin/property/edit/'.$property->id) }}" id="form">

                    @csrf  

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email">Main Image </label>

                                <input class="form-control" type="file" name="main_image">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> Cover Image </label>

                                <input class="form-control" type="file" name="cover_image">

                            </div>

                        </div>
                        
                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> QR Code Image </label>

                                <input class="form-control" type="file" name="qrcode">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> Main Title </label>

                                <input class="form-control" type="text" value="{{ !empty($property)?$property->main_title:''}}" name="main_title" required>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> Sub Title </label>

                                <input class="form-control" type="text"  value="{{ !empty($property)?$property->sub_title:''}}" name="sub_title">

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="email"> Title </label>

                                <input class="form-control" type="text" value="{{ !empty($property)?$property->title:''}}" name="title" required>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Meta Title </label>
                                <input class="form-control" type="text" value="{{ !empty($property)?$property->meta_title:''}}" name="meta_title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Meta Keywords </label>
                                <input class="form-control" type="text" value="{{ !empty($property)?$property->meta_keyword:''}}" name="meta_keyword" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Meta Description </label>
                                <textarea class="form-control" name="meta_description" rows="3">{{ !empty($property)?$property->meta_description:''}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="email"> Description </label>

                                <textarea class="form-control ckeditor" id="description" rows="6" 

                               name="description">{{ !empty($property)?$property->description:''}}</textarea>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="email"> Features </label>

                                <textarea class="form-control ckeditor" id="features" rows="6" name="features" >{{ !empty($property)?$property->features:''}}</textarea>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="amenities"> Amenities </label>

                                 {{ Form::select('amenity_id[]',$amenitiess,$property->amenities,['class'=>'form-control basic-multiple','multiple']) }}

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="email">Amenity Desription</label>

                                <textarea class="form-control ckeditor" rows="6" id="amenities_description" name="amenities_description">{{ !empty($property)?$property->amenities_description:''}}</textarea>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email">Area</label>

                                <input class="form-control" type="text" value="{{ !empty($property)?$property->area:''}}" name="area">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email">Bedrooms</label>

                                <!-- <input class="form-control" type="number" min="0"  value="{{ !empty($property)?$property->bedrooms:''}}"   name="bedrooms" required> -->

                                {{ Form::select('bedrooms[]',$bedrooms,$property->propertyBedrooms,['class'=>'form-control basic-multiple','multiple','required']) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email">Bathrooms</label>

                                <input class="form-control" type="number" min="0" value="{{ !empty($property)?$property->bathrooms:''}}"  name="bathrooms">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email">Parking Space</label>

                                <input class="form-control" type="number" min="0" value="{{ !empty($property)?$property->parking_space:''}}"   name="parking_space">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="accommodation">Accommodation</label>

                                 {{ Form::select('accommodataion_id[]',$accommodataion,$property->accommodataions,['class'=>'form-control basic-multiple','multiple','required']) }}                        

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="neighbourhoods">Neighbourhoods</label>

                                {{ Form::select('neighbourhoods_id[]',$neighbourhoods,$property->neighbourhoodss,['class'=>'form-control basic-multiple','multiple','required']) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="neighbourhoods">Specifications</label>

                                {{ Form::select('specifications_id[]',$specification,$property->specifications,['class'=>'form-control basic-multiple','multiple']) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="status">Status</label>

                                {{ Form::select('status_id',$statuses,$property->status,['class'=>'form-control','required']) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="status"> Category </label>

                                {{ Form::select('category_id',$categories,$property->category,['class'=>'form-control']) }}

                            </div>

                        </div>



                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="status"> Communities </label>

                                {{ Form::select('communities_id',$communities,$property->communities,['class'=>'form-control','required']) }}

                            </div>

                        </div>





                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> price </label>

                                <input class="form-control" type="number" min="0" value="{{ !empty($property)?$property->price:''}}"  name="price" required>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email">Is Active</label>

                                {{ Form::select('is_active',[1=>'Active',2=>'Inactive'],$property->is_active,['class'=>'form-control','required']) }}

                            </div>

                        </div>



                         <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> Property Type </label>

                                {{ Form::select('property_type',[1=>'Featured',2=>'All-properties',5=>'Other'],$property->property_type,['class'=>'form-control','required']) }}

                            </div>

                        </div>



                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> Rating </label>

                                {{ Form::select('rating',[1=>'1',2=>'2',3=>'3',4=>'4',5=>'5'],$property->rating,['class'=>'form-control']) }}

                            </div>

                        </div>







                         <div class="col-md-12">

                            <div class="form-group">

                                <label for="email"> Address </label>

                                <input type="text" id="address-input" name="address"  value="{{ !empty($property)?$property->address:''}}"  class="form-control map-input">

                                 <input type="hidden" name="address_latitude" id="address-latitude" value="{{ !empty($property)?$property->address_latitude:''}}" />

                                 <input type="hidden" name="address_longitude" id="address-longitude" value="{{ !empty($property)?$property->address_longitude:''}}" />

                            </div>

                        </div>



                          <div class="col-md-12">

                             <div class="form-group">

                              <div id="address-map-container" style="width:100%;height:400px; ">

                                <div style="width: 100%; height: 100%" id="address-map"></div>

                              </div>

                            </div>

                          </div>







                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="email"> Developer </label>

                                {{ Form::select('developer',$developer,$property->developer,['class'=>'form-control']) }}

                            </div>

                         </div>



                

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> Brochure (PDF*)</label>

                                <input class="form-control" type="file" name="brochure">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="email"> Floor Plan (PDF*) </label>

                                <input class="form-control" type="file" name="floor_plan">

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="email"> Gallery Image </label>

                                <input class="form-control" type="file" name="galleryimage[]" multiple>

                            </div>

                        </div>
                        
                        <div class="col-md-6">

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="is_feature" name="is_feature" value="1" @if($property->is_feature) checked @endif>
                              <label class="form-check-label">Is Feature?</label>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">  

                            <button type="submit" class="btn btn-primary">Submit <i class="fa fa-spinner fa-spin" style="display:none;"></i></button>

                            <a href="{{ url('admin/property') }}" class="btn btn-primary my-4">Back</a>

                        </div>

                    </div>

                </form>          

            </div>

        </div>

    </div>

</div>

</div>



<script type="text/javascript">

   $(document).ready(function() {

       $('.basic-multiple').select2();

   });

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChuU-X16agmkNHRIw5mqaFTcsMsSlASBs&libraries=places&callback=initialize" async defer></script>

<script>

function initialize() {



    $('form').on('keyup keypress', function(e) {

        var keyCode = e.keyCode || e.which;

        if (keyCode === 13) {

            e.preventDefault();

            return false;

        }

    });

    const locationInputs = document.getElementsByClassName("map-input");



    const autocompletes = [];

    const geocoder = new google.maps.Geocoder;

    for (let i = 0; i < locationInputs.length; i++) {



        const input = locationInputs[i];

        const fieldKey = input.id.replace("-input", "");

        const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';



        const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;

        const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;



        const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {

            center: {lat: latitude, lng: longitude},

            zoom: 13

        });

        const marker = new google.maps.Marker({

            map: map,

            position: {lat: latitude, lng: longitude},

        });



        marker.setVisible(isEdit);



        const autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.key = fieldKey;

        autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});

    }



    for (let i = 0; i < autocompletes.length; i++) {

        const input = autocompletes[i].input;

        const autocomplete = autocompletes[i].autocomplete;

        const map = autocompletes[i].map;

        const marker = autocompletes[i].marker;



        google.maps.event.addListener(autocomplete, 'place_changed', function () {

            marker.setVisible(false);

            const place = autocomplete.getPlace();



            geocoder.geocode({'placeId': place.place_id}, function (results, status) {

                if (status === google.maps.GeocoderStatus.OK) {

                    const lat = results[0].geometry.location.lat();

                    const lng = results[0].geometry.location.lng();

                    setLocationCoordinates(autocomplete.key, lat, lng);

                }

            });



            if (!place.geometry) {

                window.alert("No details available for input: '" + place.name + "'");

                input.value = "";

                return;

            }



            if (place.geometry.viewport) {

                map.fitBounds(place.geometry.viewport);

            } else {

                map.setCenter(place.geometry.location);

                map.setZoom(17);

            }

            marker.setPosition(place.geometry.location);

            marker.setVisible(true);



        });

    }

}



function setLocationCoordinates(key, lat, lng) {

    const latitudeField = document.getElementById(key + "-" + "latitude");

    const longitudeField = document.getElementById(key + "-" + "longitude");

    latitudeField.value = lat;

    longitudeField.value = lng;

}

 

  

</script>

@endsection