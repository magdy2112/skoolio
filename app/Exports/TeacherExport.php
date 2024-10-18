<?php

namespace App\Exports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class TeacherExport implements FromCollection, WithHeadings
{
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
