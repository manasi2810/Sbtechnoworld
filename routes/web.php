<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\backend\indexcontroller;
use App\Http\Controllers\backend\usercreationcontroller;
use App\Http\Controllers\backend\rolecreationcontroller;
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
    return redirect()->route('login');
});
    Route::middleware(['auth:sanctum'])->group(function () { 
    Route::get('/dashboard',[indexcontroller::class, 'dashboard'])->name('dashboard'); 
    Route::resource('usercreation', usercreationcontroller::class);
    Route::resource('rolecreation', rolecreationcontroller::class);
  
}); 
require __DIR__.'/auth.php';