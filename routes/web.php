<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\FileController;

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
    return view('home');
});

Route::get('/dashboard', function () {
    $id = auth()->id();
    $dataset = User::find($id)->getFiles;
    return view('dashboard')->with('dataset', $dataset);
})->middleware(['auth'])->name('dashboard');

Route::post('dashboard', [FileController::class, 'store']);

Route::Resource('filedownload', 'App\Http\Controllers\FileController');

require __DIR__.'/auth.php';
