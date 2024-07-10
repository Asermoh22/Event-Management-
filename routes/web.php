<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Eventcontroller;
use App\Models\Event;

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
});

Route::get('/events',[Eventcontroller::class,'index'])->name('events.index');

Route::get('/events/show/{id}',[Eventcontroller::class,'show'])->name('events.show');

//create

Route::get('/events/create',[Eventcontroller::class,'create'])->name('events.create');
Route::post('/events/store',[Eventcontroller::class,'store'])->name('events.store');

//update

Route::get('/events/edit/{id}',[Eventcontroller::class,'edit'])->name('events.edit');

Route::put('/events/update/{id}',[Eventcontroller::class,'update'])->name('events.update');

Route::get('/events/delete/{id}',[Eventcontroller::class,'delete'])->name('events.delete');