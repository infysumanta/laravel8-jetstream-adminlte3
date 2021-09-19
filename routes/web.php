<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
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

Route::get('/{adminslug}', function () {
    return redirect()->route('admin.dashboard');
})->where('adminslug','admin|dashboard');

Route::group(['middleware'=>['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
    });
});