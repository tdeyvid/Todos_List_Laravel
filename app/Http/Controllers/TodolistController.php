<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodolistController
{

    public function bem_vindo()
    {
        return view('todo.bem_vindo');
    }
    public function index()
    {

        $search = request('search');
        $seletor = request('seletor');

        $todos = Todos::all();
        $count = Todos::count();

        if ($seletor && $search) {

            $todos = Todos::where([[$seletor, 'like', '%' . $search . '%']])->get();
            $count = Todos::where([[$seletor, 'like', '%' . $search . '%']])->count();
        }

        return view('todo.index', ["todos" => $todos,  "count" => $count,  "search" => $search]);
    }


    public function show(Todos $todo)
    {
        return view('todo.show')->with('todo', $todo);
    }

    public function create()
    {
        $todos = Todos::all();
        //dd($todos);
        return view('todo.create')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        // Somente o campo title
        Todos::create($request->only(['title']));
        return redirect('todo')->with('success', 'Tarefa cadastrada com sucesso!');
    }

    public function edit(Todos $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, Todos $todo)
    {
        $todo->fill($request->all())->save();
        return redirect()->route('todo.index')->with('success', 'Tarefa editada com sucesso!');
    }

    public function destroy(Todos $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'Tarefa apagada com sucesso!');
    }
}
