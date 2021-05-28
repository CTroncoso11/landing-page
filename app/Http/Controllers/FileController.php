<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Http\Controllers\Auth;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    function index(Request $request) {
        $path = $request->file('file')->store('docs');

        $file = new File();
        $file->name = 'Archivo 1';
        $file->file_name = 'nombre';
        $file->user_id = $request->user()->id;
        $file->file_path = $path;
        $file->save();

        return View('dashboard');
    }

    /**
     * Guarda un archivo en el almacenamiento y lo agrega al registro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $path = $request->file('file')->store('docs');

        $files = $request->file('file');
        $filename = $files->getClientOriginalName();

        // $path = $request->file('file')->move(public_path('docos'));
        // $path = $files->storeAs('public', $filename);
        $path = $request->file('file')->store('docs');

        $file = new File();
        $file->name = $request->filename;
        $file->file_name = $filename;
        $file->user_id = $request->user()->id;
        $file->file_path = $path;
        $file->save();

        return View('dashboard');
        //return Storage::download($path, $filename);
    }
}
