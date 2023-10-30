<?php


use App\Http\Controllers\ProController;
// use App\Http\Controllers\TodoController;
// use App\Models\Link;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Str;

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

// Route::get('/',[ImageUploadController::class,'imageUploadForm'] );
// Route::post('/',[ImageUploadController::class,'imageUpload']);


Route::get('/',[Procontroller::class,'ind']);
Route::get('products/create',[Procontroller::class,'create']);
Route::post('products/store',[Procontroller::class,'store']);

Route::get('products/{id}/show',[ProController::class,'show']);
Route::get('products/{id}/edit',[ProController::class,'edit']);
Route::post('products/{id}/update',[Procontroller::class,'update']);
Route::get('products/{id}/delete',[ProController::class,'del']);
