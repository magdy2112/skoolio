<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class behaviour extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'student_id', 'message'];

    public function parent()
    {
        return $this->belongsTo(Student::class);
    }
}
