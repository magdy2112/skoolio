<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email Address',
            'phone',
        ];
    }
}
