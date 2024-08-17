<?php

namespace App\Http\Controllers;
use App\Models\Dept;
use App\Models\Deptnew;
use App\Models\Program;
use App\Models\Year;
use App\Models\Project;

class userController extends Controller
{
    public function main()
    {
        $depts = Dept::all();
        $news = Deptnew::take(10)->get();
        $programs = Program::take(10)->get();
        return view('userView.main',['depts'=>$depts,'news'=>$news,'programs'=>$programs]);
    }

    public function news()
    {
        return "ll";
    }

    public function techAcademy()
    {

    }
    public function projects($id)
    {
        $depts = Dept::all();
        $years = Year::all();
        $latestYears = Year::latest()->first();
        $projects = $latestYears->projects;
            return view('userView.projects',compact('years','projects','id','depts'));
    }
}
