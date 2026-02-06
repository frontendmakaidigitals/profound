<!doctype html>
<html lang="en-US" translate="no">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11050400515"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11050400515');
</script>
<style>
    #menu{
        display: none;
        z-index: 111111111;
    }
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const menu = document.getElementById("menu");
    const toggler = document.querySelector(".mobile-nav-toggler");
    const blocker = document.querySelector(".mm-wrapper__blocker");

    if (menu && toggler) {
        toggler.addEventListener("click", function () {
            menu.style.display = "block";
        });
    }

    if (menu && blocker) {
        blocker.addEventListener("click", function () {
            menu.style.display = "none";
        });
    }
});
</script>
    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">

    <meta name="facebook-domain-verification" content="ak6jcw7rqf3qir51bfeh9r22or5fc5" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('title')">
    <meta name="keyword" content="@yield('pageKeyword')">
    <meta name="description" content="@yield('pageDescription')">
    <meta name="author" content="Xpertise Creative Studio">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:asset" content="https://profoundrealtors.com/">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('pageDescription')">
    <meta property="og:image" content="{{asset('frontend/assets/images/favPro.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:asset" content="https://profoundrealtors.com/">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description" content="@yield('pageDescription')">
    <meta property="twitter:image" content="{{asset('frontend/assets/images/favPro.png')}}">
    <meta name="robots" content="index,follow" />
    {{-- end meta --}}

    <title>@yield('title') | Profound Realtors - Real Estate Made Hassle Free</title>
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/images/favPro.png')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/mmenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custom.css')}}">
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />

    <!-- Font -->
    <link rel="stylesheet" href="{{asset('frontend/assets/font/fonts.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/icon/flaticon_just-home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/icon/icomoon/style.css')}}">

    
    <script src="https://www.google.com/recaptcha/api.js"></script>



    <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

 })(window,document,'script','dataLayer','GTM-NVWL8KW');</script>

<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
 
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-XJWM5R6FT2"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

 gtag('config', 'G-XJWM5R6FT2');
</script>

<!-- Meta Pixel Code -->

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '921120985926303');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=921120985926303&ev=PageView&noscript=1"
/></noscript>

<!-- End Meta Pixel Code -->

<script>
fbq('track', 'ViewContent');
</script>


<meta name="google-site-verification" content="e387Pci7lkx-T1qPUGklAc3cHlV1VEH8AKtCAHHkEYo"/> 

</head>



<body>

    <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVWL8KW"

 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 

<!-- End Google Tag Manager (noscript) -->

  <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">

    @include('frontend.includes.header')


        @yield('content')

        @php
          $property = App\Models\Property::pluck('title')->toArray();  
          $js_array = json_encode($property);
          
        @endphp
    @include('frontend.includes.footer')
 

 
    <!-- Javascript -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <!--<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>-->
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
  integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
  integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper.js')}}"></script>
    <script src="{{asset('frontend/assets/js/countto.js')}}"></script>
    <script src="{{asset('frontend/assets/js/circletype.min.js')}}"></script>
    
    <script src="{{asset('frontend/assets/js/marker.js')}}"></script>
    <script src="{{asset('frontend/assets/js/infobox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/apexcharts.js')}}"></script>
    <script src="{{asset('frontend/assets/js/area-chart.js')}}"></script>
    <script src="{{asset('frontend/assets/js/morris.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/raphael.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/morris.js')}}"></script>
    <script src="{{asset('frontend/assets/js/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/rangle-slider.js')}}"></script>
    <script src="{{asset('frontend/assets/js/mmenu.js')}}"></script>
    <script>
    new Mmenu(document.querySelector("#menu"));
    </script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/scrollmagic.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    

<style>
.selectize-input {
    background: none;
    border: none;
}
.selectize-dropdown {
    background: #fff !important;
    padding: 5px;
    border: 1px solid #1A1A1A;
    border-radius: 20px;
}
.selectize-dropdown-content {
    padding: 10px;
}
.selectize-dropdown-content .option {
    font-size: 16px;
    margin: 10px 0;
}
.py-100{
padding:100px 0 !important;
}
.pt-100{
padding:100px 0 0 0 !important;
}
.pb-100{
padding:0 0 100px 0 !important;
}
.contact-counters{
    display: flex;
    flex-direction: row;
    gap: 30px;
}
.contact-counters-list {
    margin: 15px 0;
    background: #f9f9f9;
    width: fit-content;
    padding: 30px;
    display: flex;
    border-radius: 20px;
    flex-direction: row;
    align-items: center;
}
span.contact-counters-list-number {
    color: #e7c873;
    font-size: 27px;
    font-weight: bold;
}
section#contactus {
    background: #fff8f6;
    margin: 0 20px 20px 20px;
    border-radius: 20px;
}
span.contact-counters-list-text {
    color: #06122c;
    font-weight: 500;
    font-size: 22px;
    margin: 0 11px;
}
.chosen-container{
width:100% !important;
}
.chosen-container-multi .chosen-choices {
    background: none;
    border: none;
}
.chosen-container-active .chosen-choices li.search-field input[type=text]{
    color: #fff !important;
}
input.chosen-search-input.default {
    font-size: 15px !important;
    width: 100% !important;
}
.chosen-drop {
    padding: 20px !important;
    border: 1px solid #000 !important;
    border-radius: 20px;
}
.chosen-container .chosen-results li {
    font-size: 18px;
    line-height: 20px;
    margin: 10px 0;
    color: #000;
}
#a1 .chosen-container.chosen-container-multi {
    border-radius: 12px;
    border: 1px solid var(--Border) !important;
    padding: 12px 20px;
}
#a1 .chosen-container-active .chosen-choices li.search-field input[type=text]{
    color: #000 !important;
}
#a1 .form-style-has-title .nice-select::after {
    right: 20px;
    margin-top: 22px;
}
#a1 .chosen-container-active .chosen-choices{
box-shadow:none;
}
@media(max-width:768px){
.contact-counters{
    display: flex;
    flex-direction: column;
    gap: 0px;
}
.contact-counters-list{
padding: 22px;
}
span.contact-counters-list-number {
    font-size: 28px;
    font-weight: bold;
}
span.contact-counters-list-text {
    margin: 0 11px;
}
}
</style>


<script>

$('.chosen-select').selectize();

$(function() {
// bind change event to select
$('#dynamic_select').on('change', function() {
var asset = $(this).val(); // get selected value
if (asset) { // require a asset
$("#searchForm").attr("action", asset)
}
return false;
});
});

    </script>   
<script>
		     jQuery(document).ready(function() {
              jQuery("#toggle1").click(function() {
                var elem = $("#toggle1").text();
                if (elem == "Read More") {
                  //Stuff to do when btn is in the read more state
                  jQuery("#toggle1").text("Read Less");
                  jQuery("#text").slideDown();
                } else {
                  //Stuff to do when btn is in the read less state
                  jQuery("#toggle1").text("Read More");
                  jQuery("#text").slideUp();
                }
              });
            });
		</script>
		
		
		<script>
  document.addEventListener('click', function(e){
    if(e.target.closest('.bi-whatsapp')){
    	  gtag('event', 'conversion', {'send_to': 'AW-11050400515/JCBRCIOo5J4ZEIP2npUp'});
    }    
  }, {capture: true});
</script>

<script>
  (function() {
    document.addEventListener('click', function(e) {
      if (e.target.closest('a[href^="tel:"]')) {
        gtag('event', 'conversion', {
          'send_to': 'AW-11050400515/movXCICo5J4ZEIP2npUp'
        });
      }
    });
  })();

</script>
<script>
  window.addEventListener('load', function() {
    if (document.location.href.includes('thank-you')) {
      gtag('event', 'conversion', {
        'send_to': 'AW-11050400515/0x1gCP2n5J4ZEIP2npUp'
      });
    }
  });

</script>



</body>

</html>

