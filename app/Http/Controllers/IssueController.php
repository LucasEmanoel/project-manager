<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IssueController extends Controller
{
    public function index() {
        $issues = Issue::all();
        return view('issue.index', compact('issues'));

    }

    //view
    public function show($id) {
        $issue = Issue::find($id);
        $users = $issue->users;
        return view('issue.show', compact('issue', 'users'));

    }
    //view
    public function create($project_id) {
        $project = Project::findOrFail($project_id);

        return view('issue.create', compact('project'));

    }

    public function remove($id) {
        $issue = Issue::findOrFail($id);

        Issue::destroy($id);

        return redirect()->route('project.show', $issue->project_id);

    }

    //View
    public function edit($id) {
        $issue = Issue::find($id);
        //dd($Issue);
        return view('issue.edit', compact('issue'));
    }

    public function update(Request $request, $id) {
        $issue = Issue::findOrFail($id);

        $issue->title = $request['title'];
        $issue->description = $request['description'];
        $issue->status = $request['status'];

        $issue->save();
        return redirect()->route('project.show', $issue->project_id);

    }

    public function store(Request $request) {
        $project = Project::findOrFail($request['project_id']);

        $issue = Issue::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'priority' => $request['priority'],
            'project_id' => $project->id,

        ]);

        $user = Auth::user();
        $issue->users()->attach($user);

        return redirect()->route('project.show', $project->id);

    }
}
