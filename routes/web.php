<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\FileController;
use App\Models\File;


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

    if  ((User::find($id)->role) != 'user')   {
        $data = array();
        $first = array();
        $second = array();
        $users = User::all();
        foreach($users as $tmp){
        //     $files = User::find($tmp->id)->getFiles;
            array_push($first, User::find($tmp->id));
        //     array_push($user, $files);
        //     //  Agregamos el arreglo temporal al final
        }
        array_push($data, $first);
        array_push($second, File::all());
        array_push($data, $second[0]);
        // echo json_encode($data[0][0]);
        // echo json_encode($data[1][0]);
        // echo json_encode($data[1][1]);
        // foreach($data as $tmp){
        //     //print($tmp);
        //     echo json_encode($tmp);
        // }

        // $users_data = array();
        // foreach($users as $user){
        //     $files = User::find($user->id)->getFiles;
        //     $tmp = array($user, "files"=>$files);
        //     array_push($users_data, $tmp);
        // };
        // Log::info($users);
        // array_push($data, $users);
        // array_push($data, $files);


        return view('dashboard')->with('dataset', $data);
    };
    //  Si es usuario normal, no hay problema alguno
    $dataset = User::find($id)->getFiles;
    return view('dashboard')->with('dataset', $dataset);
})->middleware(['auth'])->name('dashboard');

Route::post('dashboard', [FileController::class, 'store']);

Route::Resource('filedownload', 'App\Http\Controllers\FileController');
Route::Resource('file', 'App\Http\Controllers\FileController');

require __DIR__.'/auth.php';
