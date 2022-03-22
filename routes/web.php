<?php

use App\Http\Controllers\userConroller;
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

Route::get('/', function () {
    return view('login');
});

Route::get('create',[userConroller::class,'create']);
Route::post('signin',[userConroller::class,'signin']);
Route::post('signup',[userConroller::class,'signup']);
Route::get('signout',[userConroller::class,'signout']);
Route::get('edit/{id}',[userConroller::class,'edit']);
Route::post('update',[userConroller::class,'update']);
Route::get('delete/{id}',[userConroller::class,'delete'])->middleware('logCheck');
Route::get('list',[userConroller::class,'list'])->middleware('logCheck');




// Route::group(['middleware'=>['logCheck']],function(){
    
   
    
// });





