<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semister extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function students()
    {
        return $this->hasMany(Semister::class);
    }
    public function practical()
    {
        return $this->hasMany(Semister::class);
    }
}
