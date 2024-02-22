<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController; 
use Illuminate\Support\Facades\Route;

//PRAKTIKUM 1
Route::get('/hello', [WelcomeController::class,'hello']);  

Route::get('/world', function () {    
return 'World'; }); 

//Route::get('/', function () {    
//return 'Selamat Datang'; });

//Route::get('/about', function () {    
//return '2241720223
  //      Sukma Bagus Wahasdwika'; });

//PRAKTIKUM 2
Route::get(	'/user/{name}   ', function 
($name) { return 'Nama Saya '.$name; 
}); 

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

//Route::get('/articles/{id}', function 
//($articlesId) { 
  //  return 'Halaman Artikel dengan ID '.$articlesId; 
//});
Route::get('/ArticleController/{id}', [PageController::class,'ArticleController']);


//PRAKTIKUM 3
Route::get(	' /user/{name?} ', function ($name='John') { 
    return 'Nama saya ' .$name;
});

//PRAKTIKUM 4
Route::get('/HomeController', [PageController::class,'HomeController']);
Route::get('/AboutController', [PageController::class,'AboutController']);
Route::get('/ArticleController/{id}', [PageController::class,'ArticleController']);

//PRAKTIKUM 5
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 
 
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' ]); 

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
