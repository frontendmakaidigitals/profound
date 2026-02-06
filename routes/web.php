<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SitemapController;


/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/





//Route::get('/create-account/{name}', 'CreateAccountController@index');


Route::get('/sitemap.xml', [SitemapController::class, 'index']);


Route::get('/cache-view', function () {
    $view = Artisan::call('view:cache');

    return "Cache view";
});


// clear chache route

Route::get('/clear-cache', function () {

    $exitCode    = Artisan::call('cache:clear');

    $config      = Artisan::call('config:cache');

    $view        = Artisan::call('view:clear');
    $optimize        = Artisan::call('optimize:clear');

    return "Cache is cleared";
});

/*******************

 * Cronjob  *

 *******************/

Route::get('cronjob/property/addxml', 'CronController@addxml');


Auth::routes();




/*******************

 * FRONTEND ROUTES  *

 *******************/


Route::namespace('Frontend')->middleware(['htmlMinifier', 'cacheResponse:5'])->group(function () {
    // Route::namespace('Frontend')->middleware(['htmlMinifier'])->group(function(){

    Route::get('/test', 'HomeController@test')->name('test');

    Route::get('/', 'HomeController@home')->name('home')->middleware('cache.headers:private;max_age=3600');

    Route::any('autocomplete-search', 'HomeController@autocompleteSearch')->name('autocomplete-search');

    Route::get('floor-plans', 'HomeController@floorPlans')->name('floor-plans')->middleware('cache.headers:private;max_age=3600');

    Route::any('floor-plans-details/{slug}', 'HomeController@floorPlansDetails')->name('floor-plans-details');

    Route::any('listing', 'HomeController@listing')->name('listing')->middleware('cache.headers:private;max_age=3600');

    Route::any('about-us', 'HomeController@aboutUs')->name('about-us')->middleware('cache.headers:private;max_age=3600');

    Route::any('agents', 'HomeController@agents')->name('agents')->middleware('cache.headers:private;max_age=3600');

    Route::any('agents/{slug}', 'HomeController@singleAgent')->name('agent');
    Route::any('privacy-policy', 'HomeController@privacyPolicy')->name('privacy-policy');
    Route::any('terms-conditions', 'HomeController@termsConditions')->name('terms-conditions');

    Route::any('developers', 'HomeController@developers')->name('developers')->middleware('cache.headers:private;max_age=3600');

    Route::any('developer/{slug}', 'HomeController@singleDeveloper')->name('developer');

    Route::any('careers', 'HomeController@careers')->name('careers');

    Route::any('careersadd', 'CareersController@add')->name('careersadd');

    Route::any('contactadd', 'CareersController@add_contact')->name('contactadd');

    Route::any('contact-us', 'HomeController@contactUs')->name('contact-us')->middleware('cache.headers:private;max_age=3600');

    Route::any('mortgage-calculator', 'HomeController@mortgageCalculator')->name('mortgage-calculator');
    Route::any('mortgage', 'HomeController@mortgage')->name('mortgage');

    Route::any('register-your-interest', 'PdfdownloadController@registerYourInterest')->name('register-your-interest');



    Route::any('career', 'HomeController@career')->name('career');

    Route::any('property-listing/{id}', 'HomeController@listing')->name('property-listing');

    Route::any('off-plans', 'HomeController@offPlans')->name('off-Plans')->middleware('cache.headers:private;max_age=3600');

    Route::any('featured-listings', 'HomeController@featuredListings')->name('featuredListings')->middleware('cache.headers:private;max_age=3600');

    Route::any('all-properties', 'HomeController@allProperties')->name('allProperties');

    Route::get('off-plans-property/{slug}', 'HomeController@singleOffPlanProperty');
    Route::get('off-plans-property1/{slug}', 'HomeController@singleOffPlanProperty1');

    Route::any('download-brochure', 'PdfdownloadController@downloadPdf')->name('download-brochure');

    Route::any('contact-agent', 'PdfdownloadController@contactAgent')->name('contact-agent');

    Route::any('request-info', 'PdfdownloadController@requestInfo')->name('request-info');

    Route::any('sell-contact-us', 'PdfdownloadController@sellContactUs')->name('sell-contact-us');
    Route::any('register-interest', 'PdfdownloadController@registerInterest')->name('register-interest');
    Route::any('sell-pdf-form', 'PdfdownloadController@sellPdfForm')->name('sell-pdf-form');
    Route::any('sell-pdf-form2', 'PdfdownloadController@sellPdfForm2')->name('sell-pdf-form2');
    Route::any('sell-pdf-form3', 'PdfdownloadController@sellPdfForm3')->name('sell-pdf-form3');
    Route::any('sell-home', 'PdfdownloadController@sellHome')->name('sell-home');

    Route::any('join-team', 'PdfdownloadController@joinTeam')->name('join-team');

    Route::any('form-subscribe', 'PdfdownloadController@formSubscribe');
    Route::any('calculateMortgage', 'PdfdownloadController@calculateMortgage')->name('calculateMortgage');

    Route::get('download-floorplan/contact-form', 'PdfdownloadController@DownloadFloorplan');

    Route::any('services', 'HomeController@services')->name('services');

    Route::any('invest-in-dubai', 'HomeController@investInDubai')->name('invest-in-dubai')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-luxury-villas-in-dubai', 'HomeController@buyLuxuryVillasInDubai')->name('buy-luxury-villas-in-dubai')->middleware('cache.headers:private;max_age=3600');
    Route::any('best-property-investment-opportunities-in-dubai', 'HomeController@bestpropertyinvestmentopportunitiesindubai')->name('best-property-investment-opportunities-in-dubai')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-apartments-in-dubai', 'HomeController@buyApartmentsinDubai')->name('buy-apartments-in-dubai')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-dubai-marina', 'HomeController@buyPropertiesinDubaiMarina')->name('buy-properties-in-dubai-marina')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-business-bay', 'HomeController@buyPropertiesinBusinessBay')->name('buy-properties-in-business-bay')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-downtown-dubai', 'HomeController@buyPropertiesinDowntownDubai')->name('buy-properties-in-downtown-dubai')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-dubai-creek-harbour', 'HomeController@buyPropertiesinDubaiCreekHarbour')->name('buy-properties-in-dubai-creek-harbour')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-palm-jumeirah', 'HomeController@buyPropertiesinPalmJumeirah')->name('buy-properties-in-palm-jumeirah')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-dubai-land', 'HomeController@buyPropertiesindubaiLand')->name('buy-properties-in-dubai-land')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-damac-hills-dubai', 'HomeController@buyPropertiesinDamacHillsDubai')->name('buy-properties-in-damac-hills-dubai')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-nshama', 'HomeController@buyPropertiesinNshama')->name('buy-properties-in-nshama')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-townhouses-in-dubai', 'HomeController@buyTownhousesinDubai')->name('buy-townhouses-in-dubai')->middleware('cache.headers:private;max_age=3600');

    Route::any('buy-jumeirah-village-circle', 'HomeController@buyJumeirahVillageCircle')->name('buy-jumeirah-village-circle')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-jbr', 'HomeController@buyPropertiesInJbr')->name('buy-properties-in-jbr')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-arabian-ranches', 'HomeController@BuyPropertiesinArabianRanches')->name('buy-properties-in-arabian-ranches')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-al-furjan', 'HomeController@BuyPropertiesinAlFujan')->name('buy-properties-in-al-furjan')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-al-wasl', 'HomeController@BuyPropertiesinAlWasl')->name('buy-properties-in-al-wasl')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-dch-the-lagoons', 'HomeController@BuyPropertiesinDCHTheLagoons')->name('buy-properties-in-dch-the-lagoons')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-dubai-hills-estate', 'HomeController@BuyPropertiesinDubaiHillsEstate')->name('buy-properties-in-dubai-hills-estate')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-culture-village', 'HomeController@BuyPropertiesinCultureVillage')->name('buy-properties-in-culture-village')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-blue-water-island', 'HomeController@BuyPropertiesinBlueWatersIsland')->name('buy-properties-in-blue-water-island')->middleware('cache.headers:private;max_age=3600');
    Route::any('buy-properties-in-difc', 'HomeController@BuyPropertiesinDIFC')->name('buy-properties-in-difc')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-dubai-marina', 'HomeController@PropertyforRentinDubaiMarina')->name('property-for-rent-in-dubai-marina')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-business-bay', 'HomeController@PropertyforRentinBusinessBay')->name('property-for-rent-in-business-bay')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-downtown-dubai', 'HomeController@PropertyforRentinDowntownDubai')->name('property-for-rent-in-downtown-dubai')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-jvc', 'HomeController@PropertyforRentinJVC')->name('property-for-rent-in-jvc')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-palm-jumeirah', 'HomeController@PropertyforRentinPalmJumeirah')->name('property-for-rent-in-palm-jumeirah')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-jbr', 'HomeController@PropertyforRentinJBR')->name('property-for-rent-in-jbr')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-arabian-ranches', 'HomeController@PropertyforRentinArabinanRanches')->name('property-for-rent-in-arabian-ranches')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-dubai-creek-harbour', 'HomeController@PropertyforRentinDubaiCreekHarbour')->name('property-for-rent-in-dubai-creek-harbour')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-al-furjan', 'HomeController@PropertyforRentinAlFujan')->name('property-for-rent-in-al-furjan')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-al-wasl', 'HomeController@PropertyforRentinAlWasl')->name('property-for-rent-in-al-wasl')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-dch-the-lagoons', 'HomeController@PropertyforRentinDCHTheLagoons')->name('property-for-rent-in-dch-the-lagoons')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-dubai-hills-estate', 'HomeController@PropertyforRentinDubaiHillsEstate')->name('property-for-rent-in-dubai-hills-estate')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-culture-village', 'HomeController@PropertyforRentinCultureVillage')->name('property-for-rent-in-culture-village')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-blue-waters-island', 'HomeController@PropertyforRentinBlueWatersIsland')->name('property-for-rent-in-blue-waters-island')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-Rent-in-difc', 'HomeController@PropertyforRentinDIFC')->name('property-for-Rent-in-difc')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-for-rent-in-dubailand', 'HomeController@PropertyforRentinDubaiLand')->name('property-for-rent-in-dubailand')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-oman', 'HomeController@investinDubaiFromOman')->name('invest-in-dubai-from-oman')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-pakistan', 'HomeController@investinDubaiFromPak')->name('invest-in-dubai-from-pakistan')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-egypt', 'HomeController@investinDubaiFromEgypt')->name('invest-in-dubai-from-egypt')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-france', 'HomeController@investinDubaiFromFrance')->name('invest-in-dubai-from-france')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-india', 'HomeController@investinDubaiFromIndia')->name('invest-in-dubai-from-india')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-qatar', 'HomeController@investinDubaiFromQatar')->name('invest-in-dubai-from-qatar')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-russia', 'HomeController@investinDubaiFromRussia')->name('invest-in-dubai-from-russia')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-uk', 'HomeController@investinDubaiFromUk')->name('invest-in-dubai-from-uk')->middleware('cache.headers:private;max_age=3600');
    Route::any('invest-in-dubai-from-usa', 'HomeController@investinDubaiFromUsa')->name('invest-in-dubai-from-usa')->middleware('cache.headers:private;max_age=3600');
    Route::any('property-worth', 'HomeController@propertyWorth')->name('property-worth')->middleware('cache.headers:private;max_age=3600');
    Route::any('profound-videos', 'HomeController@profoundVideos')->name('profound-videos')->middleware('cache.headers:private;max_age=3600');
    Route::any('geneva', 'HomeController@geneva')->name('Geneva')->middleware('cache.headers:private;max_age=3600');
    Route::any('uk', 'HomeController@uk')->name('uk')->middleware('cache.headers:private;max_age=3600');
    Route::any('syed-naveed-anjum', 'HomeController@naveed')->name('syed-naveed-anjum')->middleware('cache.headers:private;max_age=3600');

    Route::get('team/{slug}', 'HomeController@singleTeamPage');



    Route::any('sell', 'HomeController@sell')->name('sell')->middleware('cache.headers:private;max_age=3600');

    Route::any('rent', 'HomeController@rent')->name('rent')->middleware('cache.headers:private;max_age=3600');

    // Route::any('ready', 'HomeController@ready')->name('ready')->middleware('cache.headers:private;max_age=3600');

    Route::get('rent-property/{slug}', 'HomeController@singleProperty')->name('rent-property');

    Route::any('buy', 'HomeController@buy')->name('buy');

    Route::get('thank-you', 'HomeController@thankYou')->name('thankYou');
    Route::get('thanks', 'HomeController@thanks')->name('thanks');

    Route::get('home', 'HomeController@home_test');



    Route::any('ajexlisting', 'HomeController@ajexlisting')->name('ajexlisting');

    Route::any('ajexfeaturedlisting', 'HomeController@ajexfeaturedlisting')->name('ajexfeaturedlisting');

    Route::get('property/{slug}', 'HomeController@singleProperty')->name('property')->middleware('cache.headers:private;max_age=3600');

    Route::get('featuredListings', 'HomeController@featuredListings1')->name('featuredListings')->middleware('cache.headers:private;max_age=3600');

    Route::get('blogs', 'HomeController@news')->name('news');

    Route::get('blog-details/{slug}', 'HomeController@news_details')->name('news-details');



    Route::any('language', 'HomeController@language')->name('language');

    Route::any('currency', 'HomeController@currency')->name('currency');

    Route::any('areatype', 'HomeController@areatype')->name('areatype');

    Route::match(['get', 'post'], 'list-your-property', 'HomeController@listYourProperty');

    Route::any('list-property-form', 'HomeController@listPropertyForm')->name('list-property-form');

    Route::post('agent-video-call', 'HomeController@agentVideoCall');
    Route::get('download-zip', 'HomeController@downloadZip');
});







/***************

 * Admin ROUTES *

 ***************/

Route::middleware(['auth', 'admin'])->namespace('Admin')->prefix('admin')->group(function () {





    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');



    /*$pages = \DB::table('tbl_landing_pages')->pluck('page_url');

    foreach($pages as $page){

        Route::get($page, [LandingPageController::class,'view'])->name(($page=='/'? 'home' : $page));

    }*/

    Route::any('user/edit/{id}', 'UserController@edit')->name('admin.user.edit');
    Route::any('video-call-meetings', 'UserController@videoCallMeetings');

    //pages routes

    // Route::get('pages', 'LandingPageController@index')->name('admin.pages');

    // Route::match(['get','post'],'page/store', 'LandingPageController@store')->name('admin.page.store');

    // Route::match(['get','post'],'page/edit/{id}', 'LandingPageController@edit');

    // Route::match(['get','post'],'page/delete/{id}', 'LandingPageController@delete');



    // Route::get('chassis_listing', 'ChassisController@index')->name('admin.chassis_listing');

    // Route::match(['get','post'],'ajax/chassisImportSheet','ChassisController@importSheet');



    //Driver as customer routes

    Route::get('customers', 'CustomerController@index')->name('admin.customers');

    Route::match(['get', 'post'], 'export-customers', 'CustomerController@exportCustomers');

    Route::post('customerStatusChange', 'CustomerController@customerStatusChange');

    Route::post('sendMailToCustomer', 'CustomerController@sendMailToCustomer');

    Route::post('sendMailToAdmin', 'CustomerController@sendMailToAdmin');

    Route::match(['get', 'post'], 'customers/edit/{id}', 'CustomerController@edit');

    Route::match(['get', 'post'], 'customer/delete/{id}', 'CustomerController@delete');



    //category routes

    Route::get('category', 'CategoryController@index')->name('admin.category');

    Route::match(['get', 'post'], 'category/add', 'CategoryController@add')->name('admin.category.add');

    Route::match(['get', 'post'], 'category/edit/{id}', 'CategoryController@edit');

    Route::match(['get', 'post'], 'category/delete/{id}', 'CategoryController@delete');



    //Slider routes

    Route::get('sliders', 'SliderController@index')->name('admin.sliders');

    Route::match(['get', 'post'], 'slider/store', 'SliderController@store')->name('admin.slider.store');

    Route::match(['get', 'post'], 'slider/edit/{id}', 'SliderController@edit');

    Route::match(['get', 'post'], 'slider/delete/{id}', 'SliderController@delete');



    //Status routes

    Route::get('status', 'StatusController@index')->name('admin.status');

    Route::match(['get', 'post'], 'status/add', 'StatusController@add')->name('status.add');

    Route::match(['get', 'post'], 'status/add/{id}', 'StatusController@add');

    Route::match(['get', 'post'], 'status/delete/{id}', 'StatusController@delete');

    // Pages routes
    Route::get('about', 'AboutController@index')->name('admin.about');
    Route::match(['get', 'post'], 'about/store/', 'AboutController@store')->name('about.store');
    Route::get('service', 'ServiceController@index')->name('admin.service');
    Route::match(['get', 'post'], 'service/store/', 'ServiceController@store')->name('service.store');

    //Accommodataion routes

    Route::get('accommodataion', 'AccommodataionController@index')->name('admin.accommodataion');

    Route::match(['get', 'post'], 'accommodataion/add', 'AccommodataionController@add')->name('accommodataion.add');

    Route::match(['get', 'post'], 'accommodataion/add/{id}', 'AccommodataionController@add');

    Route::match(['get', 'post'], 'accommodataion/delete/{id}', 'AccommodataionController@delete');



    //neighbourhoods routes

    Route::get('neighbourhoods', 'NeighbourhoodsController@index')->name('admin.neighbourhoods');

    Route::match(['get', 'post'], 'neighbourhoods/add', 'NeighbourhoodsController@add')->name('accommodataion.add');

    Route::match(['get', 'post'], 'neighbourhoods/add/{id}', 'NeighbourhoodsController@add');

    Route::match(['get', 'post'], 'neighbourhoods/delete/{id}', 'NeighbourhoodsController@delete');





    // Amenity route



    Route::get('amenities', 'AmenityController@index')->name('admin.amenities');

    Route::match(['get', 'post'], 'amenities/add', 'AmenityController@add')->name('amenities.add');

    Route::match(['get', 'post'], 'amenities/edit/{id}', 'AmenityController@edit');

    Route::match(['get', 'post'], 'amenities/delete/{id}', 'AmenityController@delete');

    Route::get('pagemetas', 'PageMetasController@index')->name('admin.pagemetas');
    Route::match(['get', 'post'], 'pagemetas/add', 'PageMetasController@add')->name('pagemetas.add');
    Route::match(['get', 'post'], 'pagemetas/edit/{id}', 'PageMetasController@edit');
    Route::match(['get', 'post'], 'pagemetas/delete/{id}', 'PageMetasController@delete');

    // Feedback route



    Route::get('clienttestimonials', 'ClienttestimonialsController@index')->name('admin.clienttestimonials');

    Route::match(['get', 'post'], 'clienttestimonials/add', 'ClienttestimonialsController@add')->name('clienttestimonials.add');

    Route::match(['get', 'post'], 'clienttestimonials/edit/{id}', 'ClienttestimonialsController@edit');

    Route::match(['get', 'post'], 'clienttestimonials/delete/{id}', 'ClienttestimonialsController@delete');







    // Amenity route



    Route::get('communities', 'CommunitiesController@index')->name('admin.communities');

    Route::match(['get', 'post'], 'communities/add', 'CommunitiesController@add')->name('communities.add');

    Route::match(['get', 'post'], 'communities/edit/{id}', 'CommunitiesController@edit');

    Route::match(['get', 'post'], 'communities/delete/{id}', 'CommunitiesController@delete');





    // Specification route



    Route::get('specification', 'SpecificationController@index')->name('admin.specification');

    Route::match(['get', 'post'], 'specification/add', 'SpecificationController@add')->name('amenities.add');

    Route::match(['get', 'post'], 'specification/edit/{id}', 'SpecificationController@edit');

    Route::match(['get', 'post'], 'specification/delete/{id}', 'SpecificationController@delete');





    // property route

    Route::get('property', 'PropertyController@index')->name('admin.property');

    Route::match(['get', 'post'], 'property/add', 'PropertyController@add')->name('property.add');

    Route::match(['get', 'post'], 'property/addxml', 'PropertyController@addxml')->name('addxml');

    Route::match(['get', 'post'], 'property/edit/{id}', 'PropertyController@edit');

    Route::match(['get', 'post'], 'property/delete/{id}', 'PropertyController@delete');



    // Floorplans route

    Route::get('floorplans', 'FloorplansController@index')->name('admin.floorplans');

    Route::match(['get', 'post'], 'floorplans/add', 'FloorplansController@add')->name('floorplans.add');

    Route::match(['get', 'post'], 'floorplans/edit/{id}', 'FloorplansController@edit');

    Route::match(['get', 'post'], 'floorplans/delete/{id}', 'FloorplansController@delete');



    // news route

    Route::get('blogs', 'BlogController@index')->name('admin.news');

    Route::match(['get', 'post'], 'blog/add', 'BlogController@add')->name('property.add');

    Route::match(['get', 'post'], 'blog/edit/{id}', 'BlogController@edit');

    Route::match(['get', 'post'], 'blog/delete/{id}', 'BlogController@delete');





    // Careerslist route

    Route::get('careerslist', 'CareersController@index')->name('admin.careerslist');

    Route::match(['get', 'post'], 'careerslist/delete/{id}', 'CareersController@delete');
    Route::match(['get', 'post'], 'careerslist/deleteCareer', 'CareersController@deleteCareer')->name('careerslist.deleteCareer');




    // Contactlist route

    Route::get('contactlist', 'ContactController@index')->name('admin.contactlist');

    Route::match(['get', 'post'], 'contactlist/delete/{id}', 'ContactController@delete');
    Route::match(['get', 'post'], 'contactlist/deleteContact', 'ContactController@deleteContact')->name('contactlist.deleteContact');


    // developer rout

    Route::get('developers', 'DeveloperController@index')->name('admin.developers');

    Route::match(['get', 'post'], 'developers/store', 'DeveloperController@store');

    Route::match(['get', 'post'], 'developers/edit/{id}', 'DeveloperController@edit');

    Route::match(['get', 'post'], 'developers/delete/{id}', 'DeveloperController@delete');



    Route::get('agents', 'AgentsController@index')->name('admin.agents');

    Route::match(['get', 'post'], 'agent/store', 'AgentsController@store');

    Route::match(['get', 'post'], 'agent/edit/{id}', 'AgentsController@edit');

    Route::match(['get', 'post'], 'agent/delete/{id}', 'AgentsController@delete');



    // partners rout

    Route::get('partners', 'PartnersController@index')->name('admin.partners');

    Route::match(['get', 'post'], 'partner/store', 'PartnersController@store');

    Route::match(['get', 'post'], 'partner/edit/{id}', 'PartnersController@edit');

    Route::match(['get', 'post'], 'partner/delete/{id}', 'PartnersController@delete');





    //Settings Routs Start

    Route::match(['get', 'post'], 'generalSetting', 'SettingController@generalSettingUpdate');

    //Settings Routs end



});



Route::match(['get', 'post'], 'admin/login', 'Auth\LoginController@adminLogin');

Route::match(['get', 'post'], 'admin/logout', 'Auth\LoginController@adminLogout');

Route::match(['get', 'post'], 'logout', 'Auth\LoginController@logout');
