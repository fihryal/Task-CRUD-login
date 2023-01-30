<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::get ('/tasks',[TaskController::class,'index']);
Route::get('/tasks/create',[TaskController::class,'create']);
Route::get ('/tasks/{id}',[TaskController::class,'show']);
Route::post ('/tasks',[TaskController::class,'store']);
Route::get('/tasks/{id}/edit',[TaskController::class, 'edit']);
Route::patch ('/tasks/{id}',[TaskController::class,'update']);
Route::delete ('/tasks/{id}',[TaskController::class,'delete']);

// Route::post('/tasks/{key}', function($key) use ($taskList){
//     // return request() -> all();
//     $taskList[request () -> key] = request()-> task;
//     return $taskList;
// });

// Route::patch('/tasks/{key}',function($key) use ($taskList){
//     $taskList[$key] = request()-> task;
//     return $taskList;
// });

// Route::delete('/tasks/{key}', function($key) use ($taskList){
//     unset($taskList[$key]);
//     return $taskList;
// });