@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Terms & Conditions')
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
.privacy-content .cl-container p {
    margin: 15px 0;
}
.privacy-content ul li {
    margin: 14px 0;
    font-size: 14px;
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
                <section class="flat-title inner-page" style="background:url('{{ asset('frontend/assets/images/about-us.webp')  }}');background-repeat:no-repeat;background-size:cover;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>Terms and Conditions</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Terms and Conditions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->


                <section class="py-50 privacy-content">
                <div class="cl-container">
                <p>
                    <b>Effective Date: 2nd Dec. 2023</b>
                </p>
                <p>
                    Welcome to ProfoundRealtors.com (“Website”), operated by Profound Realtors Real Estate Brokerage LLC, a licensed real estate brokerage based in Dubai, United Arab Emirates. By accessing or using our Website, you agree to be bound by the following Terms and Conditions (“Terms”). Please read them carefully.
                </p>

<h2>1. Acceptance of Terms</h2>

<p>
    By visiting or using this Website and its services, you accept and agree to comply with these Terms and our <a href="{{ asset('privacy-policy') }}">Privacy Policy</a>. If you do not agree with these Terms, you must not use this Website.
Profound Realtors reserves the right to revise these Terms at any time without prior notice. It is your responsibility to review them regularly. Continued use of the Website constitutes acceptance of any changes.

</p>

<h2>2. Website Use & Eligibility</h2>

<p>You must be at least 18 years of age to use this Website. You agree to use the Website only for lawful purposes and in a manner that does not infringe the rights of others or restrict or inhibit their use.
We reserve the right to suspend or terminate access to the Website at any time for any reason, including but not limited to a violation of these Terms.
</p>

<h2>3. Intellectual Property Rights</h2>

<p>All content on this Website—including text, images, logos, graphics, property listings, and software—is the intellectual property of Profound Realtors or its licensors and is protected under UAE and international copyright laws.</p>
<p>You may view, download, and print portions of the Website content for personal, non-commercial use only. You may not copy, reproduce, republish, distribute, or otherwise exploit content without our express written permission.</p>

<h2>4. Property Listings & Information Accuracy</h2>

<p>Profound Realtors endeavors to keep all property listings and information accurate and up to date. However, we do not guarantee that the property descriptions, visuals, or availability are always complete, current, or error-free.</p>
<p>All properties listed are subject to availability, final verification, and possible changes in price or status. You are encouraged to verify all property details directly with our authorized agents.</p>


<h2>5. Regulatory Compliance – RERA & Ejari</h2>

<P>Profound Realtors operates in full compliance with:</p>
<ul>
    <li><b>RERA</b> (Real Estate Regulatory Agency) regulations,</li>
    <li><b>Dubai Land Department (DLD) </b> requirements, and</li>
    <li><b>Ejari  </b> registration protocols.</li>
</ul>
<p>All transactions, rentals, and leasing services facilitated by our brokerage must follow official real estate regulations within Dubai. We assist clients with the registration of rental agreements as required by law.</p>
<h2>6. Disclaimers & Limitation of Liability</h2>

<p>This Website is provided on an "as-is" and "as-available" basis without any representations or warranties, express or implied. We make no warranties that the Website or services will be uninterrupted, secure, or error-free.</p>
<p>To the maximum extent permitted under UAE law, Profound Realtors shall not be held liable for any direct, indirect, incidental, or consequential loss or damages arising from your use of or inability to use this Website or any linked sites.</p>

<h2>7. User Conduct & Submissions</h2>

<p>You agree not to misuse the Website by knowingly introducing viruses, trojans, or other harmful material. You may not attempt to gain unauthorized access to the Website, the server, or any connected systems.</p>

<p>Any feedback, comments, or content you submit via this Website shall be treated as non-confidential and may be used by us for business purposes without compensation to you.</p>

<h2>8. Third-Party Websites & Links</h2>

<p>Our Website may contain links to third-party websites for convenience. These links do not imply endorsement by Profound Realtors. We are not responsible for the content or privacy practices of any external sites.</p>

<h2>9. Governing Law & Jurisdiction</h2>

<p>These Terms are governed by the laws of the United Arab Emirates and the applicable laws of the Emirate of Dubai. Any dispute arising out of or relating to the use of this Website shall be subject to the exclusive jurisdiction of Dubai courts.</p>

<h2>10. Contact Information</h2>

<p>
For any questions regarding these Terms, please contact:
</p>
<p><b>Profound Realtors Real Estate Brokerage LLC</b></p>
<p>Office 1202 Tameem House, Barsha Heights 
Dubai, United Arab Emirates
</p>
<p>
    Email: <a href="mailto:info@profoundrealtors.com">info@profoundrealtors.com</a>
</p>
<p>
    Phone: <a href="tel:+97145139666">+971 4 5139666</a>
</p>

                </div>
                </section>


                </div>


@endsection
