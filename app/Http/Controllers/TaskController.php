<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }

    public function store (Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255'
        ]);

        Task::create([
            'title' => $validated['title'],
            'status' => false
        ]);

        return redirect()->route('tasks.index');
    }


    public function setStatus(Task $task)
    {
        $task->status = !$task->status; // Toggle status
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function delete(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task->update([
            'title' => $validated['title'],
        ]);

        return redirect()->route('tasks.index');
    }

}