<?php

namespace App\Http\Controllers;

use App\Models\Deptnew;
use App\Models\Dept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeptnewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $depts = Dept::all();
        return view('forms.deptnews',compact('depts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('image'))
        {
                $name = upload("deptnews",$request->image);
                Deptnew::create([
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'image'=>$name,
                    'dept_id'=>$request->dept,
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
    public function show(Deptnew $deptnew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $new = Deptnew::where('id',$id)->first();
        return view('edit.news',['new'=>$new,'depts' => Dept::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$deptnew)
    {
        if($request->has('image'))
        {
            $new = Deptnew::where('image',$request->oldImage);
            $imcount = $new->count();
            $rimage = public_path('deptnews/'.$request->oldImage);
            if($imcount == 1 && file_exists($rimage))
            {
                {unlink($rimage);}
                
            }
            $name = upload("deptnews",$request->image);
                Deptnew::where('id',$deptnew)->update([
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'image'=>$name,
                    'dept_id'=>$request->dept,
                ]);
                return "success";
        }
        else{
            Deptnew::where('id',$deptnew)->update([
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'dept_id'=>$request->dept,
                ]);
            return "success";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($deptnew)
    {
        $deptnew = Deptnew::find($deptnew);
        if(!$deptnew)
            return abort('404');
        $new = Deptnew::where('image',$deptnew->image);
        $imcount = $new->count();
        $rimage = public_path('deptnews/'.$request->oldImage);
        if($imcount == 1 && file_exists($rimage))
        {
            {unlink($rimage);}
            
        }
        $deptnew->delete();
        return "success";
    }
}
