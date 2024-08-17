<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
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

        return view('forms.programNew', compact('depts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('image')) {
            $name = upload('programs', $request->image);
            Program::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $name,
                'dept_id' => $request->dept,
            ]);
            $request->session()->flash('success', 'تمت العملية بنجاح');

            return redirect()->back();
        }
        $request->session()->flash('success', 'لم تختر صورة');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($program)
    {
        $depts = Dept::all();
        $program = Program::where('id', $program)->first();

        return view('edit.program', ['program' => $program, 'depts' => $depts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $program)
    {
        if ($request->has('image')) {
            $prog = Program::where('image', $request->oldImage);
            $imcount = $prog->count();
            $rimage = public_path('programs/'.$request->oldImage);
            if ($imcount == 1 && file_exists($rimage)) {
                unlink($rimage);

            }
            $name = upload('programs', $request->image);
            Program::where('id', $program)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $name,
                'dept_id' => $request->dept,
            ]);

            return 'success';
        } else {
            Program::where('id', $program)->update([
                'name' => $request->name,
                'description' => $request->description,
                'dept_id' => $request->dept,
            ]);

            return redirect()->to('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($program)
    {
        $new = Program::find($program);
        if (! $new) {
            return abort('404');
        }
        $prog = Program::where('image', $new->image);
        $imcount = $prog->count();
        $rimage = public_path('programs/'.$request->oldImage);
        if ($imcount == 1 && file_exists($rimage)) {
            unlink($rimage);

        }
        $new->delete();

        return 'success';

    }
}
