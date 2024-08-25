<?php

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IssueController;
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

Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/projects/cadastrar', [ProjectController::class, 'create'])->name('project.create');
Route::delete('/projects/remover/{id}', [ProjectController::class, 'remove'])->name('project.remove');
Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/projects/atualizar/{id}', [ProjectController::class, 'update'])->name('project.update');
Route::post('/projects/criar', [ProjectController::class, 'store'])->name('project.store');

Route::get('/issues', [IssueController::class, 'index'])->name('issue.index');
Route::get('/issue/{id}', [IssueController::class, 'show'])->name('issue.show');
Route::get('/issues/cadastrar/{project_id}', [IssueController::class, 'create'])->name('issue.create');
Route::delete('/issues/remover/{id}', [IssueController::class, 'remove'])->name('issue.remove');
Route::get('/issues/edit/{id}', [IssueController::class, 'edit'])->name('issue.edit');
Route::put('/issues/atualizar/{id}', [IssueController::class, 'update'])->name('issue.update');
Route::post('/issues/criar', [IssueController::class, 'store'])->name('issue.store');

require __DIR__.'/auth.php';
