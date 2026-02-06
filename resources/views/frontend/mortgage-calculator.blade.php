@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Mortgage Calculator')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif
@section('content')
<style>
.propNameText a{
    color: #212529;
}
p.mentioned {
    color: #fff;
    padding: 10px 0;
    margin: 0;
}
.mainBgOverlay {
    background: #000;
    position: absolute;
    z-index: 555;
    width: 100%;
    height:100%;
    min-height: 70vh;
    opacity: .5;
}
.mainBg {
    position: relative;
    background: url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-2.png') }}');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 70vh;
    display: flex;
    justify-content: center;
    background-blend-mode: multiply;
}
h1.display-5 {
    position: absolute;
    z-index: 666;
    left: 50%;
    transform: translate(-50%, 10px);
    width: 100%;
}
.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0 0;
    margin-bottom: 1rem;
    list-style: none;
    position: absolute;
    z-index: 666;
    left: 50%;
    transform: translate(-50%, -60%);
    top:70%;
}
.breadcrumb-item a {
    color: #fff;
    text-decoration: none;
}
.breadcrumb-item.active {
    color: #fff;
}
.missionImg img {
    width: 100%;
    max-width: 80%;
}
.mainimg img {
    max-width: 1240px;
    margin: 0 auto;
}
.mainHeadingCent .secText::after {
    position: absolute;
    right: 0;
    width: 10vw;
    display: block;
    content: '';
    height: 3px;
    margin: auto;
    border-bottom: #DEC093 solid 5px;
    border-radius: 25vw / 7vh;
}
span.bi.bi-quote {
    font-size: 50px;
}
.mr-10 {
    margin-right: 30px;
}
.borderBotFoot {
    border-bottom: 1.5px solid #DEC093;
}
.btn-default {
    background-color: transparent;
    border: 2px solid #ebeef5 !important;
    color: #ebeef5!important;
    outline: 0 !important;
    box-shadow: 0 0 0 0 rgb(13 110 253 / 25%) !important;
    padding: 10px 20px;
}
.btn-light {
    padding: 10px 20px;
}
.btn-secondary {
    background-color: #DEC093 !important;
    color: #06112C !important;
    border-color: #DEC093 !important;
    border-radius: 5px !important;
    padding: 10px 30px;
}
.mr-2 {
    margin-right: 2rem;
}

@media only screen and (max-width: 768px){
.mcw-wrap_250 {
    width: 100% !important;
    margin: 0 auto;
    max-width: 300px;
}   
}

</style>

    <section class="mainBg">
        <div class="mainBgOverlay"></div>
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="text-center text-white">
                        <h1 class="display-5 text-white text-center">{{ ($banner != null) ? $banner->heading_one :  'Mortgage Calculator'}}</h1>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mt-2">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mortgage Calculator</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--<a href="#scrollto" class="btn-mouse"></a>-->
    </section>
    <section class="bgMainAll" id="scrollto">
        <div class="container pb-5">
            <div class="row py-5 justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="text-center">
                        <div class="mainHeadingCent  py-2">Mortgage <span class="secText text-primary">Calculator</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pb-2 justify-content-center">
                 <div class="col-12 col-lg-12">
                    <div class="text-center">
                        <!--Mortgage Calculator Widget -->
                        <div class="mcw-wrap_250" id="maoWrap">
                        	<div id="mcwWidget"></div>
                        	<script>
                        	var maoCalc = {};
                        	maoCalc.settings = {
                        		"theme": "theme1",
                        		"view": "vertical1",
                        		"responsive": "mcw-wrap_250",
                        		"font": "Open Sans, Helvetica, Arial, sans-serif",
                        		"border": false,
                        		"boxShadow": true,
                        		"backgroundColor": "#fff",
                        		"fieldColor": "#fff",
                        		"textColor": "#334356",
                        		"borderColor": "#dde2e5",
                        		"currency": "",
                        		"currencySide": "right",
                        		"delimiters": ",.",
                        		"popup": true,
                        		"popupView": "doughnutPopup",
                        		"style": true,
                        		"widgetTotalInterest": false,
                        		"widgetTotalPrincipal": false,
                        		"monthlyPayment": "Monthly Payment",
                        		"totalPrincipalPaid": "Total Principal",
                        		"totalInterestPaid": "Total Interest",
                        		"totalPayments": "Total Payments",
                        		"years": "years",
                        		"title": {
                        			"enabled": true,
                        			"color": "#334356",
                        			"label": "Mortgage Calculator"
                        		},
                        		"homePrice": {
                        			"label": "Home Price",
                        			"value": "350,000"
                        		},
                        		"downPayment": {
                        			"enabled": true,
                        			"label": "Down Payment",
                        			"value": "52,000"
                        		},
                        		"interestRate": {
                        			"label": "Interest Rate",
                        			"value": "4.05"
                        		},
                        		"mortgageTerm": {
                        			"label": "Mortgage Term",
                        			"value": "30"
                        		},
                        		"pmi": {
                        			"enabled": false,
                        			"label": "PMI",
                        			"value": false
                        		},
                        		"taxes": {
                        			"enabled": false,
                        			"label": "Taxes",
                        			"value": false
                        		},
                        		"insurance": {
                        			"enabled": false,
                        			"label": "Insurance",
                        			"value": false
                        		},
                        		"hoa": {
                        			"enabled": false,
                        			"label": "HOA",
                        			"value": false
                        		},
                        		"extra": {
                        			"enabled": true,
                        			"labelAdd": "Add extra payments",
                        			"labelRemove": "Remove extra payments",
                        			"labelToMonthy": "To monthly",
                        			"labelYearly": "Extra yearly"
                        		},
                        		"startDate": {
                        			"enabled": true,
                        			"label": "Start Date"
                        		},
                        		"monthsArr": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        		"button": {
                        			"color": "#fff",
                        			"bg": "#dec093",
                        			"label": "Calculate"
                        		},
                        		"amortizationSchedule": "Amortization Schedule",
                        		"popupLabels": {
                        			"monthlyPrincipalInterest": "Monthly Principal & Interest",
                        			"monthlyExtraPayment": "Monthly Extra Payment",
                        			"monthlyPayment": "MONTHLY PAYMENT",
                        			"downPayment": "Down payment",
                        			"extraPayments": "Extra payments",
                        			"totalPrincipalPaid": "Total principal paid",
                        			"totalInterestPaid": "Total interest paid",
                        			"totalOfAllPayments": "TOTAL OF ALL PAYMENTS",
                        			"amortizationSchedule": "Amortization Schedule",
                        			"tablePaymentDate": "Payment date",
                        			"tablePayment": "Payment",
                        			"tablePrincipal": "Principal",
                        			"tableInterest": "Interest",
                        			"tableTotalInterest": "Total Interest",
                        			"tableBalance": "Balance",
                        			"pmi": "PMI",
                        			"taxes": "Taxes",
                        			"insurance": "Insurance",
                        			"shortInsurance": "Ins",
                        			"hoa": "HOA",
                        			"chartBalance": "Balance",
                        			"chartPrincipal": "Principal",
                        			"chartInterest": "Interest"
                        		},
                        		"useTitleAsLink": false,
                        		"titleLinkUrl": "",
                        		"useFooterLink": false,
                        		"footerLinkAnchor": "",
                        		"footerLinkUrl": ""
                        	};
                        	(function() {
                        		function loadScript(src) {
                        			var s, t;
                        			s = document.createElement("script");
                        			s.src = src;
                        			t = document.getElementsByTagName("script")[0];
                        			t.parentNode.insertBefore(s, t);
                        		}
                        
                        		function decode(str) {
                        			return !window.btoa ? 'not_found' : window.btoa(unescape(encodeURIComponent(str)));
                        		}
                        		var uri = 'https://mortgage-advice-online.org/widget/' + decode(window.location) + '.js';
                        		loadScript(uri);
                        	})();
                        	</script>
                        	
                        </div>
                        <!-- End Mortgage Calculator Widget -->
                        <p class="mentioned" >(All Prices mentioned in AED)</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
  
   
@endsection