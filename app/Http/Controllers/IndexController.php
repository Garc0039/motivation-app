<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Task;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $file = File::all()->first();
        // Task::createTasks();
        return view('index', $file);
    }
}
