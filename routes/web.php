<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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



//ALL LISTINGS
Route::get('/', [ListingController::class, 'index']);

//Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// SHOW CREATE FORM
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//STORE LISTING DATA
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
 
//SHOW EDIT FORM
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');;

//EDIT SUBMIT TO UPDATE
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//DELETE
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//SINGLE LISTINGS
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//CREATE NEW USER
Route::post('/users', [UserController::class, 'store']);

//LOGOUT
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//SHOW LOGIN FORM
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Common Resource Routes:
// index - show all listings
// show - show single Listing
// create - show form to create new Listing
// store - store new Listing
// edit - show form to edit listing
// update - update Listing
// destroy - delete listing

// Route::get('hello', function() {
//     return response('<h1>hello world<h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id){
//     //dd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return $request->name . ' ' . $request->city;
// });