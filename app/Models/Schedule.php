<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id', 'teacher_id','subject_id', 'day',
    ];



    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function classname(){
        return $this->belongsTo(Classname::class, 'class_id');
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }



}





