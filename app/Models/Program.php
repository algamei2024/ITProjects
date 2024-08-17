<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable=['name','description','image','dept_id'];
    public function dept()
    {
        return $this->belongsTo(Dept::class);
    }
    public function supervisors()
    {
        return $this->hasMany(Supervisor::class,'program_id');
    }
    public function projects()
    {
        return $this->hasMany(Project::class,'program_id');
    }
}
