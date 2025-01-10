<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('kegiatan.kegiatan', compact('todos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'activity' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
    
        Todo::create([
            'activity' => $validated['activity'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time'],
        ]);
    
        return redirect()->route('todo.index')->with('success', 'Aktivitas berhasil ditambahkan!');
    }
    

    public function update(Request $request, Todo $todo)
    {
        $todo->update([
            'is_completed' => $request->is_completed,
        ]);

        return redirect()->route('todo.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
