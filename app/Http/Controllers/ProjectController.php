<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use App\Models\Program;
use App\Models\Project;
use App\Models\Supervisor;
use App\Models\Year;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $depts = Dept::all();
        $years = Year::all();
        $programs = Program::all();
        $supers = Supervisor::all();

        return view('forms.project', compact('depts', 'years', 'programs', 'supers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'pdf' => 'file|mimes:pdf,doc,docx|max:204800', //200*1024=>200mg
            //'evaluation'=>'required',
            'program_id' => 'required',
            'year_id' => 'required',
        ]);
        if ($request->confirmed == null) {
            $confirmed = 0;
        } else {
            $confirmed = 1;
        }
        $image = upload('project', $request->image);
        $pdf = upload('project', $request->pdf);
        $project = Project::create([
            'name' => $request->name,
            'abstract' => $request->abstract,
            'evaluation' => $request->evaluation,
            'team' => $request->team,
            'image' => $image,
            'pdf' => $pdf,
            'confirmed' => $confirmed,
            'program_id' => $request->program_id,
            'year_id' => $request->year_id,
        ]);
        $project->supervisors()->attach($request->supervisor_id);
        $request->session()->flash('success', 'تمت العملية بنجاح');

        return redirect()->back()->header('Refresh', '0');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $depts = Dept::all();
        $years = Year::all();
        $programs = Program::all();
        $supers = Supervisor::all();
        $project = Project::with('supervisor','dept');
        foreach($project as $p){
            return  "dld";
        }
        return view('edit.project', compact('depts', 'years', 'programs', 'supers','project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        if ($request->confirmed == null) {
            $confirmed = 0;
        } else {
            $confirmed = 1;
        }
        $project->update([
            'name' => $request->name,
            'abstract' => $request->abstract,
            'evaluation' => $request->evaluation,
            'team' => $request->team,
            'image' => $image,
            'pdf' => $pdf,
            'confirmed' => $confirmed,
            'program_id' => $request->program_id,
            'year_id' => $request->year_id,
        ]);
        $project->supervisors()->detach();
        $project->supervisors()->attach($request->supervisor_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
