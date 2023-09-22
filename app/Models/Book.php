<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function semister()
    {
        return $this->belongsTo(Semister::class);
    }

    public function issue_book()
    {
        return $this->hasOne(IssueBook::class);
    }

}
