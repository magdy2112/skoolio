<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'grade',
         'img',
        'phone'];

    public function level(){
     return $this->belongsTo(level::class,'level_id');
    }
    public function classname(){
        return $this->belongsTo(classname::class,'class_id');
    }
}
