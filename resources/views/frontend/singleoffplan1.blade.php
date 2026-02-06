@extends('frontend.layout.default')

@if($property->meta_title != "")
    @section('title', $property->meta_title)
@else
    @section('title', $property->title)
@endif
@if($property->meta_description != "")
    @section('pageDescription', $property->meta_description)
@else
    @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')

@endif
@if($property->meta_keyword != "")
    @section('pageKeyword', $property->meta_keyword)
@else
    @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
@endif
@section('content')



<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>


<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> 

<style>
.price, .square{
    font-weight: 400 !important;
}
.start-price{
    font-size: 16px;
}
.price{
    font-size: 22px !important;
}
.wrap-gallery-image{
display:flex;
}
.tf-button-primary:hover, .tf-button-primary:focus {
    color: #000;
}
.modal-content fieldset, .modal-content .button-submit{
    visibility: visible !important;
}
.iti{
    width: 100%;
}
@media(max-width:768px){
    .price{
        font-size:18px !important;
    }
    .start-price{
    font-size: 14px;
}
.column-reverse{
flex-direction: column;
}
.column-reverse a{
margin:10px 0;
}
.wrap-gallery-image{
flex-direction: column;
}
}
@media(min-width:767px){
.mr-5{
margin-right:30px
}
.wrap-gallery-image a {
    width: 50%;
}
}
</style>

<style>
    .Property-detail-hero{
        background: url("{{asset($property->image)}}");
        height: 90vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position:center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color:#fff;
        border-radius:20px;
        margin-top:30px;
        gap:30px;
    }
    .Property-detail-hero::before {
    content: '';
    background: linear-gradient(0deg, #000000a3, transparent);
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    overflow: hidden;
    z-index: 0;
    width: 100%;
    border-radius: 20px;
}
.Property-detail-hero-content {
    z-index: 1;
    position: relative;
}
.Property-detail-hero-content h1 {
    color: #fff;
    font-size: 55px;
}
.Property-detail-hero-content p {
    color: #fff;
    font-size: 24px;
    font-weight: 400;
}
a.Property-detail-btn-1 {
    background: #E7C973;
    display: inline-block;
    margin: 15px 0 0 0;
    padding: 15px 25px;
    color: #000;
    font-size: 15px;
    border-radius: 15px;
    font-weight: 500;
    transition-duration: 500ms;
    cursor: pointer;
}
a.Property-detail-btn-1:hover{
    background: #000;
    color: #E7C973;
}
a.Property-detail-btn-2 {
    background: transparent;
    display: inline-block;
    margin: 15px 0 0 0;
    padding: 15px 25px;
    color: #000;
    font-size: 15px;
    border: 1px solid #E7C973;
    border-radius: 15px;
    font-weight: 500;
    transition-duration: 500ms;
    cursor: pointer;
}
a.Property-detail-btn-2:hover{
    background: #E7C973;
    color: #000;
}
.Property-detail-section-2{
    margin: 20px 0 50px 0;
}
.Property-detail-section-2-head {
    display: flex;
    justify-content: space-between;
}
.Property-detail-section-2-head-heading h2{
    font-size: 25px;
}
.Property-detail-section-2-head{
    border-bottom: 0.5px solid #D8D8D8;
    padding-bottom: 10px;
}
.Property-detail-section-2-details {
    display: flex;
    flex-direction: row;
    margin: 20px 0;
    flex-wrap: wrap;
    align-items: center;
    gap: 25px;
}
.Property-detail-section-2-details-card {
    width: 23.6%;
    display: flex;
    gap: 20px;
    background: #F9F9F9;
    padding: 20px;
    border-radius: 15px;
    align-items: center;
}
.Property-detail-section-2-details-card-img img {
    width: 80%;
}
.Property-detail-section-2-details-card-content h5 {
    font-size: 16px;
    font-weight: 600;
}
.Property-detail-section-3-wrapper {
    display: flex;
    gap: 20px;
    align-items: center;
}
.Property-detail-section-3-wrapper-content h2, .Property-detail-section-4-heading h2{
    font-size: 28px;
    line-height: 40px;
    margin-bottom: 10px;
}
.Property-detail-section-3-wrapper-content, .Property-detail-section-3-wrapper-img {
    width: 50%;
}
.btn-group {
    display: flex;
    gap: 20px;
}
.Property-detail-section-3-wrapper-img img {
    width: 100%;
    height: 440px;
    object-fit: cover;
    border-radius: 15px;
}
.Property-detail-section-4{
    margin: 50px 0;
}
.Property-detail-section-4-amenities {
    display: flex;
    gap: 20px;
    margin: 30px 0;
    flex-wrap: wrap;
}
.Property-detail-section-4-amenities-card {
    width: 23%;
    background: #F9F9F9;
    padding: 20px;
    display: flex;
    gap: 20px;
    align-items: center;
    border-radius: 15px;
}
.Property-detail-section-4-amenities-card-img img {
    width: 75%;
}
.Property-detail-section-5-images-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px;
    margin: 30px 0 0 0;
}
.Property-detail-section-5-images-section .Property-detail-section-5-images-section-img:nth-child(1), .Property-detail-section-5-images-section .Property-detail-section-5-images-section-img:nth-child(4) {
    width: 39%;
}
.Property-detail-section-5-images-section .Property-detail-section-5-images-section-img:nth-child(2), .Property-detail-section-5-images-section .Property-detail-section-5-images-section-img:nth-child(3) {
    width: 60%;
}
.Property-detail-section-5-images-section-img img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.Property-detail-section-6 {
    margin: 50px auto;
    background: #F9F9F9;
    padding: 30px;
    border-radius: 15px;
}
.Property-detail-section-6-wrapper {
    align-items: center;
    display: flex;
    justify-content: center;
    gap: 80px;
}
@media(max-width:768px){
    .Property-detail-main{
        padding: 0 10px;
    }
    .Property-detail-hero{
        height: 70vh;
    }
    .Property-detail-hero-content h1 {
    color: #fff;
    font-size: 32px;
    line-height: 45px;
}
.Property-detail-hero-content p {
    color: #fff;
    font-size: 18px;
    font-weight: 400;
}
a.Property-detail-btn-1, a.Property-detail-btn-2 {
    padding: 13px 12px;
    font-size: 12px;
}
.Property-detail-section-2-details-card{
    width:100%;
}
.Property-detail-section-3-wrapper{
    flex-direction: column-reverse;
}
.Property-detail-section-3-wrapper-content, .Property-detail-section-3-wrapper-img {
    width: 100%;
}
.Property-detail-section-3-wrapper-content h2, .Property-detail-section-4-heading h2{
    font-size: 18px !important;
        line-height: 27px !important;
}
.Property-detail-section-3-wrapper-img img{
    height: 245px;
}
.Property-detail-section-4-amenities-card{
    width: 100%;
}
.Property-detail-section-5-images-section-img {
    width: 100% !important;
}
.Property-detail-section-6-wrapper{
    flex-direction: column;
    gap:30px;
}
}
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<div style="display:none;">
<h1 id="property-title">{{ $property->title }}</h1>
<p id="property-location">Location: {{ $property->address }}</p>
<p id="property-price">Price: AED {{ $property->price }}</p>
</div>

<script>

    async function generateFlyerPDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF("p", "mm", "a4");

        // Header Background
        doc.setFillColor(6, 18, 44);  // Dark blue
        doc.rect(0, 0, 210, 30, "F");

        // Image URLs (Update as needed)
        const logoURL = "{{ asset('frontend/assets/images/logo-white-today.svg') }}";
        const propertyURL = "{{ asset('<?php echo $property->image; ?>') }}";

        try {
            // Convert Images to Base64
            const logoBase64 = await imageToBase64(logoURL);
            const propertyBase64 = await imageToBase64(propertyURL);

            // Add Centered Logo
            doc.addImage(logoBase64, "PNG", 65, 5, 70, 20);  // Centered logo inside header

            // Add Property Image (With Border Effect)
            doc.setFillColor(200, 200, 200);
            doc.addImage(propertyBase64, "JPEG", 10, 40, 190, 100);

        } catch (error) {
            console.error("Error loading images:", error);
        }

        // Property Title
        doc.setFont("helvetica", "bold");
        doc.setFontSize(22);
        doc.setTextColor(0, 0, 0);
        doc.text(document.getElementById("property-title").innerText, 10, 160);

        // Property Location and Price
        doc.setFontSize(14);
        doc.setFont("helvetica", "normal");
        doc.setTextColor(50, 50, 50);
        doc.text(document.getElementById("property-location").innerText, 10, 175);
        doc.text(document.getElementById("property-price").innerText, 10, 185);

        // Additional Property Details in Table Format
        const details = [
            ["Property Size:", "<?php echo $property->area ?? 'No data Available'; ?> Sq Ft"],
            ["Bedrooms:", "<?php echo $bedroomsresults->pluck('bedrooms')->implode(', ') ?? 'No data Available'; ?>"],
            ["Bathrooms:", "<?php echo $property->bathrooms ?? 'No data Available'; ?>"],
            ["Property Type:", "<?php echo $propertyaccommodataion->name ?? 'No data Available'; ?>"],
            ["Property Status:", "<?php echo $propertystatus->name ?? 'No data Available'; ?>"]
        ];

        let startX = 10, startY = 205; // Starting position
        const cellHeight = 10, cellWidthLabel = 50, cellWidthValue = 100;

        doc.setFont("helvetica", "normal");
        doc.setTextColor(0, 0, 0);
        details.forEach(([label, value]) => {
            // Label Cell
            doc.rect(startX, startY, cellWidthLabel, cellHeight);
            doc.text(label, startX + 2, startY + 7);

            // Value Cell
            doc.rect(startX + cellWidthLabel, startY, cellWidthValue, cellHeight);
            doc.setFont("helvetica", "normal");
            doc.text(value, startX + cellWidthLabel + 2, startY + 7);

            startY += cellHeight; // Move to next row
        });

        // Footer Contact Section
        doc.setFillColor(6, 18, 44);
        doc.rect(0, 285, 210, 20, "F");
        doc.setFontSize(12);
        doc.setTextColor(255, 255, 255);
        doc.text(" Contact: +971 4 513 9666 | Email: info@profoundrealtors.com", 15, 292);

        // Save the PDF
        doc.save("<?php echo $property->title; ?>.pdf");
    }

    // Convert Image URL to Base64
    function imageToBase64(url) {
        return new Promise((resolve, reject) => {
            let img = new Image();
            img.crossOrigin = "Anonymous";

            if (url.endsWith(".svg")) {
                fetch(url)
                    .then(response => response.text())
                    .then(svgText => {
                        let svgBlob = new Blob([svgText], { type: "image/svg+xml" });
                        let svgUrl = URL.createObjectURL(svgBlob);
                        let tempImg = new Image();
                        tempImg.src = svgUrl;
                        tempImg.onload = function () {
                            let canvas = document.createElement("canvas");
                            canvas.width = tempImg.width;
                            canvas.height = tempImg.height;
                            let ctx = canvas.getContext("2d");
                            ctx.drawImage(tempImg, 0, 0);
                            let dataURL = canvas.toDataURL("image/png");
                            resolve(dataURL);
                        };
                        tempImg.onerror = function () {
                            reject("Failed to convert SVG to PNG: " + url);
                        };
                    })
                    .catch(error => reject("Error fetching SVG: " + error));
            } else {
                img.src = url;
                img.onload = function () {
                    let canvas = document.createElement("canvas");
                    canvas.width = img.width;
                    canvas.height = img.height;
                    let ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0);
                    let dataURL = canvas.toDataURL("image/jpeg");
                    resolve(dataURL);
                };
                img.onerror = function () {
                    reject("Failed to load image: " + url);
                };
            }
        });
    }
</script>




 <!-- main-content -->
 <div class="Property-detail-main">
     
 <section class="cl-container Property-detail-hero">
     <div class="container">
         <div class="Property-detail-hero-content">
             <h1>{{ $property->title }}</h1>
             <p>Own Your Dubai Property from <b>AED {{ $price }}</b></p>
             <a class="Property-detail-btn-1" data-bs-target="#registerinterest" data-bs-toggle="modal">Register Your Interest</a>
         </div>
     </div>
 </section>
 
 <section class="Property-detail-section-2">
     <div class="cl-container">
         <div class="Property-detail-section-2-head">
             
             <div class="Property-detail-section-2-head-heading">
                 <h2>{{ $property->title }} Summary</h2>
             </div>
             
             <div class="list-icons-page">
                <div onclick="generateFlyerPDF()" class="item">
                    <div class="icon">
                        <i class="flaticon-outbox"></i>
                    </div>
                    <p>Share</p>
                </div>
            </div>
            
         </div>
         <div class="Property-detail-section-2-details">
             
             <div class="Property-detail-section-2-details-card">
                 <div class="Property-detail-section-2-details-card-img">
                     <img src="{{ asset('frontend/assets/icon/property-detail/text-1.png') }}" />
                 </div>
                 <div class="Property-detail-section-2-details-card-content">
                     <h5>Bedrooms</h5>
                     <p>{{ $bedroomsresults->pluck('bedrooms')->implode(', ') }} Bed</p>
                 </div>
             </div>
             
             <div class="Property-detail-section-2-details-card">
                 <div class="Property-detail-section-2-details-card-img">
                     <img src="{{ asset('frontend/assets/icon/property-detail/Vector.png') }}" />
                 </div>
                 <div class="Property-detail-section-2-details-card-content">
                     <h5>Price Starting From</h5>
                     <p>AED {{ $price }}</p>
                 </div>
             </div>
             @php
            $specs = json_decode($property->specifications);
            @endphp

             <div class="Property-detail-section-2-details-card">
                 <div class="Property-detail-section-2-details-card-img">
                     <img src="{{ asset('frontend/assets/icon/property-detail/calendar.png') }}" />
                 </div>
                 <div class="Property-detail-section-2-details-card-content">
                     <h5>Payment Plan</h5>
                     <p>
                        @php
                        $handover = collect($specs)->firstWhere('heading_one', 'Payment Plan');
                        @endphp
                        {{ $handover->heading_two ?? '' }}
                    </p>
                 </div>
             </div>
             <div class="Property-detail-section-2-details-card">
                 <div class="Property-detail-section-2-details-card-img">
                     <img src="{{ asset('frontend/assets/icon/property-detail/map-1.png') }}" />
                 </div>
                 <div class="Property-detail-section-2-details-card-content">
                     <h5>Location</h5>
                     <p>{{$property->address}}</p>
                 </div>
             </div>
             <div class="Property-detail-section-2-details-card">
                 <div class="Property-detail-section-2-details-card-img">
                     <img src="{{ asset('frontend/assets/icon/property-detail/expand.png') }}" />
                 </div>
                 <div class="Property-detail-section-2-details-card-content">
                     <h5>Starting Size</h5>
                     <p>{{$property->area}} Sqft</p>
                 </div>
             </div>
             <div class="Property-detail-section-2-details-card">
                 <div class="Property-detail-section-2-details-card-img">
                     <img src="{{ asset('frontend/assets/icon/property-detail/time.png') }}" />
                 </div>
                 <div class="Property-detail-section-2-details-card-content">
                     <h5>Hand Over</h5>
                     <p>
                         @php
                        $handover = collect($specs)->firstWhere('heading_one', 'Hand Over');
                        @endphp
                        {{ $handover->heading_two ?? '' }}
                     </p>
                 </div>
             </div>
             
         </div>
     </div>
 </section>
 
 <section class="Property-detail-section-3">
     <div class="cl-container">
         <div class="Property-detail-section-3-wrapper">
             <div class="Property-detail-section-3-wrapper-content">
                 <h2>Looking to Buy Property in Dubai? <br>
                 Discover {{ $property->title }}</h2>
                 <p>
                    {!! $property->description !!}
                 </p>
                 <div class="btn-group">
                     <a class="Property-detail-btn-1" data-bs-target="#registerinterest" data-bs-toggle="modal">Get Details</a>
                 </div>
             </div>
             <div class="Property-detail-section-3-wrapper-img">
                 <img src="{{ asset($property->cover_image) }}" />
             </div>
         </div>
     </div>
 </section>
 
 <section class="Property-detail-section-4">
     <div class="cl-container">
         <div class="Property-detail-section-4-heading">
             <h2>Property Amenities</h2>
         </div>
         <div class="Property-detail-section-4-amenities">
             @foreach($property->amenities as $amenitiess)
             <div class="Property-detail-section-4-amenities-card">
                 <div class="Property-detail-section-4-amenities-card-img">
                     <img src="{{ asset('frontend/assets/icon/property-detail/circle.png') }}"/>
                 </div>
                 <div class="Property-detail-section-4-amenities-card-content">
                     <p>{{ $amenitiess->name}}</p>
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </section>
 
 
 <section class="Property-detail-section-5">
     <div class="cl-container">
         
         <div class="Property-detail-section-4-heading">
             <h2>Property Images</h2>
         </div>
         
         <div class="Property-detail-section-5-images-section">
             @foreach($imagegallery as $gallery)
             <div class="Property-detail-section-5-images-section-img">
                 <img src="{{ asset($gallery->galleryimage) }}" />
             </div>
             @endforeach
         </div>
         <div class="btn-group justify-content-center">
                     @if(isset($property->brochure))
                     <a target="blank" class="Property-detail-btn-1" data-bs-toggle="modal" data-bs-target="#modalfile">Download Brochure</a>
                                        @endif
                     @if(isset($property->floor_plan))
                     <a target="blank" class="Property-detail-btn-2" href="{{ asset($property->floor_plan) }}" data-bs-toggle="modal" data-bs-target="#modalfile2">Download Floor Plan</a>
                                        @endif
                 </div>
     </div>
 </section>


<section class="cl-container Property-detail-section-6">
    <div class="Property-detail-section-6-wrapper">
        @if(isset($property->qrcode))
        <div class="Property-detail-section-6-wrapper-img">
            <img src="{{ asset($property->qrcode) }}" />
        </div>
        @endif
        <div class="Property-detail-section-6-wrapper-text text-center">
            <h3>Book Your Premium Property at {{ $property->title }}, {{$property->address}}</h3>
            <p>Flexible Payment Plan – Secure Your Dubai Investment Today</p>
            <a class="Property-detail-btn-1" data-bs-target="#registerinterest" data-bs-toggle="modal">Contact Us Now</a>
        </div>
    </div>
</section> 


 </div>
 <!-- main-content -->
          
          
          
          
          


<div class="modal fade modalCenter" id="modalfile">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
                <div class="content-right">
                     <form class="form-send-message" action="{{ url('sell-pdf-form') }}" id="form" name="enquireForm" >
                                @csrf
                                <input type="hidden" name="file_path" value="{{ asset($property->brochure) }}">
                                    <div class="cols">
                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Name</label>
                                        </fieldset>
                                        
                                        <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Email</label>
                                        </fieldset>
                                    </div>
                                    <div class="cols">
                                    <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                            <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Phone</label>
                                        </fieldset>
                                    </div>
                                    <fieldset class="message wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                        <textarea name="message" rows="4" placeholder="Your Message" class="" tabindex="2" aria-required="true" required=""></textarea>
                                        <label for="">Your Message</label>
                                  </fieldset>

                                    
                                    <div class="button-submit wow fadeInUp animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                        <button class="tf-button-primary w-full" type="submit" data-bs-dismiss="modal">Send Message<i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modalCenter" id="modalfile2">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
                <div class="content-right">
                     <form class="form-send-message" action="{{ url('sell-pdf-form2') }}" id="form" name="enquireForm" >
                                @csrf
                                <input type="hidden" name="file_path" value="{{ asset($property->floor_plan) }}">
                                    <div class="cols">
                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Name</label>
                                        </fieldset>
                                        
                                        <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Email</label>
                                        </fieldset>
                                    </div>
                                    <div class="cols">
                                    <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                            <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Phone</label>
                                        </fieldset>
                                    </div>
                                    <fieldset class="message wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                        <textarea name="message" rows="4" placeholder="Your Message" class="" tabindex="2" aria-required="true" required=""></textarea>
                                        <label for="">Your Message</label>
                                  </fieldset>

                                    
                                    <div class="button-submit wow fadeInUp animated" style="visibility: visible !important; animation-name: fadeInUp;">
                                        <button class="tf-button-primary w-full" type="submit" data-bs-dismiss="modal">Send Message<i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                </div>
            </div>
        </div>
    </div>



<div class="modal fade modalCenter" id="registerinterest">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-sm">
        <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
            <div class="content-right">
            <h3>Register Your Interest</h3>
            <br>
            <br>
            <form class="form-send-message" action="{{ url('register-interest') }}" id="form3" name="enquireForm" >
            @csrf
                <div class="cols">
                <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                <label for="">Name</label>
                </fieldset>
                
                <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                <label for="">Email</label>
                </fieldset>
                </div>
                <div class="cols">
                <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                <input type="tel" placeholder="Phone" class="" id="phone" name="phone" tabindex="2" value="" aria-required="true" required="">
                </fieldset>
                </div>
                <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible !important; animation-name: fadeInUp;">
                <input type="text" placeholder="Country" class="" name="country" tabindex="2" value="" aria-required="true" required="">
                <label for="">Country</label>
                </fieldset>
            
            
                <div class="button-submit wow fadeInUp animated" style="visibility: visible !important; animation-name: fadeInUp;">
                <button class="tf-button-primary w-full" type="submit" data-bs-dismiss="modal">Register Your Interest<i class="icon-arrow-right-add"></i></button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
<script>
let iti;

document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector("#phone");

    iti = window.intlTelInput(input, {
        initialCountry: "ae",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
    });

    document.getElementById("form3").addEventListener("submit", function () {
        input.value = iti.getNumber();
    });
});
</script>



@endsection