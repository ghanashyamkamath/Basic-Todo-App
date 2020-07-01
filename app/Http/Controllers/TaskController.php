<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $data =Task::all();
        return view('tasks.index',compact('data'));
    } 
}
