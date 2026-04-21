<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   // عرض كل ال TASKS
    public function index()
    {

        $tasks = Task::latest()->get();

        return response()->json([
            'status' => 'success 200',
            'data' => $tasks
        ]);}


    public function store(Request $request)
    {
        //
    }


    public function show(Task $task)
    {
        //
    }


    public function update(Request $request, Task $task)
    {
        //
    }


    public function destroy(Task $task)
    {
        //
    }
}
