<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\IklanController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('welcome', [HomeController::class, 'index']);
//Admin Route
route::group(['prefix'=> 'admin','middleware'=>['auth']] , function () {
    route::get('/', function(){
        return view('admin.index');
    });
        // CRUD
        Route::resource('kategori',KategoriController::class);
        Route::resource('berita',BeritaController::class);
        Route::resource('iklan',IklanController::class);
    });

        route::group(['prefix'=> 'user','middleware'=>['auth']] , function () {
            route::get('/', function(){
                return view('user.index');
            });
            Route::resource('berita',BeritaController::class);
            
            });
            

