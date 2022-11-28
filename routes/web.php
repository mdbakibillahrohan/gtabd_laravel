<?php

use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Packages\PackagesFrontendController;
use App\Http\Controllers\Visa\VisaFrontendController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/redirectToVisaSlug', [VisaFrontendController::class, 'redirectToSlug'])->name("redirectToVisaSlug");
Route::get('/visa/{slug}', [VisaFrontendController::class, 'index'])->name('visa-services');
Route::get('package/{slug}', [PackagesFrontendController::class, 'show'])->name('package-details');



Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/home-controller', [DashboardController::class, 'homeController'])->name('homeController');

        Route::controller('App\Http\Controllers\Visa\VisaController')->group(function () {
            Route::prefix('/visa')->group(function () {
                Route::get('/add',  'create')->name("visa-add");
                Route::post('/add',  'store')->name('visa-add');
                Route::get('services', 'index')->name('visa-index');
                Route::get('/edit/{id}', 'edit')->name('visa-edit-form');
                Route::post('/update/{id}', 'update')->name('visa-update');
                Route::get('/delete/{id}', 'destroy')->name('visa-delete');
            });
        });


        // There is country's all routes
        Route::view('country-add', 'backend.pages.country.add_country')->name("country-add");
        Route::post('country-add', [CountryController::class, 'store'])->name('country-add');
        Route::post('country-update/{id}', [CountryController::class, 'update']);
        Route::get('country-delete/{id}', [CountryController::class, 'destroy']);
        Route::get('countries', [CountryController::class, 'countries'])->name("countries");
        // Closed the country's routes here



        // Here has all routes of packages
        Route::controller('App\Http\Controllers\Packages\PackagesController')->group(function () {
            Route::prefix('packages')->group(function () {
                Route::get('/', 'index')->name('packages.list');
                Route::get('/add', 'create')->name('packages.add');
                Route::post('/store', 'store')->name('packages.store');
                Route::get('/edit/{id}', 'edit')->name('packages.edit');
                Route::post('/update/{id}', 'update')->name('packages.update');
                Route::get('/delete/{id}', 'destroy')->name('packages.delete');
                Route::get('/duplicate/{id}', 'duplicate')->name('packages.duplicate');
            });
        });
        // closed packages routes here

    });
});


require __DIR__ . '/auth.php';



// these routes return the json value
Route::get('/country_visa', [HomeController::class, 'country_visa']);
Route::get('/home-controller/give-permission/{id}', [DashboardController::class, 'GivePermission']);
Route::get('/home-controller/deny-permission/{id}', [DashboardController::class, 'DenyPermisssion']);
