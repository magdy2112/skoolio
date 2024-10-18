<?php

// database/seeders/DatabaseSeeder.php

// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Attendance;
use App\Models\behaviour;
use App\Models\Class_Teacher;
use App\Models\ClassName;
use App\Models\ClassTeacher;
use App\Models\Exam;
use App\Models\Event;
use App\Models\Exam_student;
use App\Models\ExamStudent;
use App\Models\Grade;
use App\Models\Guardian;
use App\Models\Homework;
use App\Models\Homework_Student;
use App\Models\HomeworkStudent;
use App\Models\Level;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\Student_Teacer;
use App\Models\StudentTeacher;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    User::factory()->count(3)->create();
    Level::factory()->count(12)->create();
    Subject::factory()->count(8)->create();
    ClassName::factory()->count(30)->create();
    Teacher::factory(80)->create();
    Guardian::factory(10)->create();
    Homework::factory(100)->create();
    Student::factory(300)->create();
    Schedule::factory(30)->create();
    Grade::factory(100)->create();
    Exam::factory(40)->create();
    Event::factory(20)->create();
    Attendance::factory(400)->create();
    Class_Teacher::factory(80)->create();
    // Student_Teacer::factory(80)->create();
    Homework_Student::factory(100)->create();
    Exam_student::factory(150)->create();
    behaviour::factory(60)->create();

}


}
