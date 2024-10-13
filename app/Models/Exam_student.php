<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_student extends Model
{
    use HasFactory;

    protected $table = 'exam_students';


    protected $fillable = ['student_id', 'exam_id', 'score'];


    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
