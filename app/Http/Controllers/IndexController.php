<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Task;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $file = Task::all();
        return view('main.index', compact("file"));
    }
}
