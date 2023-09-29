<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function upazila()
    {
        return $this->belongsTo(Upazila::class);
    }

}
