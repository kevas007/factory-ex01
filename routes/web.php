<?php

use App\Http\Controllers\BatimentsController;
use Illuminate\Support\Facades\Route;

use function Symfony\Component\String\b;

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

Route::resource('batiment', BatimentsController::class);