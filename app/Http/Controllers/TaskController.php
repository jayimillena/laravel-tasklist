<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['tasks' => Task::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $task_saved = Task::create($request->validated());

        return view('index', ['tasks' => Task::latest()->paginate(10)])
            ->with('success', 'Task created succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show', ['task' => Task::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Task $task, TaskRequest $request)
    {
        $task->update($request->validated());

        return view('index', ['tasks' => Task::latest()->paginate(10)])
            ->with('success', 'Task updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return view('index', ['tasks' => Task::all()])
            ->with('success', 'Task deleted succesfully!');
    }

    public function toggleComplete(Task $task)
    {
        $task->toggleComplete();

        return redirect()->back()
            ->with('success', 'Task updated succesfully!');
    }
}
