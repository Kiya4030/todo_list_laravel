<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Console\AboutCommand;
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
// show a page
Route::get('/',[HomeController::class,'index']);

// for saving data
Route::post('/save',[HomeController::class,'save']);

// for edit
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');

// for update

Route::put('/update/{id}', [HomeController::class,'update'])->name('update');



// for delting

Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');

// Route::get('/about' ,[AboutController::class,'about']);
// Route::get('/contact',[ContactController::class,'contact']);

// // for saving date with form
// Route::post('/save' , function(){

// });
// // for updating with form
// Route::put('/update',function(){

// });

// //for deleting with form
// Route::delete('/delete', function(){

// });


