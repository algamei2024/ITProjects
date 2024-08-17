<?php

use Illuminate\Support\Facades\Route;
use app\controllers\userController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('user/main',"userController@main");
Route::controller('userController')->group(function(){
    Route::get('user/main','main');
    Route::get('user/news','news');
    Route::get('user/project/{id}','projects');
});

Route::get('/','MainController');
Route::get('dashboard',function(){
    return view('dashboard.contact');
})->name('dashboard.contact');
Route::Resource('dept','DeptController');
Route::get('dept','DeptController@create')->name('dept.create');
Route::Post('dept','DeptController@store')->name('dept.store');
Route::get('dept/{id}','DeptController@show')->name('dept.show');
Route::Resource('program','ProgramController');
Route::get('program','ProgramController@create')->name('program.create');
Route::Post('program','ProgramController@store')->name('program.store');
Route::Resource('super','SupervisorController');
Route::get('super','SupervisorController@create')->name('super.create');
Route::Post('super','SupervisorController@store')->name('super.store');
Route::get('year','YearController@create')->name('year.create');
Route::Post('year','YearController@store')->name('year.store');
Route::Resource('year','YearController');
Route::Resource('news','DeptnewController');
Route::Resource('padd','projectController');

Route::get('tables/{name}','Tables')->name('tables');

use App\Models\Program;
use App\Models\Deptnew;
use App\Models\Dept;
Route::get('user',function(){
    $programs = Program::take(10)->get();
    $news = Deptnew::take(10)->get();
    $depts = Dept::take(10)->get();
   return view('userView/main',['news'=>$news,'programs'=>$programs,'depts'=>$depts]);
});