<?php

use Illuminate\Support\Facades\Route;
use App\Models\Training;
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

Route::get('/test',function (){
   return '<h1 style="text-align: center">test is correct</h1>';
});

Route::get('/model',function (){
   return \App\Models\Training::inRandomOrder()->first();
});

Route::get('/models',function (){
    return \App\Models\Training::all();
});

//Route::get('/model/{model}',function ($id){
//   return \App\Models\Training::where('id',$id)->first();
//});


//after use Training model trait on top we can type only Training without model address:
Route::get('/model/{training}',function (Training $training){
   return $training;
});

Route::get('/myuser/{user}',function (User $user){
   return $user;
});

Route::get('/about',function (){
   return Training::whereFirstName('r1maro')->first();
});


Auth::routes(['register'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//
//
//Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('user.index');
//
//Route::get('/users/create',[\App\Http\Controllers\UserController::class,'create'])
//    ->name('user.create');
//
//Route::get('/users/edit/{user}',[\App\Http\Controllers\UserController::class,'edit'])
//    ->name('user.edit');
//
//Route::post('/users/store',[\App\Http\Controllers\UserController::class,'store'])
//    ->name('user.store');
//
//Route::post('/users/update/{user}',[\App\Http\Controllers\UserController::class,'update'])
//    ->name('user.update');
//
//Route::get('/users/delete/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])
//    ->name('user.delete');


Route::prefix('users')->name('user.')->group(
    function () {
        Route::get('/', [\App\Http\Controllers\UserController::class,'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\UserController::class,'create'])->name('create');
        Route::get('/edit/{user}', [\App\Http\Controllers\UserController::class,'edit'])->name('edit');
        Route::post('/store', [\App\Http\Controllers\UserController::class,'store'])->name('store');
        Route::post('/update/{user}', [\App\Http\Controllers\UserController::class,'update'])->name('update');
        Route::get('/delete/{user}', [\App\Http\Controllers\UserController::class,'destroy'])->name('delete');
    });


