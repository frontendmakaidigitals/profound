@extends('admin.layout.default')

@section('pageTitle', 'Admin | General Setting') 

@section('content')

<style>

.mb-20 {

    margin-bottom: 20px;

}

</style>

<!-- Page content -->

<div class="container-fluid mt--6">

  <div class="row">

    <div class="col-lg-12">

      <div class="card-wrapper">

        <!-- Input groups -->

        <div class="card">

          <!-- Card body -->

          <div class="card-body">

            <!-- Card header -->

            <div class="card-header mb-20">

              <h3 class="mb-0">Bulk SMS Setting</h3>

            </div>

            <!-- End Card header -->

            {{ Form::open(array('url' => Auth::user()->roles()->first()->name.'/generalSetting', 'files' => true, 'class' => '','id'=>'form')) }}             

              <div class="form-group row">

                <label class="col-md-8 col-form-label form-control-label">API KEY</label>

                <div class="col-md-4">

                  <input class="form-control" type="text" name="generalSetting[api_key]" value="{{ $generalSettings['api_key'] }}">

                </div>

              </div>

               <div class="form-group row">

                <label class="col-md-8 col-form-label form-control-label">Application ID</label>

                <div class="col-md-4">

                  <input class="form-control" type="text" name="generalSetting[application_id]" value="{{ $generalSettings['application_id'] }}">

                </div>

               </div>

               <div class="form-group row">

                <label class="col-md-8 col-form-label form-control-label">Message ID</label>

                <div class="col-md-4">

                  <input class="form-control" type="text" name="generalSetting[message_id]" value="{{ $generalSettings['message_id'] }}">

                </div>

               </div>

               <div class="form-group row">

                <label class="col-md-8 col-form-label form-control-label">Sender Id</label>

                <div class="col-md-4">

                  <input class="form-control" type="text" name="generalSetting[sender_id]" value="{{ $generalSettings['sender_id'] }}">

                </div>

               </div>

               <div class="card-header mb-20">

                <h3 class="mb-0">Recaptcha Site Key and Secret Key</h3>

               </div>

               <div class="form-group row">

                <label class="col-md-8 col-form-label form-control-label">Site Key</label>

                <div class="col-md-4">

                  <input class="form-control" type="text" name="generalSetting[site_key]" value="{{ $generalSettings['site_key'] }}">

                </div>

               </div> 

               <div class="form-group row">

                <label class="col-md-8 col-form-label form-control-label">Secret Key</label>

                <div class="col-md-4">                  

                  <input class="form-control" type="text" name="generalSetting[secret_key]" value="{{ $generalSettings['secret_key'] }}">

                </div>

               </div> 

               

               <div class="card-header mb-20">

                <h3 class="mb-0">Social Setting</h3>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Phone</label>

                <div class="col-md-4">

                  <input class="form-control" type="text" name="generalSetting[phone]" value="{{ isset($generalSettings['phone']) ? $generalSettings['phone'] : '' }}">

                </div>

               </div> 

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Mail</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[mail]" value="{{ isset($generalSettings['mail']) ? $generalSettings['mail'] : '' }}">

                  </div>

               </div> 

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Address</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[address]" value="{{ isset($generalSettings['address']) ? $generalSettings['address'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Facebook</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[facebook]" value="{{ isset($generalSettings['facebook']) ? $generalSettings['facebook'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Twitter</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[twitter]" value="{{ isset($generalSettings['twitter']) ? $generalSettings['twitter'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Linkedin</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[linkedin]" value="{{ isset($generalSettings['linkedin']) ? $generalSettings['linkedin'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Instagram</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[instagram]" value="{{ isset($generalSettings['instagram']) ? $generalSettings['instagram'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Vimeo</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[vimeo]" value="{{ isset($generalSettings['vimeo']) ? $generalSettings['vimeo'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Behance</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[behance]" value="{{ isset($generalSettings['behance']) ? $generalSettings['behance'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Yoast</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[yoast]" value="{{ isset($generalSettings['yoast']) ? $generalSettings['yoast'] : '' }}">

                  </div>

               </div>

               <div class="form-group row">

                  <label class="col-md-8 col-form-label form-control-label">Pinterest</label>

                  <div class="col-md-4">

                    <input class="form-control" type="text" name="generalSetting[pinterest]" value="{{ isset($generalSettings['pinterest']) ? $generalSettings['pinterest'] : '' }}">

                  </div>

               </div>

                <div class="card-header mb-20">

                <h3 class="mb-0">Home Page Video</h3>

               </div>
               <div class="row">
                   <div class="col-md-12">

                      <div class="form-group row">

                          <label class="col-md-4 col-form-label form-control-label">Desktop Screen </label>
                          <div class="col-md-4">
                              <video autoplay="" loop="" muted="" playsinline="" preload="metadata" src="{{ isset($generalSettings['desktop_home_video']) ? asset($generalSettings['desktop_home_video']) : '' }}" style="width:300px">
                                    <source src="{{ isset($generalSettings['desktop_home_video']) ? asset($generalSettings['desktop_home_video']) : '' }}" type="video/mp4"  >
                                </video>
                          </div>
        
                          <div class="col-md-4">
        
                            <input class="form-control" type="file" name="generalSetting[desktop_home_video]" accept="video/mp4,video/x-m4v,video/*">
        
                          </div>
        
                       </div>
                       
                       <div class="form-group row">

                          <label class="col-md-4 col-form-label form-control-label">Mobile Screen</label>
                          <div class="col-md-4">
                               <video autoplay="" loop="" muted="" playsinline="" preload="metadata" src="{{ isset($generalSettings['mobile_home_video']) ? asset($generalSettings['mobile_home_video']) : '' }}"  style="height:200px">
                                     <source src="{{ isset($generalSettings['mobile_home_video']) ? asset($generalSettings['mobile_home_video']) : '' }}" type="video/mp4">
                                </video>
                          </div>
        
                          <div class="col-md-4">
        
                            <input class="form-control" type="file" name="generalSetting[mobile_home_video]"}}" accept="video/mp4,video/x-m4v,video/*">
        
                          </div>
        
                       </div>
    
                    </div>
               </div>

               <div class="card-header mb-20">

                <h3 class="mb-0">Footer Map Address</h3>

               </div>

               <div class="row">
<!-- 
               <div class="col-md-12">

                  <div class="form-group">

                      <label for="email"> Address </label>

                      <input type="text" id="address-input" name="generalSetting[address]" class="form-control map-input" value="{{ isset($generalSettings['address']) ? $generalSettings['address'] : '' }}">

                      <input type="hidden" name="generalSetting[address_latitude]" id="address-latitude" value="{{ isset($generalSettings['address_latitude']) ? $generalSettings['address_latitude'] : '' }}" />

                      <input type="hidden" name="generalSetting[address_longitude]" id="address-longitude" value="{{ isset($generalSettings['address_longitude']) ? $generalSettings['address_longitude'] : '' }}" />

                  </div>

                </div> -->
                <div class="col-md-12">

                  <div class="form-group">

                      <label for="email"> Map Address </label>

                      <input type="text" id="address-input" name="generalSetting[iframe]" class="form-control map-input" value="{{ isset($generalSettings['iframe']) ? $generalSettings['iframe'] : '' }}">

                  </div>

                </div>

                <div class="col-md-12">

                    <div class="form-group">

                    <div id="address-map-container" style="width:100%;height:400px; ">
                        <?php 
                            $generalSettings = App\Models\Setting::pluck('value','key'); 
                        ?>
                      <!-- <div style="width: 100%; height: 100%" id="address-map"></div> -->
                      <div style="width: 100%; height: 100%" id="address-map">
                          <iframe src="{{ isset($generalSettings['iframe']) ? $generalSettings['iframe'] : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54178.23496348469!2d55.10794506185425!3d25.085376554100314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b61f5952e37%3A0x599a5b5e5779a50c!2sProfound%20Realtors!5e0!3m2!1sen!2sin!4v1671711000346!5m2!1sen!2sin' }}" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                              
                          </iframe>
                      </div>

                    </div>

                  </div>

                </div>

               </div>

               

               <div class="row mt-3">

                <div class="col-md-12">

                  <div class="form-group">

                    <div class="pull-right text-right">

                      <button type="submit" class="btn btn-primary my-4">Save Settings</button>

                    </div>

                  </div>

                </div>

              </div>

            {{ Form::close() }}



            

          </div>

        </div>

      </div>

    </div>

  </div>

  

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