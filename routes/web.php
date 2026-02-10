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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::any('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/skill', function () {
    return view('skills');
});
Route::get('/experience', function () {
    return view('experience');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/viewportfolio/{id}', function ($id) {
	// dd($id);
    return view('modals.viewportfolio',['i' => $id]);
});

Route::get('/viewportfolioFamehrmsApp/{id}','arqumportfoliocontroller@viewportfolioFamehrmsApp');

Route::get('/viewportfoliohrms/{id}','arqumportfoliocontroller@viewportfoliohrms');

Route::get('/viewportfolioJP/{id}','arqumportfoliocontroller@viewportfolioJP');

Route::get('/viewportfolioES/{id}','arqumportfoliocontroller@viewportfolioES');

Route::get('/viewportfolioMobily/{id}','arqumportfoliocontroller@viewportfolioMobily');

Route::get('/viewportfolioMobilelink/{id}','arqumportfoliocontroller@viewportfolioMobilelink');

Route::get('/viewportfolioEMS/{id}','arqumportfoliocontroller@viewportfolioEMS');

Route::get('/viewportfolioPayroll/{id}','arqumportfoliocontroller@viewportfolioPayroll');
