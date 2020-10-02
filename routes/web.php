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

// Route::get('/package', function () {
//     return view('welcome');

// });


Route::match(['get', 'post'], 'package', 'PackageController@package')->name('package.getPost');
Route::get('package/{id}','PackageController@getIndex')->name('packages.getIndex');
Route::put('package/{id}','PackageController@putPackage')->name('packages.put');
Route::patch('package/{id}','PackageController@patchPackage')->name('packages.patch');
Route::delete('package/{id}','PackageController@deletePackage')->name('packages.delete');


