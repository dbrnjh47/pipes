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


Route::get('/', 'PageController@index')->name('home');
Route::get('/oplata', 'PageController@oplata');
Route::get('/dostavka', 'PageController@dostavka');
Route::get('/about-us', 'PageController@about_us');
Route::get('/contacts', 'PageController@contacts');
Route::get('/certificates', 'PageController@certificates');
Route::get('/news', 'PageController@news');
Route::get('/thank', 'PageController@thank')->name('thank');

Route::get('/reviews', 'PageController@reviews');
Route::post('/reviews', 'ReviewController@reviewsAdd');
Route::get('/email', 'PageController@email');
Route::get('/reviews-confirm/{code}/{code_status}', 'ReviewController@reviewsConfirm')->name('reviews-confirm');
Route::get('/reviews/pagination/{pagination}', 'ReviewController@reviewsPagination');
Route::get('/mailru-domainHFP1omZNjigfWgML.html', function () {
    return view('mailru');
});



Route::get('/catalog/{id}', 'PageController@catalog');
Route::get('/service/{id}', 'PageController@service');
Route::post('/servisAjax/{id}', 'ServiceController@servisAjax');
Route::get('/service/lot/{id}', 'PageController@service_lot');

Route::post('/checkout', 'ServiceController@checkout');
Route::post('/call-order', 'ServiceController@call_order');

// вход
Route::group(['middleware' => 'guest'], function () {
    Route::get('/admin/login', 'PageController@login')->name('login');
    Route::post('/login', 'AuthController@login');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/logout', 'AuthController@logout');
});
// вход

// админка
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
	Route::get('/', 'AdminController@index');

    Route::get('/catalogs', 'AdminController@catalogs');
    Route::post('/catalogsAjax', 'AdminController@catalogsAjax');
    Route::get('/catalogs/del/{id}', 'AdminController@catalogs_del');
    Route::post('/catalogs/add', 'AdminController@addcatalogs');

    Route::get('/catalogs_editing/{id}', 'AdminController@catalogs_editing');
	Route::post('/catalogs/save', 'AdminController@catalogsSave');

    Route::get('/services', 'AdminController@services');
    Route::post('/servicesAjax', 'AdminController@servicesAjax');
    Route::get('/services/del/{id}', 'AdminController@services_del');
    Route::post('/services/add', 'AdminController@addservices');

    Route::get('/services_editing/{id}', 'AdminController@services_editing');
	Route::post('/services/save', 'AdminController@servicesSave');

    Route::get('/service_lots', 'AdminController@service_lots');
    Route::post('/service_lotsAjax', 'AdminController@service_lotsAjax');
    Route::post('/get-information-service/{id}', 'AdminController@get_information_service');
    Route::get('/service_lots/del/{id}', 'AdminController@service_lots_del');
    Route::post('/service_lots/add', 'AdminController@addservice_lots');

    Route::get('/service_lots_editing/{id}', 'AdminController@service_lots_editing');
	Route::post('/service_lots/save', 'AdminController@service_lotsSave');

    Route::get('/news', 'AdminController@news');
	Route::post('/newsAjax', 'AdminController@newsAjax');
    Route::get('/news/del/{id}', 'AdminController@news_del');
    Route::post('/news/add', 'AdminController@addNews');

	Route::get('/news_editing/{id}', 'AdminController@news_editing');
	Route::post('/news/save', 'AdminController@newsSave');
	
    Route::get('/settings', ['as' => 'admin.settings', 'uses' => 'AdminController@settings']);
	Route::post('/setting/save', 'AdminController@settingsSave');
});
// админка