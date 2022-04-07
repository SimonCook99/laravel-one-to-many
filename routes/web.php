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

Auth::routes();

Route::middleware("auth") //controllo di autenticazione gestito direttamente qui
    ->namespace("Admin") //le rotte inserite faranno parte del amespace "Admin" (Ossia la cartella di HomeController)
    ->name("admin.") //Il nome delle rotte inserite, inizierà con "admin." (come in questo caso admin.home)
    ->prefix("admin") //gli URL delle rotte inserite, inizieranno col prefisso "admin" (come in questo caso admin/home)
    ->group(function(){

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource("posts", "PostController");
});


Route::get("{any?}", function(){
    return view("guests.home");
})->where("any", ".*");


