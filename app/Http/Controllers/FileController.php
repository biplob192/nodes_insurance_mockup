<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = 10;
        return view('file.index', ['files' => $files]);
    }

    public function create()
    {
        $files = 10;
        return view('file.create', ['files' => $files]);
    }
}
