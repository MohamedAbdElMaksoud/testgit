<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('reg', function () {
    return view('auth.register');
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories', 'CategoryController');
Route::resource('/codes', 'CodesController');
Route::resource('/complains', 'ComplainController');
Route::resource('/contacts', 'ContactUsController');
Route::resource('/clients', 'ClientsController');
Route::resource('/dealers', 'DealerController');
Route::resource('/invitations', 'InvitationController');
Route::resource('/orders', 'OrdersController');
Route::resource('/packagingWays', 'PackagingController');
Route::resource('/packagingTypes', 'PackagingTypesController');