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


//after use Training model on top we can type only Training without model address:
Route::get('/model/{training}',function (Training $training){
   return $training;
});

Route::get('/myuser/{user}',function (User $user){
   return $user;
});

Route::get('/about',function (){
   return Training::whereFirstName('r1maro')->first();
});
