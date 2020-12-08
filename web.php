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

/*Route::get('/', function () {
    return view('welcome');
});
*/

    use App\Http\Controllers\WebController;
    Route::get('/master', [WebController::class, 'master']);
    Route::get('/nav', [WebController::class, 'nav']);
    Route::get('/about', [WebController::class, 'about']);
    Route::get('/list', [WebController::class, 'list']);