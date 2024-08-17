<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
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
        return view('forms.year');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Year::create([
            'name'=>$request->name,
            'start'=>$request->start,
            'end'=>$request->end,
        ]);
         $request->session()->flash('success','تمت العملية بنجاح');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Year $year)
    {
        return view('edit.year',['year'=>Year::where('id',$year->id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Year $year)
    {
        Year::where('id',$year->id)->update([
            'name'=>$request->name,
            'start'=>$request->start,
            'end'=>$request->end,
        ]);
        return "success";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($year)
    {
        $year = Year::find($year);
        $year->delete();
        return "success";
    }
}
