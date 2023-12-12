<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
public function index()
{
    $todos = Todo::all();

    return view('todo.index', compact('todos'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('todo.create');
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $todo = new Todo();
    $todo->title = $request->input('title');
    $todo->save();

    return redirect('todos')->with(
        'status',
        $todo->title . 'を登録しました!'
    );
}
    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $todo = Todo::find($id);

    return view('todo.show', compact('todo'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
    
        return view('todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
    
        $todo->title = $request->input('title');
        $todo->save();
    
        return redirect('todos')->with(
            'status',
            $todo->title . 'を更新しました!'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
