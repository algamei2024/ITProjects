<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Dept;
use App\Models\Supervisor;
use App\Models\Deptnew;
use App\Models\Year;

class Tables extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(String $table)
    {
        if($table == "program")
        {
            $programs = Program::all();
            return view('tables.table',['programs'=>$programs,'depts'=>null]);
        }
        elseif($table == "dept")
        {
           $depts = Dept::all();
           return view('tables.table',['depts'=>$depts,'programs'=> null]);
        }
        elseif($table == "super")
        {
            $supers = Supervisor::with('program')->get();
            return view('tables.table',['supers'=>$supers,]);
        }
        elseif($table == "news")
        {
            return view('tables.table',['news'=>Deptnew::with('dept')->get()]);
        }
        elseif($table == "years")
        {
            return view('tables.table',['years'=>Year::all()]);
        }

    }
}
