<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

  protected $fillable = [

    'student_id',
    'date',
    'status',

  ];

    public function classname()
    {
        return $this->hasManyThrough(ClassName::class, Student::class);
    }
}
