<?php

use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Visa\VisaController;
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

Route::get('/', function () {
    return view('frontend.pages.home');
});



Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::view('/dashboard', 'backend.pages.admin_home')->name('dashboard');

        Route::controller('App\Http\Controllers\Visa\VisaController')->group(function () {
            Route::prefix('/visa')->group(function () {
                Route::get('/add',  'create')->name("visa-add");
                Route::post('/add',  'store')->name('visa-add');
            });
        });


        // There is country's all routes
        Route::view('country-add', 'backend.pages.country.add_country')->name("country-add");
        Route::post('country-add', [CountryController::class, 'store'])->name('country-add');
        Route::post('country-update/{id}', [CountryController::class, 'update']);
        Route::get('country-delete/{id}', [CountryController::class, 'destroy']);
        Route::get('countries', [CountryController::class, 'countries'])->name("countries");
        // Closed the country's routes here




    });
});


require __DIR__ . '/auth.php';
