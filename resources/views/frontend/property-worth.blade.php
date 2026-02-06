@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Your Property Worth')
	 @section('pageDescription', 'Profound Realtors is the name of excellence in Dubai’s Realty Market. We have evolved as successful real estate professionals for over a decade in Dubai Realty.')
	 @section('pageKeyword', 'Rent Properties,Sale Properties, Off plan Properties, villas ,developers')
 @endif
@section('content')


<style>
.luxury-home .image img {
    height: 626px;
    object-fit: cover;
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
ul.list {
    flex-direction: column;
}
ul.list li {
    display: flex;
    align-items: center;
    font-size: 15px;
    gap: 9px;
}
.features-box-image.icon {
    background: #e7c873;
    padding: 6px 5px;
    width: 25px;
    border-radius: 52px;
    height: 25px;
}
.contact-counters-list {
    margin: 40px 0;
}
span.contact-counters-list-number {
    color: #000;
    font-size: 35px;
}
span.contact-counters-list-text {
    color: #06122c;
    font-weight: 700;
    font-size: 35px;
}
.pt-10{
padding-top:50px;
}
.mt-10{
margin-top:50px;
}
.py-50{
padding:50px 0 !important;
}
.py-100{
padding:100px 0 !important;
}
.my-50{
margin:50px 0 !important;
}
.nice-select.open .list{
max-height:300px !important;
}
@media(max-width:768px){
.luxury-home .image img {
    height: 350px;
}
}
</style>



<div class="main-content px-20 default">

                <div class="space-20"></div>

                <!-- flat-title -->
                <section class="flat-title inner-page" style="background:url({{ ($banner != null) ? asset($banner->image) : '/frontend/assets/images/list-your-property.jpg' }});background-repeat:no-repeat;background-size:cover;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>{{ ($banner != null) ? $banner->heading_one :  'How much is your property worth?'}}</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Property Worth</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->

                <section class="tf-section send-message pt-5">
                <div class="cl-container">
                <h3 class="text-center mt-5">Your Guide to Dubai's Property Market Data</h3>
                <p class="text-center w-75 m-auto mt-5">Navigating the property market can be a complex task, but with the latest Dubai Land Department sales and lettings data at your fingertips, you can make informed decisions with ease. Whether you're a seasoned investor, a first-time buyer, or simply exploring options for renting, having access to up-to-date and comprehensive market data is invaluable. This trusted information empowers you to analyze trends, compare prices, and understand the dynamics of different neighborhoods across Dubai.</p>
                <h3 class="text-center mt-5">Complete the form, and let us ring you with exciting updates!</h3>
                <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <form class="form-send-message pt-5" id="listPropertyForm" action="{{ url('list-property-form') }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="type" value="listproperty">
                        <div class="cols">
                            <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                <input type="text" placeholder="Full Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                <label for="">Name</label>
                            </fieldset>
                            
                            <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                            <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                            <label for="">Email</label>
                            </fieldset>

                        </div>
                        <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                                <label for="">Phone</label>
                            </fieldset>
                            <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                <select id="sell_or_rent" name="sell_type" class="ub-input-item single form-control" required>

					                            	<option value="">Sell or rent</option>

					                            	<option value="I want to sell">I want to sell</option>

					                            	<option value="I want to rent out (long term)">I want to rent out (long term)</option>

					                            	<option value="I want to rent out (short term)">I want to rent out (short term)</option>

					                            </select>
                            </fieldset>
                        <fieldset style="z-index:-999 !important">
                            <select id="property_type" name="property_type" class="ub-input-item single form_elem_property_type form-control" required>

						                           	<option value="">Property type</option>

						                           	<option value="Apartment">Apartment</option>

						                           	<option value="Villa">Villa</option>

						                           	<option value="Townhouse">Townhouse</option>

						                           	<option value="Office">Office</option>

						                           	<option value="Retail">Retail</option>

						                           	<option value="Building">Building</option>

						                           	<option value="Other">Other</option>

					                           </select>
                        </fieldset>
                        
                        
                        <fieldset style="z-index:-99999 !important">
                           <select id="location" name="location" class="ub-input-item single form_elem_location" required>
					                               <option value="">Location</option>
					                               <option value="Abu Dhabi">Abu Dhabi</option>
					                               <option value="Ajman">Ajman</option>
					                               <option value="Dubai - Al Barsha">Dubai - Al Barsha</option>
					                               <option value="Dubai - Al Furjan">Dubai - Al Furjan</option>
					                               <option value="Dubai - Arabian Ranches">Dubai - Arabian Ranches</option>
					                               <option value="Dubai - Business Bay">Dubai - Business Bay</option>
					                               <option value="Dubai - Damac Hills">Dubai - Damac Hills</option>
					                               <option value="Dubai - DIFC">Dubai - DIFC</option>
					                               <option value="Dubai - Downtown Dubai">Dubai - Downtown Dubai</option>
					                               <option value="Dubai - Dubai Hills Estate">Dubai - Dubai Hills Estate</option>
					                               <option value="Dubai - Dubai Marina">Dubai - Dubai Marina</option>
					                               <option value="Dubai - Dubai Sports City">Dubai - Dubai Sports City</option>
					                               <option value="Dubai - Dubailand">Dubai - Dubailand</option>
					                               <option value="Dubai - Emirates Hills">Dubai - Emirates Hills</option>
					                               <option value="Dubai - Emirates Living">Dubai - Emirates Living</option>
					                               <option value="Dubai - Green Community">Dubai - Green Community</option>
					                               <option value="Dubai - Greens">Dubai - Greens</option>
					                               <option value="Dubai - Jumeirah">Dubai - Jumeirah</option>
					                               <option value="Dubai - Jumeirah Beach Residences">Dubai - Jumeirah Beach Residences</option>
					                               <option value="Dubai - Jumeirah Golf Estates">Dubai - Jumeirah Golf Estates</option>
					                               <option value="Dubai - Jumeirah Islands">Dubai - Jumeirah Islands</option>
					                               <option value="Dubai - Jumeirah Lakes Towers">Dubai - Jumeirah Lakes Towers</option>
					                               <option value="Dubai - Jumeirah Park">Dubai - Jumeirah Park</option>
					                               <option value="Dubai - Jumeirah Village Circle">Dubai - Jumeirah Village Circle</option>
					                               <option value="Dubai - Jumeirah Village Triangle">Dubai - Jumeirah Village Triangle</option>
					                               <option value="Dubai - Mirdif">Dubai - Mirdif</option>
					                               <option value="Dubai - Mohammad Bin Rashid City">Dubai - Mohammad Bin Rashid City</option>
					                               <option value="Dubai - Motor City">Dubai - Motor City</option>
					                               <option value="Dubai - Old Town">Dubai - Old Town</option>
					                               <option value="Dubai - Palm Jumeirah">Dubai - Palm Jumeirah</option>
					                               <option value="Dubai - The Views">Dubai - The Views</option>
					                               <option value="Dubai - The Villa">Dubai - The Villa</option>
					                               <option value="Dubai - Other community">Dubai - Other community</option>
					                               <option value="Fujairah">Fujairah</option>
					                               <option value="Ras Al Khaimah">Ras Al Khaimah</option>
					                               <option value="Sharjah">Sharjah</option>
					                               <option value="Umm Al Quwain">Umm Al Quwain</option>
					                               <option value="International">International</option>
					                           </select>
                        </fieldset>

                        

                        
                        <div class="button-submit" style="z-index:-99999999999 !important">
                            <button class="tf-button-primary w-full" type="submit">Submit Enquiry<i class="icon-arrow-right-add"></i></button>
                        </div>
                    </form>
                </div>
            </div>

                </div>
                </section>


             

                </div>


<!--</body>
</html>-->
@endsection