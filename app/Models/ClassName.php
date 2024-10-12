<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassName extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $table = 'class_names';

   public function level (){
     return $this->belongsTo(Level::class,'level_id');
   }

   public function student(){
     return $this->hasMany(Student::class,'class_id');
   }
   public function schedule(){
     return $this->hasMany(Schedule::class,'class_id');
   }

   public function homework(){
     return $this->hasMany(Homework::class,'class_id');
   }

   public function event(){
     return $this->hasMany(Event::class,'class_id');
   }
   public function attend(){
    return $this->hasManyThrough(Attendance::class,Student::class);
   }
   public function teacher(){
     return $this->belongsToMany(Teacher::class,'class_teachers','class_id','teacher_id');
   }
}
