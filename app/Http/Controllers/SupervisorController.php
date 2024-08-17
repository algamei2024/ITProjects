<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use App\Models\Program;
use Illuminate\Http\Request;

class SupervisorController extends Controller
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
        $programs = Program::all();
        return view("forms.supervisor",compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('image'))
        {
                $image = upload("supervisor",$request->image);
            Supervisor::create([
                'name'=>$request->name,
                'description'=>$request->description,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'image'=>$image,
                'program_id'=>$request->program,
            ]);
            $request->session()->flash('success','تمت العملية بنجاح');
            return redirect()->back();
        }
        $request->session()->flash('success','لم تختر صورة');
        return redirect()->back();  
    }

    /**
     * Display the specified resource.
     */
    public function show($supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($supervisor)
    {
        $super = Supervisor::with('program')->where('id',$supervisor)->first();
        return view('edit.super',['super'=>$super,'programs'=>Program::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$supervisor)
    {
        if($request->has('image'))
        {
            $super = Supervisor::where('image',$request->oldImage);
            $imcount = $super->count();
            $rimage = public_path('supervisor/'.$request->oldImage);
            if($imcount == 1 && file_exists($rimage))
            {
                {unlink($rimage);}
                
            }
            $name = upload("supervisor",$request->image);
                Supervisor::where('id',$supervisor)->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'image'=>$name,
                    'program_id'=>$request->program,
                ]);
                return "success";
        }
        else{
            Supervisor::where('id',$supervisor)->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'program_id'=>$request->program,
                ]);
            return "success";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($supervisor)
    {
        $superV = Supervisor::find($supervisor);
        $super = Supervisor::where('image',$superV->image);
        $imcount = $super->count();
        $rimage = public_path('supervisor/'.$request->oldImage);
        if($imcount == 1 && file_exists($rimage))
        {
            {unlink($rimage);}
            
        }
        $superV->delete();
        return "success";
    }
}
