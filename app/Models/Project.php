<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['name','abstract','team','evaluation','pdf','image','confirmed','program_id','year_id'];
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    public function supervisors()
    {
        return $this->belongsToMany(Supervisor::class);
    }
}
