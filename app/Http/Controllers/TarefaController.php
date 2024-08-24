<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index() {
        $tarefas = Tarefa::all();
        return view('tarefa.index', compact('tarefas'));

    }

    public function show() {
        return view('tarefa.show');
        
    }

    public function create() {
        return view('tarefa.create');
        
    }

    public function remove() {
        return view('tarefa.remove');
        
    }

    public function edit() {
        return view('tarefa.edit');
        
    }

    public function update() {
        return view('tarefa.update');
        
    }

    public function store() {
        return view('tarefa.store');
        
    }
}
