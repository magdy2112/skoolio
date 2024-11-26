<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
    public function home() {
        $student = Student::with( 'guardian' )->lazy();
        // $students  = Student::search( 'elbahy' )->get();
        $students  = Student::search( 'kacie09@example.com' )->get();
        $students->load( 'guardian' );

        return StudentResource::collection( $students );
    }

    //     public function search1() {
    //         $student  = Student::search( 'a' )->get();
    //     }
}

