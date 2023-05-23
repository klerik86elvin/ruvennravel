<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;

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
Route::get('lang/{locale}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.locales'))) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }
    return redirect()->back();
});
Route::get('/',[\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/tour/{id}',[\App\Http\Controllers\TourController::class, 'get']);
Route::post('/form/callToMe',[\App\Http\Controllers\FormController::class, 'callToMe']);
Route::post('/form/order',[\App\Http\Controllers\FormController::class, 'order']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
