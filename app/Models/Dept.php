<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    use HasFactory;
    protected $fillable=['name','description','objectives','outputs','email','phone','logo'];
    public function programs()
    {
        return $this->hasMany(Program::class,'dept_id');
    }
    public function deptnews()
    {
        return $this->hasMany(Deptnew::class,'dept_id');
    }
}
