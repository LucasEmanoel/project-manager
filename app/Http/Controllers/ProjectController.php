<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('project.index', compact('projects'));

    }

    //view
    public function show($id) {
        $project = Project::find($id);
        $issues = $project->issues;
        return view('project.show', compact('project', 'issues'));

    }
    //view
    public function create() {
        return view('project.create');

    }

    public function remove($id) {
        Project::destroy($id);

        return redirect()->route('project.index');

    }

    //View
    public function edit($id) {
        $project = Project::find($id);
        //dd($project);
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, $id) {
        $project = Project::findOrFail($id);
        $project->title = $request['title'];
        $project->description = $request['description'];
        $project->status = $request['status'];

        $project->save();
        return redirect()->route('project.show', $project->id);

    }

    public function store(Request $request) {
        $user = Auth::user()->id;

        project::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'user_id' => $user

        ]);

        return redirect()->route('project.index');

    }
}
