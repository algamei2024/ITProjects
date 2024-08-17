<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $fillable=['name','start','end'];
    public function projects()
    {
        return $this->hasMany(Project::class,'year_id');
    }
}
