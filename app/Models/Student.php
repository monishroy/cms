<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    
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
