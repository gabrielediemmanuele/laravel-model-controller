<?php
/* mi collego al controller  */
use App\Http\Controllers\PageController;
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

/* route for homepage - connect to Controller folder */
Route::get('/', [PageController::class, 'index'])->name('homepage');
/* route for movies-list page */
Route::get('/movies-list', [PageController::class, 'list'])->name('movies-list');