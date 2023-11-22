<?php

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

// routes/web.php

Route::get('/{any}', function () {
    return view('index'); 
})->where('any', '.*'); 

// Si tienes rutas específicas en el backend, las puedes definir antes de esta



//Route::get('/portfolio', function () {
 //   return view('Home.vue');
//});



