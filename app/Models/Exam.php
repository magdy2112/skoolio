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
        'level_id'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

public function teacher(){
    return $this->belongsTo(Teacher::class,'teacher_id');
}

public function level(){
    return $this->belongsTo(Level::class, 'level_id');
}

// public function student(){
//     return $this->belongsTo(Student::class,'student_id');
// }
public function student()
{
    return $this->belongsToMany(Student::class, 'exam_students')
                ->withPivot('score');

}

public function getExamScores()
{
    return $this->exams->pluck('pivot.score', 'name'); // Or any other identifier for exams
}

}
