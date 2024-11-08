<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home/{id}',function ($id){
    return 'Hello '.$id;
});
Route::get('/users', [UserController::class, 'index']);

Route::get('/create', [UserController::class, 'home']);

Route::get('/',[UserController::class, 'get']);


Route::get('/update/{id}',[UserController::class, 'edit']);

Route::put('/update/{id}',[UserController::class, 'update']);

Route::delete('/delete/{id}',[UserController::class, 'delete']);

Route::get('/add',[UserController::class, 'store']);