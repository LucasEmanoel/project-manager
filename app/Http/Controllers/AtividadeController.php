<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    public function index() {
        $atividades = Atividade::all();
        return view('atividade.index', compact('atividades'));

    }

    //view
    public function show($id) {
        $atividade = Atividade::find($id);

        return view('atividade.show', compact('atividade'));

    }
    //view
    public function create() {
        return view('atividade.create');

    }

    public function remove($id) {
        Atividade::destroy($id);

        return redirect()->route('atividade.index');

    }

    //View
    public function edit($id) {
        $atividade = Atividade::find($id);
        //dd($atividade);
        return view('atividade.edit', compact('atividade'));
    }

    public function update(Request $request, $id) {
        $atividade = Atividade::findOrFail($id);
        $atividade->name = $request['name'];
        $atividade->status = $request['status'];
        $atividade->data = $request['data'];

        $atividade->save();
        return redirect()->route('atividade.show', $atividade->id);

    }

    public function store(Request $request) {
        $user = Auth::user()->id;

        Atividade::create([
            'name' => $request['name'],
            'status' => $request['status'],
            'data' => $request['data'],
            'user_id' => $user

        ]);

        return redirect()->route('atividade.index');

    }
}
