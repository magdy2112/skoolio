<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home(){
        $student = Student::with('guardian')->get();
        // $student = Student::all();


        return StudentResource::collection($student);
    }
}
