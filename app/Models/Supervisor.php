<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $fillable=['name','description','email','phone','image','program_id'];
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
