<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;

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

Auth::routes();


 
Route::get('/users', function () {
    return UserResource::collection(User::all());
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('product')->group(function () {
    Route::get('/','ProductssController@index');
    Route::get('create','ProductssController@create');
    Route::get('edit{id}','ProductssController@edit');
    Route::get('delete{id}','ProductssController@destroy');
    Route::post('edit{id}','ProductssController@update');
    Route::post('store','ProductssController@store');

});
