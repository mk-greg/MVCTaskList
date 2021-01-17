<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Http\Resources\TaskResourceCollection;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * @
     */
    public function show(Task $task): TaskResource
    {
        return new TaskResource($task);
    }

    public function index(): TaskResourceCollection
    {
        return new TaskResourceCollection(Task::paginate());
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_name'  => 'required',
            'task_desc'  => 'required',
        ]);
        
        $task_o = Task::create($request->all());
    
        return new TaskResource($task_o);
    }

    public function update(Task $task, Request $request): TaskResource
    {
        $task->update($request->all());

        return new TaskResource($task);
    }

    public function destroy(Task $task)
    {
        $task-> delete();

        return response()->json();
    }



    
}
