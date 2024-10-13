<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework_Student extends Model
{
    use HasFactory;
    protected $table = 'homework_students';

    // Define the attributes that are mass assignable
    protected $fillable = ['student_id', 'homework_id'];

    // If needed, define the relationship to the Student model
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // If needed, define the relationship to the Homework model
    public function homework()
    {
        return $this->belongsTo(Homework::class);
    }
}
