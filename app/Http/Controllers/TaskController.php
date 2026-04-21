<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;


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

// انشاء TASK جديد
    public function store(TaskRequest $request)
    {
        $task = Task::create($request->validated());

        return response()->json([
            'status' => 'success 201',
            'data' => $task
        ], 201);

    }

// عرض TASK     باسم التاسك
    public function show(Task $task)
    {
        return response()->json([
            'status' => 'success 200',
            'data' => $task
        ]);
    }

// تحديث TASK
public function update(TaskRequest $request, Task $task)    {
        $task->update($request->validated());
        return response()->json([
            'status' => 'success 200',
            'data' => $task
        ]);
    }

// حذف TASK
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            'status' => 'success 204',
            'data' =>   null
        ]);
    }
}
