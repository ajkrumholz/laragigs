<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

// Listings Routes

// Show all listings
Route::get('/', [ListingController::class, 'index']);

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Show listing create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store new listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show edit form for listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update a listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete a listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Show a single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// User Routes

// Show the register form for users
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Store a new user
Route::post('/users', [UserController::class, 'store']);

// Log a user out
Route::post('logout', [UserController::class, 'logout'])->middleware('auth');

// Show the login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log a user in
Route::post('users/authenticate', [UserController::class, 'authenticate']);
