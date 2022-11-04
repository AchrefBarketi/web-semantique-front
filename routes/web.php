<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BaladeController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\veloController;

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
    return view('index');
})->name('index');



Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Update User
Route::put('/users/update/{id}', [UserController::class, 'update']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);










//tours

Route::get('bike-tours', [BaladeController::class, 'index'])->name("tour");


Route::get('bike-tours/City', [BaladeController::class, 'indexCity'])->name('tour-city');
Route::get('bike-tours/City/{Type}', [BaladeController::class, 'getAllByType'])->name('bike-tours');


Route::get('bike-tours/OffRoad', [BaladeController::class, 'indexOffRoad'])->name('tour-offRoad');
Route::get('bike-tours/OffRoad/{Type}', [BaladeController::class, 'getAllByTypeOffRoad'])->name('bike-tours');


Route::get('/single-tour/{type}/{title}', [BaladeController::class, 'show'])->name('single-tour');


Route::get('/searchTour', 'App\Http\Controllers\BaladeController@indexFilter');



// events

Route::get('events', [EventController::class, 'index'])->name('events');


Route::get('events/{Type}', [EventController::class, 'getAllByTypeGoverment'])->name('event');


Route::get('events/{Type}', [EventController::class, 'getAllByTypePrivate'])->name('event');


Route::get('events/m/Marathon', [EventController::class, 'indexMarathon'])->name('event-marathon');
Route::get('events/Marathon/{Type}', [EventController::class, 'getAllByTypeMarathon'])->name('event');


Route::get('/single-event/{type}/{title}', [EventController::class, 'show'])->name('single-event');


Route::get('/searchEvent', 'App\Http\Controllers\EventController@indexFilter');



// bikes

Route::get('bike-rental', [veloController::class , 'index'])->name('bike-rental');


Route::get('bikes/{Type}', [veloController::class, 'getAllByType'])->name('bike');


//Route::get('/single-event/{type}/{title}', [EventController::class, 'show'])->name('single-event');


//Route::get('/searchEvent', 'App\Http\Controllers\EventController@indexFilter');














Route::get('/single-event/{id}', [EventController::class, 'show'])->name('single-event');

Route::post('/comment/create', [CommentController::class, 'store'])->name('comment');

Route::delete('/comment/delete/{id}', [CommentController::class, 'destroy'])->name('delete');


Route::get('/single-tour', function () {
    return view('single-tour');
})->name('single-tour');



Route::get('/profile', function () {
    return view('profile');
})->name('profile');







Route::get('/our-history', function () {
    return view('our-history');
})->name('our-history');

Route::get('/our-team', function () {
    return view('our-team');
})->name('our-team');

Route::get('/services', function () {
    return view('services');
})->name('services');


Route::get('/rentBike', 'App\Http\Controllers\VeloController@index');



Route::get('/Association',  [AssociationController::class, 'index'])->name('Association');


