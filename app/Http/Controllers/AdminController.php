<?php

namespace App\Http\Controllers;

use App\Models\Class_Teacher;
use App\Models\ClassName;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function test(){

         $teacher = Teacher::find(10);
         $classes = $teacher->classes;
         $classIds = $classes->pluck('id');
         $students = Student::whereIn('class_id',  $classIds)->where('class_id',3)->get();


        return  $students;

     }
}
