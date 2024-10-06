<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'teacher_id',
        'subject_id',
        'grade',
        'class_id',
        'date',
    ];


    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
