<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dept;
use App\Models\Deptnew;
use App\Models\Supervisor;
use App\Models\Program;
class MainController extends Controller
{
    public function __invoke()
    {
        $news = Deptnew::with('dept')->take(10)->get();
        $depts = Dept::all();
        $programs = Program::with('dept')->get();
        $supers = Supervisor::with('program')->take(10)->get();
        return view('dashboard.main',['news'=>$news,'depts'=>$depts,'programs'=>$programs,'supers'=>$supers]);
    }
}