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

    
}
