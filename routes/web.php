<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FuncionariosController; //Necessario para usar o controller

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

use App\Http\Controllers\IfoodController;
Route::get('/estabelecimentos', [IfoodController::class, 'estabelecimentos']);

Route::get('/', [FuncionariosController::class, 'myfood']);

Route::get('/login', [FuncionariosController::class, 'login']);

Route::get('/validar', [FuncionariosController::class, 'validar']);

Route::get('/sobre', [FuncionariosController::class, 'sobre']);

Route::get('/restaurantes', [FuncionariosController::class, 'restaurantes']);

Route::resource('lojas',IfoodController::class);

//Route::get('/lojas/{id}', [IfoodController::class, 'show'])->nome('lojas.show');

// Route::get('/', function () {
//     return view('welcome', ['name' => '2DS3', 'idade' => '20']);
// });

// Route::get('/myfood', function () { 
//     return view('index');
// });

// Route::get('/login', function () { 
//     return view('login');
// });

// Route::get('/validar', function () { 
//     return view('login');
// });


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

// Route::get('/', function () {
//     return view('welcome', ['name' => '2DS3', 'idade' => '20']);
// });

// Route::get('/myfood', function () { 
//     return view('index');
// });

// Route::get('/login', function () { 
//     return view('login');
// });

// Route::get('/validar', function () { 
//     return view('login');
// });