<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $file = File::all()->first();
        return view('index', $file);
    }
}
