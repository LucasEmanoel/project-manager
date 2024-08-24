<?php

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/atividades', [AtividadeController::class, 'index'])->name('atividade.index');
Route::get('/atividade/{id}', [AtividadeController::class, 'show'])->name('atividade.show');
Route::get('/atividades/cadastrar', [AtividadeController::class, 'create'])->name('atividade.create');
Route::get('/atividades/remover/{id}', [AtividadeController::class, 'remove'])->name('atividade.remove');
Route::get('/atividades/edit/{id}', [AtividadeController::class, 'edit'])->name('atividade.edit');
Route::put('/atividades/atualizar/{id}', [AtividadeController::class, 'update'])->name('atividade.update');
Route::post('/atividades/criar', [AtividadeController::class, 'store'])->name('atividade.store');

Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefa.index');
Route::get('/tarefa/{id}', [TarefaController::class, 'show'])->name('tarefa.show');
Route::get('/tarefas/cadastrar', [TarefaController::class, 'create'])->name('tarefa.create');
Route::get('/tarefas/remover/{id}', [TarefaController::class, 'remove'])->name('tarefa.remove');
Route::get('/tarefas/edit/{id}', [TarefaController::class, 'edit'])->name('tarefa.edit');
Route::put('/tarefas/atualizar/{id}', [TarefaController::class, 'update'])->name('tarefa.update');
Route::post('/tarefas/criar', [TarefaController::class, 'store'])->name('tarefa.store');

require __DIR__.'/auth.php';
