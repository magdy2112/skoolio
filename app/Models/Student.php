<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Student extends Model {
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'guardian_id',
        'level_id',
        'class_id',
        'phone',
        'age',
        'img',
        'gender',
    ];

    public function level() {
        return $this->belongsTo( level::class, 'level_id' );
    }

    public function classname() {
        return $this->belongsTo( classname::class, 'class_id' );
    }
    // public function teacher() {
    //     return $this->belongsToMany( Teacher::class, 'student__teacers', 'student_id', 'teacher_id' );

    //  }

    public function guardian() {
        return $this->belongsTo( Guardian::class, 'guardian_id' );
    }

    public function attend() {
        return $this->hasMany( Attendance::class, 'student_id' );
    }

    public function schedules() {
        // return $this->classname->schedules;
        return $this->hasManyThrough( Schedule::class, ClassName::class );
        // return $this->through( 'ClassName' )->has( 'Schedule' );

    }

    public function exams() {
        return $this->belongsToMany( Exam::class, 'exam_students' )
        ->withPivot( 'score' );

    }

    public function homework() {
        return $this->belongsToMany( Homework::class, 'homework_student' )->withTimestamps();
    }

    public function behav() {
        return $this->hasMany( behaviour::class );
    }

    public function toSearchableArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,

        ];
    }
}

