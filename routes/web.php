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

Route::get('/', function () {
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

Route::get('/viewportfoliohrms/{id}','arqumportfoliocontroller@viewportfoliohrms');

Route::get('/viewportfolioJP/{id}','arqumportfoliocontroller@viewportfolioJP');

Route::get('/viewportfolioES/{id}','arqumportfoliocontroller@viewportfolioES');

Route::get('/viewportfolioMobily/{id}','arqumportfoliocontroller@viewportfolioMobily');

Route::get('/viewportfolioMobilelink/{id}','arqumportfoliocontroller@viewportfolioMobilelink');

Route::get('/viewportfolioEMS/{id}','arqumportfoliocontroller@viewportfolioEMS');

Route::get('/viewportfolioPayroll/{id}','arqumportfoliocontroller@viewportfolioPayroll');
