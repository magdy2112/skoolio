<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_Teacher extends Model
{
    use HasFactory;
    protected $table = 'class_teachers';
    protected $fillable = [
        'class_id',
        'teacher_id',
    ];
    public function teacher() {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function class() {
        return $this->belongsTo(ClassName::class,'class_id');
    }
}
