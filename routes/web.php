<?php

/*namespace App/Http/Controllers/Auth;*/

use App\Models\User;
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
//     return view('home');
// })->name('/');

// Route::get('/tree', function () {
//     $users = User::tree()->get();
//     return view('home');
// });

Route::view('/{path?}', 'home');
