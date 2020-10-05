<?php

use Illuminate\Support\Facades\Route;

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

Route::get('cal', function () {
    return view('welcome');
});

Route::get('black','Vendor\VendorController@black');


Auth::routes();

Route::group(['middleware' => ['auth']],function(){
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('zone','Vendor\ZoneController');
Route::resource('pin-code','Vendor\PincondeController');
Route::resource('plan','Vendor\PlansController');

Route::get('pricing','Vendor\PricingController@pricelist');
Route::post('surface-price','Vendor\PricingController@surfaceprice');
Route::post('air-prices','Vendor\PricingController@airprice');
Route::post('vas-charges','Vendor\PricingController@vascharges');
Route::post('handling-charges','Vendor\PricingController@handlingcharge');

Route::get('dashboard','ShippingRateCalculator@dash_board');
Route::get('vendor-profile','Vendor\VendorController@vendor_profile');
Route::post('pincode-import','Vendor\PincondeController@Importpincode');

Route::get('all-vendor','Vendor\VendoerChangesController@allvendor');

});


/*---------------------------------Fornt Hand ---------------------------------------------*/


Route::get('shipcal','ShippingRateCalculator@scalculator');
Route::get('surface-list','ShippingRateCalculator@surface_price');
Route::get('/','Front\HomeController@index');

