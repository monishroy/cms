<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "students";
    protected $primaryKey = "id";
    function getDepartment(){
        return $this->hasOne('App\Models\Department','department_id');
    }
    function getSemister(){
        return $this->hasOne('App\Models\Semister','semister_id');
    }
}
