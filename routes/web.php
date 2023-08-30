<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])
    ->prefix('admin')
    ->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/events', function () {
        return view('admin.event.index');
    })->name('admin.event.index');

    Route::get('/categories', function () {
        return view('admin.category.index');
    })->name('admin.category.index');

    Route::get('/reservations', function () {
        return view('admin.reservation.index');
    })->name('admin.reservation.index');

    Route::get('/users', function () {
        return view('admin.user.index');
    })->name('admin.user.index');


});

Route::get('event/{id}', function($id){
    return view('event.show', [
        'event' => $id
    ]);
})
//->where('id', '[0-9]+')
->name('event.show');

Route::get('reserve/{id}', function($id){
    return view('event.reservation', [
        'reserve' => $id
    ]);
})->name('event.reservation');

Route::get('/', function () {
    return view('home');
})->name('home');
