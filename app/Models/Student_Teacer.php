<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Teacer extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 'teacher_id',
    ];
    protected $table = "student__teacers";
    public function teacher() {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
