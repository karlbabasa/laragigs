<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use PhpParser\Node\Expr\List_;

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

//SINGLE LISTINGS
Route::get('/listings/{listing}', [ListingController::class, 'show']);

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