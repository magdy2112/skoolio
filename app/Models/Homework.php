<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'teacher_id','subject_id', 'description', 'due_date','level_id'];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function class(){
        return $this->belongsTo(ClassName::class, 'class_id');
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function level(){
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'homework_student')->withTimestamps();
    }


}
