<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',function(){
    return view('student',[
        'layout' => 'index',
    ]);
});
Route::get('/edit/{id}',[StudentController::class, 'edit']);
Route::get('/show',[StudentController::class, 'index']);
Route::get('/create',[StudentController::class, 'create']);
Route::post('/store',[StudentController::class, 'store']);
Route::post('/update/{id}',[StudentController::class, 'update']);
Route::delete('/delete/{id}',[StudentController::class, 'destroy']);
