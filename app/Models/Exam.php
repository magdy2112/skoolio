<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'teacher_id',
        'exam_type',
        'exam_score',
        'total_score',
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

public function exam(){
    return $this->belongsTo(Teacher::class,'teacher_id');
}



}
