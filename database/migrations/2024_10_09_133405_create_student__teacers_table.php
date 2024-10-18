<?php

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('student__teacers', callback: function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId( 'student_id');
    //         $table->foreignId('teacher_id');
    //         $table->timestamp('created_at');
    //         $table->timestamp('updated_at')->nullable();
    //         $table->softDeletes()->nullable();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('student__teacers');
    // }
};


//homework and student  many to HasMany
// exam and student many to many







// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Student extends Model
// {
//     use HasFactory;

//     // Other properties and methods...

//     public function exams()
//     {
//         return $this->belongsToMany(Exam::class, 'exam_student')
//                     ->withPivot('score') // Optional: to access score if you store it in the pivot
//                     ->withTimestamps();
//     }
// }



// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Exam extends Model
// {
//     use HasFactory;

//     // Other properties and methods...

//     public function students()
//     {
//         return $this->belongsToMany(Student::class, 'exam_student')
//                     ->withPivot('score') // Optional: to access score if you store it in the pivot
//                     ->withTimestamps();
//     }
// }



// $exam = Exam::find(1);
// $student = Student::find(1);

// // Attach a student to an exam with an optional score
// $exam->students()->attach($student->id, ['score' => 85.5]);
