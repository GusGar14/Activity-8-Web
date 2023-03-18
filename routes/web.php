<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superherosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/example', function () {
    $page_title = "Example View";
    return view('exampleView', compact('page_title'));
})->name('example');

// Route::get('/heros', function () {})->name('heros');

Route::get('/heros', [superherosController::class, 'index'])->name('heros');
Route::get('/herosw', [superherosController::class, 'indexw'])->name('herosw');
Route::get('/herosm', [superherosController::class, 'indexm'])->name('herosm');
