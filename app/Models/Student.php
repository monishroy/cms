<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function semister()
    {
        return $this->belongsTo(Semister::class);
    }
}
