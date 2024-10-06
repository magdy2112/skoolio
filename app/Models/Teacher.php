<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password','img','subject_id','phone'];

        public function subject(){
            return $this->belongsTo(Subject::class,'subject_id');
        }



        public function schedules()
        {
            return $this->hasMany(Schedule::class,'teacher_id');
        }

        public function classes()
        {
            return $this->belongsToMany(ClassName::class, 'class_teachers','teacher_id','class_id');
        }

        // public function students()
        // {
        //     return $this->belongsToMany(Student::class, 'schedules');
        // }

        // public function grades()
        // {
        //     return $this->hasManyThrough(Grade::class, Schedule::class);
        // }

        // public function attendances()
        // {
        //     return $this->hasManyThrough(Attendance::class, Schedule::class);
        // }

        public function homeworks()
        {
            return $this->hasMany(Homework::class,'teacher_id');
        }

        public function exams()
        {
            return $this->hasMany(Exam::class,'teacher_id');
        }

        // public function events()
        // {
        //     return $this->hasMany(Event::class);
        // }

}
