@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Invest in Dubai from Oman')
	 @section('pageDescription', 'Invest in Dubai from Oman')
	 @section('pageKeyword', 'Invest in Dubai from Oman')
 @endif
@section('content')
<style>
.seo-page-card.text-center{
    min-height:275px;
}
.propNameText a{
    color: #212529;
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
    background: url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-3.webp') }}');
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
    top: 65%;
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
.mainPropForm {
    position: relative;
    z-index: 666;
}
.reasons li {
    font-size: 22px;
    padding-bottom: 15px;
}
.serviceImg img.img-fluid {
    width: 100%;
    max-width: 200px;
}
p.serviceTitle {
    padding: 0 70px;
}
.reasons li::marker {
    color: #DEC093 !important;
}
.btn-secondary {
    background-color: #DEC093 !important;
    color: #06112C !important;
    border-color: #DEC093 !important;
    border-radius: 10px !important;
    padding: 15px 25px 10px !important;
    font-family: 'Bellefair', serif;
}
.countbox {
    width: 100%;
    max-width: 200px;
    background: #fff;
    /* color: #000 !important; */
    position: absolute;
    bottom: 25px;
    margin-left: 17px;
    padding: 10px;
}
</style>

    <section class="mainBg">
        <div class="mainBgOverlay"></div>
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="text-center text-white">
                        <h1 class="display-5 text-white text-center">{{ ($banner != null) ? $banner->heading_one :  'Invest in Dubai from Oman'}}</h1>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Invest in Dubai from Oman</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--<a href="#scrollto" class="btn-mouse"></a>-->
    </section>
    <section class="bgMainAll py-5" id="scrollto">
        <div class="container text-white">
            
            <p>
               Dubai has become a beacon of Real Estate Investment in the world, especially in MENA, Europe and South-East Asia. The reason for this is the amazing options, architecture and payment plan the developers in Dubai have to offer.
            </p>
            <p>
                If you’re from Oman and are looking to invest in Dubai Real Estate, then you’ve come to the right place!
            </p>
            
            
             <div class="row align-items-center py-5">
              <div class="col-md-6">
                  <img class="img-fluid" src="{{asset('frontend/assets/images/dubai-land-2.webp')}}" />
              </div>
              <div class="col-md-6 mt-3">
                   
           <h2>How to Invest in Dubai from Oman</h2>
            <p>
                Welcome to Profound Realtors, your passport to unlocking remarkable investment opportunities in Dubai from Oman. Delve into a world of unparalleled benefits, streamlined procedures, and discover how our dedicated investment managers can be your guiding force in navigating the dynamic Dubai real estate market.
            </p>
              </div>
          </div>
            
         
         
         <div class="row">
              <h3 class="text-center">Benefits of Investing in Dubai</h3>
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                           <h3>Economic Flourish</h3>
            <p>
                Dubai's real estate market thrives amidst economic prosperity, offering Omani investors a unique platform for sustained growth and impressive returns on investment.
            </p>
                      </div>
                  </div>
              
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                                <h3>Tax Advantage</h3>
            <p>
                Embrace Dubai's tax-friendly policies, where Omani investors enjoy the perks of tax-free rental income and capital gains, enhancing the overall profitability of their investments.
            </p>
                      </div>
                  </div>
              
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                          <h3>Diverse Investment Landscape</h3>
            <p>
                Dubai provides a diverse array of real estate options, from luxurious residences to strategically positioned commercial spaces, offering Omani investors a rich tapestry of opportunities for diversification.
            </p>
                      </div>
                  </div>    
          </div>
         
         
         <div class="row mt-5">
              <h3 class="text-center">How to Invest in Dubai from Oman</h3>
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                           <h3>Strategic Research and Planning</h3>
            <p>
                Commence your investment journey with meticulous research on Dubai's real estate landscape. Our investment managers at Profound Realtors are ready to collaborate with you, creating a customized strategy tailored to your investment objectives.
            </p>
                      </div>
                  </div>
              
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                                <h3>Navigating Legal Procedures</h3>
            <p>
                Our expert guidance ensures you navigate the legal landscape with ease, ensuring compliance and a smooth investment process for Omani investors.
            </p>
                      </div>
                  </div>
              
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                          <h3>Curated Property Selection</h3>
            <p>
               Choose from our comprehensive real estate portfolio, carefully curated to meet the diverse preferences and investment goals of Omani investors.
            </p>
                      </div>
                  </div>    
              
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                          <h3>Tailored Financing Solutions</h3>
            <p>
               Explore financing options aligned with your budget, with Profound Realtors collaborating with reputable financial institutions to provide bespoke solutions for Omani investors.
            </p>
                      </div>
                  </div>    
          </div>
         
         <div class="row mt-5">
              <h3 class="text-center">How Profound Realtors Can Elevate Your Investment Journey</h3>
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                           <h3>Expert Guidance Beyond Borders</h3>
            <p>
                Rely on the expertise of our investment managers, possessing in-depth knowledge of the Dubai real estate market. They are committed to helping you make informed decisions and navigate the market with confidence.
            </p>
                      </div>
                  </div>
              
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                                <h3>Personalized Investment Strategies</h3>
            <p>
                Acknowledging the unique nature of each investor, our team crafts personalized investment solutions, ensuring your portfolio aligns seamlessly with your financial aspirations.
            </p>
                      </div>
                  </div>
              
              <div class="col-md-4 mt-3">
                      <div class="seo-page-card text-center">
                          <h3>Streamlined Processes for Peace of Mind</h3>
            <p>
               Experience a hassle-free investment process as our dedicated team manages documentation, legalities, and logistics, allowing you to focus on maximizing your returns.
            </p>
                      </div>
                  </div>    
              
          </div>
         
            
             <div class="row align-items-center py-5">
              <div class="col-md-6">
                  <img class="img-fluid" src="{{asset('frontend/assets/images/dubai-land-3.webp')}}" />
              </div>
              <div class="col-md-6 mt-3">
                   
            <h2>Invest in Dubai with us!</h2>
            <p>
                Investing in Dubai from Oman holds unprecedented promise. Choose Profound Realtors as your trusted partner, and let our experienced investment managers guide you towards unparalleled success in the dynamic Dubai real estate landscape.
            </p>
              </div>
          </div>
            
            
        </div>
    </section>
    
    
      <section>
        <div class="container my-5 text-center">
            <h2 class="mainHeadingCent text-black">Want to Speak to An Agent?</h2>
            <p>
                Our highly experienced team of professionals will guide you through the process to help you find the perfect home. Get in touch with us!
            </p>
            <a href="tel:+97145139666" class="btn btn-secondary">Call Us</a>
        </div>
    </section>
    
  
@endsection