<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use App\Models\Deptnew;
use Illuminate\Http\Request;

class DeptController extends Controller
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
        return view("forms.deptNew");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('logo'))
        {
            $name = upload("depts",$request->logo);
                Dept::create([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'objectives'=>$request->objectives,
                    'outputs'=>$request->outputs,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'logo'=>$name,
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
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dept)
    {
        $dept = Dept::where('id',$dept)->first();
        return view('edit.dept',compact('dept'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$dept)
    {
        if($request->has('logo'))
        {
            $new = Dept::where('logo',$request->oldImage);
            $imcount = $new->count();
            $rimage = public_path('depts/'.$request->oldImage);
            if($imcount == 1 && file_exists($rimage))
            {
                {unlink($rimage);}
                
            }
            $name = upload("depts",$request->logo);
                Dept::where('id',$dept)->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'objectives'=>$request->objectives,
                    'outputs'=>$request->outputs,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'logo'=>$name
                ]);
                return "success";
        }
        else{
            Dept::where('id',$dept)->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'objectives'=>$request->objectives,
                    'outputs'=>$request->outputs,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                ]);
            return "success";
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dept)
    {
        $dept = Dept::find($dept);
        if(!$dept)
            return abort('404');
        $new = Dept::where('logo',$dept->logo);
        $imcount = $new->count();
        $rimage = public_path('depts/'.$request->oldImage);
        if($imcount == 1 && file_exists($rimage))
        {
            {unlink($rimage);}
            
        }
        $dept->delete();
        return "success";
    }
}
