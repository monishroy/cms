<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    public function district()
    {
        return $this->hasMany(District::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
