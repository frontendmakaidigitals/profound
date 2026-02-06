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
.toggle-content ul li {
    font-size: 16px;
    margin: 16px 0px;
}
</style>
<style>
	.input-group {
    display: flex;
    align-items: center;
}
.input-group-text.bg-transparent {
    margin: -35px;
}
.tab.calculatorForm input {
    background: #fff;
    border: 1px solid #e0c295;
    width: 100%;
    padding: 13px;
    margin: 10px 0;
    border-radius: 5px;
    font-size: 18px;
}
.consultForm input,.consultForm textarea {
	background: #fff;
    border: 1px solid #b39359;
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 10px;
}
.custom-range:hover {
  opacity: 1;
}

.custom-range::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  border-radius:100px;
  background: #b39359;
  cursor: pointer;
}
.custom-range{
	-webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
.tab.calculatorForm span, label.text-blue {
    font-size: 18px;
}
span#monthly_rate {
    font-size: 40px;
}
.input-group-text.bg-transparent {
    position: absolute;
    right: 53px;
    border: none;
    font-size: 20px;
}
.flat-title.inner-page::after {
    content: '';
    background: #0000004d;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    border-radius: 20px;
    right: 0;
}
</style>

    <div class="main-content px-20 default">

                <div class="space-20"></div>

                <!-- flat-title -->
                <section class="flat-title inner-page" style="background:url({{asset('frontend/assets/images/mortgage.jpg')}});background-repeat: no-repeat;background-size: cover;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>Mortgage Calculator</h2>
                                    <div class="text">Based on your view history</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->

                <!-- luxury-home -->
                <section class="tf-section luxury-home pb-5 style-5" style="padding-top:50px">
                    <div class="cl-container">
                        <div class="row justify-between">
                            
                            <div class="col-xl-5 col-md-6">
                                <div class="content">
                                    <h2 class="wow fadeInUp">Mortgage Calculator</h2>
                                    <div class="text-content wow fadeInUp">Whether you’re a first-time property buyer, second or refinancing an existing home loan, the calculus behind mortgage payments is complicated. However, our mortgage calculator can make it an easy process.</p>
                                    <p>So, if you’re a UAE national or expat looking for a home loan, then this is the calculator for you.</p>
                                    <p>This free online mortgage calculator will help you find out what your monthly loan payments will be, that can be further simplified for you by one of our mortgage specialists at Profound Realty.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="image wow fadeInLeft">
                                <form class="" action="{{route('calculateMortgage')}}" method="POST">
                        @csrf
                        <div class="tab calculatorForm">
                            <div class="input_option mb-3">
                                <label class="text-blue"><span>Property Price:</span></label>
                                <div>
                                    <input type="text" class="form-control" onkeyup="formatCurrency(this)"
                                        name="prop_price" id="prop_price" maxlength="11" value="1,000,000">
                                </div>
                            </div>
                            <div class="range mb-3">
                                <label class="text-blue"><span>Down Payment: </span><span> AED <span
                                            class="down_money">200,000</span> (<b><span
                                                class="down_pay">20</span>%</b>)</span></label>
                                <div class="form-group">
                                    <input type="range" class="form-range col-12 custom-range" min="20" step="1"
                                        name="down_pay" max="80" id="down_pay" value="20">
                                    <input type="hidden" name="downPay" id="downPay" value="200000">
                                    <input type="hidden" name="monthlyPay" id="monthlyPay" value="4,673">
                                </div>
                            </div>
                            <div class="range mb-3">
                                <label class="text-blue"><span>Loan Duration: </span><span> <span
                                            class="loan_duration">25</span> Years</span></label>
                                <div class="form-group">
                                    <input type="range" class="form-range custom-range" min="1" name="loan_duration"
                                        step="1" value="25" max="25" id="loan_duration">
                                </div>
                            </div>
                            <div class="input_option mb-3">
                                <label class="text-blue">Interest Rate:</label>
                                <div class="input-group">

                                    <input type="number" class="form-control" name="rate" id="rate" value="4.99">
                                    <div class="input-group-text bg-transparent">%</div>
                                </div>
                                <div>

                                </div>
                            </div>
                            <div class="pb-3">
                                <span class="monthly_repay text-blue">Monthly repayment</span>
                                
								<h2 class="mainMonthlyPay font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight font-medium">AED&nbsp; <span id="monthly_rate">4,673</span>
                                </h2>
                                
								<p>* Estimated initial monthly payments based on a AED <span
                                        class="prop_price">1,000,000</span> purchase price with a <span
                                        class="rate">4.99</span>% fixed interest rate.</p>
                            </div>
                            <div style="overflow:auto;">
                                <div class="text-center">
                                    <button class="tf-button-default nextFormBtn">Request a
                                        consultation</button>
                                </div>
                            </div>
                        </div>


                        <div class="tab consultForm" style="display:none;">
                            <div class="input_option mb-3">
                                <label class="text-blue"><span>Full Name</span></label>
                                <div>
                                    <input type="text" class="form-control" name="consultName"
                                        placeholder="Enter Your Name" required>
                                </div>
                            </div>
                            <div class="input_option mb-3">
                                <label class="text-blue"><span>Email</span></label>
                                <div>
                                    <input type="email" class="form-control" name="consultEmail"
                                        placeholder="Enter Your Email" required>
                                </div>
                            </div>

                            <div class="input_option mb-3">
                                <label class="text-blue"><span>Mobile No.</span></label>
                                <div>
                                    <input type="tel" class="form-control" name="consultPhone"
                                        placeholder="Enter Your Mobile No." required>
                                </div>
                            </div>

                            <div class="input_option mb-3">
                                <label><span>Interested Communities</span></label>
                                <div>
                                    <input type="text" class="form-control" name="consultCommunity"
                                        placeholder="Interested Communities">
                                </div>
                            </div>
                            <div class="input_option mb-3">
                                <label class="text-blue"><span>Message</span></label>
                                <div>
                                    <textarea class="form-control" rows="3" name="consultMsg"
                                        placeholder="message"></textarea>
                                </div>
                            </div>

                            <div style="overflow:auto;">
                                <div class="text-center">
                                    <button class="tf-button-default" type="submit">Submit Details</button>
                                </div>
                            </div>

                        </div>

                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /luxury-home -->

<section class="tf-section flat-question style-1">
                    <div class="cl-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="wow fadeInUp">Hove More Question?</h2>
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="flat-accordion">
                                                
                                                <div class="flat-toggle active">
                                                    <h4 class="toggle-title active">What help can I get from the mortgage calculator?</h4>
                                                    <div class="toggle-content">
                                                        <p> 
      As you try to determine your housing budget, determining your monthly house payment is important.
</p>
      <p> 
     As you shop for a home loan or refinancing, the Profound mortgage calculator will help you estimate your mortgage payments.
</p>
<p>A few notes from the experts:</p>
<ul>
    <li>If your budget is fixed, a longer loan duration is probably right for you.</li>
    <li>These loans come with lower monthly payments, although you'll pay more interest during the course of the loan.</li>
    <li>If you are able to increase your budget, a lower loan duration reduces the total interest you'll pay, but with higher monthly payments.</li>
    <li>This calculator is will provide you an accurate overview of how much you can expect to pay monthly.</li>
    <li>This applies whether you are buying a residential apartment, villa or any other property you can think of.</li>
</ul>
                                                    </div>
                                                </div>

                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> How much may I borrow at a time?</h4>
                                                    <div class="toggle-content">
                                                        <p>For a property purchase price under AED 5million the maximum loan-to-value (LTV) for an expat is 80% and for a UAE national is 85%. For properties over AED 5million, this decreases to 70% LTV for expats and to 75% for UAE nationals.</p>
                                                    </div>
                                                </div>
                                              
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> Can my housing allowance be considered for my mortgage?</h4>
                                                    <div class="toggle-content">
                                                    <p>
                                                    Where your employer pays you a housing allowance, this can be considered when you are applying for a mortgage.</p>
                                                    <p>
                                                    For example, if you currently live in company provided accommodation and it is stipulated in your contract or salary certificate that you will be paid a housing allowance should you leave the provided accommodation, then the allowance you will be paid can be considered for your mortgage.
                                                    </p>
                                                    <p>
                                                    You will still be required to have the necessary down payment, but the allowance can contribute to your affordability and therefore can, in some cases, increase the amount you are able to borrow.
                                                    </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> What kind of interest rates might I roughly anticipate?</h4>
                                                    <div class="toggle-content">
                                                    <p>
                                                    The normal rates in the UAE range from 2.99% to 7%. To get you the finest home loan deal, PSI works with more than 20 banks in the UAE that provide up to 250 different mortgage packages at discounted rates.
                                                    </p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> What prices should I anticipate in the UAE?</h4>
                                                    <div class="toggle-content">
                                                        <p>       
Depending on the customer's personal profile and whether they are salaried or self-employed, rates vary widely from bank to bank. 
</p>
                                                    </div>
                                                </div>

                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">  In the UAE, are non-residents eligible for financing?</h4>
                                                    <div class="toggle-content">
                                                    <p>      
Yes, subject to standard client profiling of each individual. For non-residents, the maximum loan-to-value that is available is 60% funding, with rates at this level starting at 4.99% for a 3-year fixed rate.
</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title">  What is the minimal down payment?</h4>
                                                    <div class="toggle-content">
                                                    <ul>   
                                                    <li>85% - UAE National first property</li>
                                                    <li>65% - UAE National second property</li>
                                                    <li>UAE Expat First property – 80% + 4.8% DLD + Brokerage</li></li>
                                                    <li>UAE Expat Second property – 60% + 4.8% DLD + Brokerage</li>
                                                    <li>Non-Resident – 60% </li>
                                                    </ul> 
                                                    <p>This information is subject to changes in law and/or government policies
                                                    </p>
                                                    </div>
                                                </div>
                                               
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> What kind of paperwork is needed?</h4>
                                                    <div class="toggle-content">
                                                    <p>A salary certificate, six months' worth of paystubs, six months' worth of bank statements, and information on any outstanding debts are required for candidates who are salaried.</p>
<p>For independent contractors: identification documents, company records (trade license, articles of incorporation, shareholders certificate, company profile, etc.), audited financial statements and/or six-month personal bank statements and information on any outstanding debts.
</p>
                                                    </div>
                                                </div>
                                               
                                                <div class="flat-toggle">
                                                    <h4 class="toggle-title"> When can I expect to receive a pre-approval?</h4>
                                                    <div class="toggle-content">
                                                    <p>       
Although this varies from bank to bank, in general banks will respond to initial inquiries and observations within 2 working days. The turnaround time to acquire a pre-approval is typically between 5-7 working days once more papers have been submitted or additional inquiries have been answered.
</p>
                                                    </div>
                                                </div>
                                               

                                            </div>
                            </div>
                            </div>
                            </div>
                            </section>


            </div>


<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

 <script>
    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }

      function formatCurrency(input) {
        var input_val = input.value;
        // don't validate empty input
        if (input_val === "") {
          return;
        }

        var original_len = input_val.length;

        // initial caret position
        var caret_pos = input.selectionStart;

        // check for decimal
        if (input_val.indexOf(".") >= 0) {
          // get position of first decimal
          // this prevents multiple decimals from
          // being entered
          var decimal_pos = input_val.indexOf(".");

          // split number by decimal point
          var left_side = input_val.substring(0, decimal_pos);
          var right_side = input_val.substring(decimal_pos);

          // add commas to left side of number
          left_side = formatNumber(left_side);

          // validate right side
          right_side = formatNumber(right_side);

          

          // Limit decimal to only 2 digits
          right_side = right_side.substring(0, 2);

          // join number by .
          input_val =  left_side + "." + right_side;
        } else {
          // no decimal entered
          // add commas to number
          // remove all non-digits
          input_val = formatNumber(input_val);
          input_val = input_val;

        }

        // send updated string to input
        input.value = input_val;

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input.setSelectionRange(caret_pos, caret_pos);
      }
      function formatDown(input) {
        var input_val = input;
        // don't validate empty input
        if (input_val === "") {
          return;
        }

          // no decimal entered
          // add commas to number
          // remove all non-digits
          input_val = formatNumber(input_val);
          input_val = input_val;;

        return input_val;
      }
       $("#prop_price").on("input", function() {
           var price = parseInt($(this).val().replace(/,/g, '')); 
           
           if(isNaN(price)){
               var down = 0;
               var perc = 20;
           }else if(price > 0 && price < 50000000){
               var down2 = (20/100)*price;
               var downpay = down2;
                var perc = 20;
              var down = formatDown(down2.toString());
           }else{
               
               var down1 = (30/100)*price;
               var downpay = down1;
               var perc = 30;
           var down = formatDown(down1.toString());
           }
           $(".prop_price").html($(this).val());
            $(".down_money").html(down);
            $(".down_pay").html(perc);
            $("#down_pay").attr("min",perc);
            $("#down_pay").val(perc);
            $("#downPay").val(downpay);
            calculate();
        });
       $("#rate").on("input", function() {
           var perc = $(this).val(); 
           
            $(".rate").html(perc);
            calculate();
        });
        
       $(document).on('input change', '#loan_duration', function() {
    var newval=$(this).val();
            
            $(".loan_duration").html(newval);
             calculate();
});
          $(document).on('input change', '#down_pay', function() {
                var newPerc=$(this).val();
             $(".down_pay").html(newPerc);
            var priceNew = parseInt($("#prop_price").val().replace(/,/g, ''));
            var downNew = (newPerc/100)*priceNew;
            var downNewForm = formatDown(downNew.toString());
           
            $(".down_money").html(downNewForm);
            $("#downPay").val(downNew);
             calculate();
            });
function calculate() {
  //Look up the input and output elements in the document
 var price = parseInt($("#prop_price").val().replace(/,/g, ''));
  var rate = $("#rate").val();
  var downPay = $("#downPay").val();
 var term = $("#loan_duration").val();
 var amountBorrowed = price - downPay;
  var pmt = calculateMortgage(amountBorrowed, rate, term);

// var priceMonth = ((price - downPay)  * ( Math.pow(rate *(1 + rate), month) ) )/ ( (Math.pow(1 + rate,month) ) - 1 );
  $("#monthly_rate").html(pmt);
  $("#monthlyPay").val(pmt);
}
function calculateMortgage(p, r, n) {
  r = percentToDecimal(r);
  n = yearsToMonths(n);
  var pmt = (r * p) / (1 - (Math.pow((1 + r), (-n))));
  return parseFloat(pmt.toFixed(2));
}

function percentToDecimal(percent) {
  return (percent / 12) / 100;
}

function yearsToMonths(year) {
  return year * 12;
}
$( ".nextFormBtn" ).click(function() {
  $(".calculatorForm").css("display","none");
  $(".consultForm").css("display","block");
});
   </script>


@endsection