<?php

use App\Http\Controllers\pagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[pagesController::class,'index']);
Route::get('/about',[pagesController::class,'about']);
Route::get('/resume',[pagesController::class,'resume']);
Route::get('/project',[pagesController::class,'projects']);
Route::get('/contact',[pagesController::class,'contact']);
// post for contact me
Route::post('/contactme',[pagesController::class,'contactme']);
Route::get('/myprojects',[projectsController::class,'myprojects']);
