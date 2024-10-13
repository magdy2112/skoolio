<?php

// database/seeders/DatabaseSeeder.php

// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Attendance;
use App\Models\Class_Teacher;
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
        // Levels
        $levels = [
            ['name' => 'Level 1', 'description' => 'Level 1 description'],
            ['name' => 'Level 2', 'description' => 'Level 2 description'],
            ['name' => 'Level 3', 'description' => 'Level 3 description'],
        ];
        foreach ($levels as $level) {
            Level::create($level);
        }



        // Subjects
        $subjects = [
            ['name' => 'Math'],
            ['name' => 'Science'],
            ['name' => 'English'],
        ];
        foreach ($subjects as $subject) {
            Subject::create($subject);
        }



        // Admins
        $users = [
            ['name' => 'user 1', 'email' => 'user1@example.com', 'password' => Hash::make('password'),'phone'=>'01554447882'],
            ['name' => 'user 2', 'email' => 'user2@example.com', 'password' => Hash::make('password'),'phone'=>'01554447883'],
        ];
        foreach ($users as $user) {
            User::create( $user);
        }




        // Teachers
        $teachers = [
            ['name' => 'Teacher 1', 'email' => 'teacher1@example.com', 'password' => Hash::make('password'), 'subject_id' => 1,'phone'=>'01554447884'],
            ['name' => 'Teacher 2', 'email' => 'teacher2@example.com', 'password' => Hash::make('password'), 'subject_id' => 2,'phone'=>'01554447885'],
        ];
        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }



        // Guardians
        $guardians = [
            ['name' => 'Guardian 1', 'email' => 'guardian1@example.com', 'password' => Hash::make('password'),'phone'=>'01554447886'],
            ['name' => 'Guardian 2', 'email' => 'guardian2@example.com', 'password' => Hash::make('password'),'phone'=>'01554447887'],
        ];
        foreach ($guardians as $guardian) {
            Guardian::create($guardian);
        }



        $classNames = [
            ['name' => 'Class 1', 'level_id' => 1],
            ['name' => 'Class 2', 'level_id' => 2],];
            foreach ($classNames as $className) {
                \App\Models\ClassName::create($className);
            }



        // Students
        $students = [
            ['name' => 'Student 1', 'email' => 'student1@example.com', 'password' => Hash::make('password'), 'guardian_id' => 1, 'level_id' => 1,'phone'=>'01554447888','class_id'=>1,'gender'=>'male'],
            ['name' => 'Student 2', 'email' => 'student2@example.com', 'password' => Hash::make('password'), 'guardian_id' => 2, 'level_id' => 2,'phone'=>'01554447889','class_id'=>2,'gender'=>'female',]
        ];
        foreach ($students as $student) {
            Student::create($student);
        }


        // Class Names



        // Homework
        $homeworks = [
            ['description' => 'Homework 1', 'due_date' => '2024-03-01', 'class_id' => 1, 'teacher_id' => 1, 'subject_id' => 1, 'level_id' => 1],
            ['description' => 'Homework 2', 'due_date' => '2024-03-02', 'class_id' => 2, 'teacher_id' => 2, 'subject_id' => 2, 'level_id' => 2],
        ];
        foreach ($homeworks as $homework) {
            Homework::create($homework);
        }


        $schedules = [
            ['class_id' => 1, 'teacher_id' => 1, 'subject_id' => 1, 'day' => 'Monday'],
            ['class_id' => 2, 'teacher_id' => 2, 'subject_id' => 2, 'day' => 'Tuesday'],
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }

        $grades = [
            ['teacher_id' => 1, 'subject_id' => 1, 'student_id' => 1],
            ['teacher_id' => 2, 'subject_id' => 2, 'student_id' => 2, 'grade' => 90.25],
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }

        $exams = [
            ['subject_id' => 1, 'teacher_id' => 1, 'level_id' => 1, 'exam_type' => 'midterm'],
            ['subject_id' => 2, 'teacher_id' => 2, 'level_id' => 2, 'exam_type' => 'final'],
        ];

        foreach ($exams as $exam) {
            Exam::create($exam);
        }

        $events = [
            ['title' => 'Event 1', 'description' => 'This is event 1', 'date' => '2022-01-01',  'user_id' => 1, 'level_id' => 1, 'class_id' => 1],
            ['title' => 'Event 2', 'description' => 'This is event 2', 'date' => '2022-01-15',  'user_id' => 2, 'level_id' => 2, 'class_id' => 2],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }

        $attendances = [
            ['student_id' => 1, 'date' => '2022-01-01', 'status' => 'Present'],
            ['student_id' => 2, 'date' => '2022-01-15', 'status' => 'Absent'],
        ];

        foreach ($attendances as $attendance) {
            Attendance::create($attendance);
        }


        $classTeachers = [
            ['class_id' => 1, 'teacher_id' => 1],
            ['class_id' => 2, 'teacher_id' => 2],
        ];

        foreach ($classTeachers as $classTeacher) {
            Class_Teacher::create($classTeacher);
        }
        $studentTeachers = [
            ['student_id' => 1, 'teacher_id' => 1],
            ['student_id' => 2, 'teacher_id' => 2],
        ];

        foreach ($studentTeachers as $studentTeacher) {
            Student_Teacer::create($studentTeacher);
        }

        $homeworkStudents = [
            ['student_id' => 1, 'homework_id' => 1],
            ['student_id' => 2, 'homework_id' => 2],
        ];

        foreach ($homeworkStudents as $homeworkStudent) {
            Homework_Student::create($homeworkStudent);
        }

        $examStudents = [
            ['student_id' => 1, 'exam_id' => 1, 'score' => 85.50],
            ['student_id' => 2, 'exam_id' => 2, 'score' => 90.25],
        ];

        foreach ($examStudents as $examStudent) {
            Exam_student::create($examStudent);
        }

    }


}

        // Homework Students
