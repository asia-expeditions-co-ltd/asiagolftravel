<?php

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

//Route::get('/', function () {
//    return view('hello'); lodlogin
//
//});

Route::get('login', 'UserController@getLogin')->name('getLogin');
Route::post('doLogin', 'UserController@doLogin')->name('doLogin');
Route::get('signout', 'UserController@signout')->name('signout');

Route::get('/', "HomeController@getHome");
Route::get('/activity/single/view/{new}', 'HomeController@singActivity')->name('singleActivity');
Route::get('/golf-details/{tour}', 'HomeController@getTour')->name('tourDetails');
Route::get('/golf-tour/', 'HomeController@getsupdetail')->name('Details');
Route::get('/golf-courses-details/{golf}', 'HomeController@golfDetails')->name('golfDetails');
Route::get('destination', 'HomeController@getDestination')->name('getDest');
Route::get('all-detail/{data1}/{data2}', 'HomeController@all_detail')->name('all-detail');

Route::get('tour-packages/{test}', 'HomeController@tour_pack');
Route::get('tour-packages', 'HomeController@gettour_pack')->name('gettp');

Route::get('golf_courses/{test}', 'HomeController@golf_courses')->name('getgolf_courses');
Route::get('golf_courses', 'HomeController@getgolf_courses')->name('getgolf_courses');

Route::get('hotels-resorts/{test}', 'HomeController@hotel_destination')->name('gethotel_resorts');
Route::get('/hotels-resorts', 'HomeController@gethotel_resorts')->name('gethotel_resorts');
Route::get('province-details', 'HomeController@getprovince')->name('getprovince');

Route::post('/subscribe', 'SubscribeController@subscribe')->name('subscribe');
Route::post('/requesttraveling', 'SubscribeController@requesttraveling')->name('reqtraveling');

Route::get('/contact-us', 'HomeController@getContactUs')->name('getContact');
Route::post('/sendcontact', 'HomeController@sendContact')->name('sendContact');
Route::get('/pop-place/', 'HomeController@getsupdes')->name('supDetails');
Route::get('/mysearchs', 'HomeController@getmysearch')->name('getmysearch');
Route::get('/searchs', 'HomeController@showsearch')->name('showsearch');
Route::get('/searchss/{page}/', 'HomeController@showall')->name('showall');









// Route::get('/show', "Showme\TestShowController@getDashboard");


// -------------------------Back End Section ----------------------||||

Route::group(['middleware'=> 'isAdmin'], function(){
	Route::group(['prefix' => 'admin'], function(){
		Route::get('/', 'AdminController@getDashboard');
		Route::get('/user', 'UserController@getUser')->name('getUser');
		Route::get('/user/add/new', 'UserController@getUserForm')->name('getcreateUser');
		Route::post('/user/add/create', 'UserController@createUser')->name('createUser');
		Route::get('/user/edit/{id}', 'UserController@geteditUser');
		Route::post('user/update/user', 'UserController@updateUser')->name('updateUser');
		// option delete all
		Route::get('/delete', 'AdminController@deleteOption')->name('getDelete');
		Route::get('/searchData', 'AdminController@getSearch')->name('getSearch');
    	Route::post('statuschange', 'AdminController@statusChange')->name('statusChange');
    	Route::post('statuschangevent', 'AdminController@statusChangeEvent')->name('statusChangeEvent');

		// Tour Program
		// Route::resource('/tours', 'TourController');
		Route::get('/tours', 'TourController@index')->name('tourList');
		Route::get('/tours/create', 'TourController@create')->name('tourCreate');
		Route::post('/tours/create/new', 'TourController@store')->name('tourCreateNew');
		Route::get('/tour/{tour}/edit', 'TourController@edit')->name('tourEdit');
		Route::post('/tour/update', 'TourController@update')->name('tourUpdate');

		Route::get('/category', 'CategoryController@index')->name('categoryList');
		Route::get('/category/add', 'CategoryController@create')->name('getcatForm');
		Route::post('/category/create', 'CategoryController@store')->name('catCreate');
		// enents
		Route::get('events', 'EventsController@index')->name('eventList');
		Route::get('event/create', 'EventsController@create')->name('createCreate');
		Route::post('event/create/new', 'EventsController@store')->name('createCreateNew');
		Route::get('event/{event}/edit', 'EventsController@edit')->name('eventEdit');
		Route::post('event/update', 'EventsController@update')->name('updateEvent');

		// golf destination
		Route::get('country', 'DestinationController@countryList')->name('countryList');
		Route::get('country/add/country', 'DestinationController@getCountry')->name('getCountry');
		Route::post('country/create/country', 'DestinationController@createCountry')->name('createCountry');
		Route::get("country/update/country/{id}", 'DestinationController@getCountryEdit')->name('getCountryEdit');
		Route::post('country/update/country', 'DestinationController@updateCountry')->name('updateCountry');

		Route::get('province', 'DestinationController@provinceList')->name('provinceList');
		Route::get('/province/create/add', 'DestinationController@createProvince')->name('createProvince');
		Route::post('/province/create/store', 'DestinationController@createProvinceStore')->name('createProvinceStore');
		Route::get('/province/update/province/{proivince}', 'DestinationController@updateProvince')->name('updateProvince');
		Route::post('/province/update/province/edit', 'DestinationController@editProvince')->name('editProvince');

		Route::get('slide', 'SlideController@getSlide')->name('getSlide');
		Route::get('slide/new/slide', 'SlideController@getSlideForm')->name('slideForm');
		Route::post('slide/create/slide', 'SlideController@createSlide')->name('createSlide');

		Route::get('/subscribeemail', 'SubscribeController@getsubcribe')->name('getsubcribe');
		Route::get('/delatesubscribe', 'SubscribeController@deletesubcribe')->name('deletesubcribe');

		Route::get('/supplier', 'SupplierController@index')->name('suppList');
		Route::get('/createsupplier', 'SupplierController@getsupp')->name('getsup');
		Route::post('/storsupplier', 'SupplierController@create')->name('createsup');
		Route::get('/suplier/{supid}/edit', 'SupplierController@edit')->name('getsupEdit');
		Route::post('/suplier/updat', 'SupplierController@update')->name('supupdate');

		Route::get('logo', 'LogoController@getlogo')->name('getlogo');
		Route::get('logo/new/logo', 'LogoController@getlogoForm')->name('logoForm');
		Route::post('logo/create/logo', 'LogoController@createlogo')->name('createlogo');

        Route::get('/count_view', 'SubscribeController@getcount')->name('getcount');
        Route::get('/count_golf_courses', 'SubscribeController@getcount_g_c')->name('getcount_g_c');
        Route::get('/count_hotel_resort', 'SubscribeController@getcount_h_r')->name('getcount_h_r');

        Route::post('/delet_datal', 'AdminController@delete_data')->name('delete_data_sub');
        Route::post('/delete_count', 'AdminController@delete__counting')->name('delete__counting');
        Route::get('/mail', 'MailingController@getmailing')->name('getmailing');
        
        Route::post('/sendmail', 'MailingController@mail_send')->name('mail_send');
        Route::get('/mailed', 'MailingController@getmailed')->name('getmailed');
        Route::get('/search','MailingController@search')->name('research');
	});
});