<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deptnew extends Model
{
    use HasFactory;
    protected $fillable=['title','description','image','dept_id'];
    public function dept()
    {
        return $this->belongsTo(Dept::class);
    }
}
