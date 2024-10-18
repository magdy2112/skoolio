<?php

namespace App\Http\Controllers;
use App\Exports\ExcelExport;

use App\Exports\TeacherExport;
use Maatwebsite\Excel\Facades\Excel;


class TeacherController extends Controller
{
    public function export()
    {
        return Excel::download(new TeacherExport, 'users.xlsx');
    }
}
