<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index',[
            'projects' => $projects,
        ]);
    }
    public function create()
    {
    return view('admin.projects.create');
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create([

           'name'           => $request->name,
           'details'        => $request->details,
           'description'    => $request->description,
           'start_at'       => $request->start_at,
           'end_at'         => $request->end_at,
           'user_id'        => auth()->id(),

        ]);

        toastr()->success('Your Projects Been Successfully Added');
        return redirect()->route('admin.projects.index');
    }
}
