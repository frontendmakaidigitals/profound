 @if( url()->current() !== url('contact-us'))
 <section id="contactus" class="send-message py-50">
                    <div class="cl-container">
                        <div class="row align-items-center">
                        <div class="col-md-5">
                                <div class="heading-section">
                                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Speak to an Advisor</h2>
                                    <div class="text wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <p>Our highly experienced team of professionals will guide you through the process to help you find the perfect home. Get in touch with us and our real estate advisor will help you discover the best options for investment.</p>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <form class="form-send-message" action="{{ url('sell-contact-us') }}" id="form" name="enquireForm">
                                @csrf
                                    <div class="cols">
                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Name</label>
                                        </fieldset>
                                        
                                        <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Email</label>
                                        </fieldset>

                                    </div>
                                    <div class="cols">
                                    <fieldset class="phone wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Phone</label>
                                        </fieldset>
                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Property Details" class="" name="propertyDetails" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Property Details</label>
                                        </fieldset>
                                    </div>
                                    <fieldset class="message wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <textarea name="message" rows="4" placeholder="Your Message" class="" tabindex="2" aria-required="true" required=""></textarea>
                                        <label for="">Your Message</label>
                                  </fieldset>

                                    
                                    <div class="button-submit wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <button class="tf-button-primary w-full" type="submit">Send Message<i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
@endif

 <!-- footer -->
            <footer class="footer style-full style-fourth p-3">
                <div class="footer-inner" style="border-radius:20px">
                    <div class="footer-inner-wrap">
                        <div class="top-footer">
                            <div class="logo-footer">
                                <a href="{{ url('/') }}">
                                    <img id="logo-footer" src="{{url('frontend/assets/images/logo/logo-footer.png')}}" alt="images" >
                                </a>
                            </div>
                            <div class="wg-social">
                                <span>Follow Us</span>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                                <ul class="list-social">
                                    <li>
                                        <a target="blank" href="https://www.facebook.com/profile.php?id=100088102110815">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="blank" href="https://www.instagram.com/profounduae/">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="blank" href="https://www.youtube.com/@profounduae">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="blank" href="https://www.tiktok.com/@profounduae">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="blank" href="https://www.linkedin.com/company/91542862/admin/">
                                            <i class="icon-linkedin2"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="blank" href="https://twitter.com/ProfoundRealto1">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="center-footer">
                            <div class="footer-cl-2">
                                <div class="ft-title">Top Searches</div>
                                <ul class="navigation-menu-footer">
                                    <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-dubai-marina') }}" >Buy Properties in Dubai Marina</a></li>

                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-business-bay') }}">Buy Properties in Business Bay</a></li>

                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-downtown-dubai') }}">Buy Properties in Downtown Dubai</a></li>
                                                
                                                 <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-dubai-creek-harbour') }}">Buy Properties in Dubai Creek Harbour</a></li>

                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-palm-jumeirah') }}">Buy Properties in Palm Jumeirah</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-dubai-land') }}">Buy Properties in Dubai Land</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-damac-hills-dubai') }}" >Buy Properties in Damac Hills Dubai</a></li>

                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-nshama') }}">Buy Properties in Nshama</a></li>

                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-townhouses-in-dubai') }}">Buy Townhouses in Dubai</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-jumeirah-village-circle') }}">Buy Jumeirah Village Circle</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-jbr') }}">Buy Properties in JBR</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-arabian-ranches') }}">Buy Properties in Arabian Ranches</a></li>
                                </ul>
                            </div>
                            <div class="footer-cl-2">
                            <div class="ft-title"></div><br><br><br>
                                <ul class="navigation-menu-footer">
                                    <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-al-furjan') }}">Buy Properties in Al Furjan</a></li>
                                              
                                              <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-al-wasl') }}">Buy Properties in Al Wasl</a></li>
                                              
                                              <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-dch-the-lagoons') }}">Buy Properties in DCH The Lagoons</a></li>
                                              
                                              <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-dubai-hills-estate') }}">Buy Properties in Dubai Hills Estate</a></li>
                                              
                                              <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-culture-village') }}">Buy Properties in Culture Village</a></li>
                                              
                                              <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-blue-water-island') }}">Buy Properties in Blue Waters Island</a></li>
                                              
                                               <li><a class="text-white text-decoration-none" href="{{ url('buy-apartments-in-dubai') }}" >Buy Apartments in Dubai</a></li>

                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-luxury-villas-in-dubai') }}">Buy Luxury Villas in Dubai</a></li>
                                                
                                                 <li><a class="text-white text-decoration-none" href="{{ url('best-property-investment-opportunities-in-dubai') }}">Best Property Investment Opportunities in Dubai</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('buy-properties-in-difc') }}">Buy Properties in DIFC</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-dubai-marina') }}">Property for Rent in Dubai Marina</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-business-bay') }}">Property for Rent in Business Bay</a></li>
                                </ul>
                            </div>
                            <div class="footer-cl-2">
                                <div class="ft-title"></div><br><br><br>
                                <ul class="navigation-menu-footer">
                                  <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-downtown-dubai') }}">Property for Rent in Downtown Dubai</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-jvc') }}">Property for Rent in JVC</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-palm-jumeirah') }}">Property for Rent in Palm Jumeirah</a></li>
                                                
                                                <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-jbr') }}">Property for Rent in JBR</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-arabian-ranches') }}">Property for Rent in Arabian Ranches</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-dubai-creek-harbour') }}">Property for Rent in Dubai Creek Harbour</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-al-furjan') }}">Property for Rent in Al Furjan</a></li>
    
    <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-al-wasl') }}">Property for Rent in Al Wasl</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-dch-the-lagoons') }}">Property for Rent in DCH The Lagoons</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-dubai-hills-estate') }}">Property for Rent in Dubai Hills Estate</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-culture-village') }}">Property for Rent in Culture Village</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-blue-waters-island') }}">Property for Rent in Blue Waters Island</a></li>
                                </ul>
                            </div>
                            <div class="footer-cl-2">
                                <div class="ft-title"></div><br><br><br>
                                <ul class="navigation-menu-footer">
                                    <li><a class="text-white text-decoration-none" href="{{ url('property-for-Rent-in-difc') }}">Property for Rent in DIFC</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('property-for-rent-in-dubailand') }}">Property for Rent in Dubai Land</a></li>
                                        
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-pakistan') }}">Invest in Dubai from Pakistan</a></li>
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-egypt') }}">Invest in Dubai from Egypt</a></li>
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-france') }}">Invest in Dubai from France</a></li>
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-india') }}">Invest in Dubai from India</a></li>
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-qatar') }}">Invest in Dubai from Qatar</a></li>
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-russia') }}">Invest in Dubai from Russia</a></li>
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-uk') }}">Invest in Dubai from UK</a></li>
                                        <li><a class="text-white text-decoration-none" href="{{ url('invest-in-dubai-from-usa') }}">Invest in Dubai from Usa</a></li>
                                </ul>
                            </div>

                        </div>
                        <hr>
                        <div class="center-footer">
                            
                            <div class="footer-cl-2">
                                <p class="text-white">Profound Realtors is the name of excellence in <br> Dubai’s Realty Market. We have evolved as <br> successful real estate professionals for over a <br> decade in Dubai Realty.</p>
                            </div>
                            <div class="footer-cl-2">
                                <div class="ft-title">CONTACT US</div>
                                <ul class="navigation-menu-footer">
                                    <li><a href="tel:+971522983469">Call Us: +971 52 298 3469</a></li>
                                    <li><a href="tel:+97145139666">Call Us: +971 4 513 9666</a></li>
                                    <li><a href="mailto:Info@profoundrealtors.com">Email: info@profoundrealtors.com</a></li>
                                    <li><a style="line-height: 20px;" href="#">Address: Office 1202 Tameem House, <br> Al Foloos, Barsha Heights, <br> Dubai, 452241, Dubai</a></li>
                                    <li><a href="{{ url('geneva') }}">Geneva Office</a></li>
                                    <li><a href="{{ url('uk') }}">UK Office</a></li>
                                </ul>
                            </div>
                            <div class="footer-cl-2">
                                <div class="ft-title">Quick Links</div>
                                <ul class="navigation-menu-footer">
                                    <li><a class="text-white text-decoration-none" href="{{ url('off-plans') }}" >Off-Plan</a></li>

                                                <!--<li><a class="text-white text-decoration-none" href="{{ url('ready') }}">Ready</a></li>-->

                                                <!--<li><a class="text-white text-decoration-none" href="{{ url('rent') }}">Rent</a></li>-->
                                                <li><a class="text-white text-decoration-none" href="{{ url('blogs') }}">Blogs</a></li>

                                                <li><a class="text-white text-decoration-none" href="{{ url('list-your-property') }}">List Your Property</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                                <li><a class="text-white text-decoration-none" href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                                </ul>
                            </div>

                            <div class="footer-cl-1">
                                <div class="ft-title">Subscribe</div>
                                <form class="form-subscribe style-line-bottom">
                                    <fieldset class="email">
                                        <input type="email" placeholder="Your e-mail" class="style-1" name="email" tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit style-absolute-right">
                                        <button class="tf-button-bg" type="submit">Send <i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                                <div class="text">Subscribe to our newsletter to receive our weekly feed.</div>
                            </div>


                        </div>
                        <div class="bottom-footer">
                            <div class="text">Copyright © {{ now()->year }} Profound Realtors All rights reserved. Designed & Marketing By <a style="color:#fff;" target="_blank" href="https://mediafeathers.com/">Media Feathers</a></div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->
</div>
    </div>
    <!-- go top button -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /go top button -->

    

    <!-- login-popup -->
    <div class="modal fade modalCenter" id="modallogin">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
                <div class="image-left">
                    <img src="{{url('frontend/assets/images/section/login.jpg')}}" alt="">
                    <h3>Welcome to Your Real Estate Website</h3>
                </div>  
                <div class="content-right">
                    <h4>Sign into your account</h4>
                    <form class="form-login">
                        <fieldset class="name">
                            <input type="text" placeholder="Username" class="" name="text" tabindex="2" value="creative" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="flex items-center justify-between w-full">
                            <div class="checkbox-item">
                                <label>
                                    <p>Remember me</p>
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label>
                            </div>
                            <a href="#" class="lost-password">Lost your password?</a>
                        </div>
                        <div class="button-submit w-full">
                            <button class="tf-button-primary w-full" type="submit">Login<i class="icon-arrow-right-add"></i></button>
                        </div>
                    </form>
                    <div class="flex items-center justify-center">
                        <p>Not a member?</p>
                        <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalregister">Register here</a>
                    </div>
                    <ul class="wg-social-1">
                        <li><a href="#"><i class="flaticon-google"></i></a></li>
                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /login-popup -->

    <!-- register-popup -->
    <div class="modal fade modalCenter" id="modalregister">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
                <div class="image-left">
                    <img src="{{url('frontend/assets/images/section/login.jpg')}}" alt="">
                    <h3>Welcome to Your Real Estate Website</h3>
                </div>
                <div class="content-right">
                    <h4>Create an account</h4>
                    <form class="form-login">
                        <fieldset class="name">
                            <input type="text" placeholder="Username" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="email">
                            <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Retype Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="flex items-center justify-between">
                            <div class="checkbox-item">
                                <label>
                                    <p>I agree with terms & conditions</p>
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label>
                            </div>
                        </div>
                        <div class="button-submit">
                            <button class="tf-button-primary w-full" type="submit">Register<i class="icon-arrow-right-add"></i></button>
                        </div>
                    </form>
                    <div class="flex items-center justify-center">
                        <p>Have an account?</p>
                        <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modallogin">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /register-popup -->

<style>
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25D366;
      color: white;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
      transition: background-color 0.3s;
      text-decoration: none;
      font-size: 30px;
      z-index: 11111;
    }

    .whatsapp-float:hover {
      background-color: #128C7E;
    }
    @media(max-width:768px){
            .footer #logo-footer{
        width: 43%;
        height: 100%;
    }
    .footer .footer-inner .footer-inner-wrap .top-footer
 {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex
;
    align-items: flex-start;
    justify-content: space-between;
    padding-bottom: 41px;
    gap: 30px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1019607843);
    flex-direction: column;
}
    }
  </style>
  
<a href="https://api.whatsapp.com/send/?phone=971522983469" class="whatsapp-float" target="_blank">
    <div class="icon"> <i class="flaticon-whatsapp"></i> </div>
  </a>

