<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practical extends Model
{
    use HasFactory;
    protected $guarded = [];

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

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
