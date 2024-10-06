<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function teacher(){
      return $this->hasMany(Teacher::class,'subject_id');
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class,'subject_id');
    }
    public function grades()
    {
        return $this->hasMany(Grade::class,'subject_id');
    }
    public function exam (){
        return $this->hasMany(Exam::class,'subject_id');
    }
    public function homework (){
        return $this->hasMany(Homework::class,'subject_id');
    }
}
