<?php

namespace App\Exports;

use App\Models\KritikSaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithDateColumns;

class KritikSaranExport implements FromCollection, WithHeadings, WithDateColumns
{
    public function collection()
    {
        // Get all the data from the kritik_sarans table
        return KritikSaran::all(['id', 'kritik', 'saran', 'created_at', 'updated_at']);
    }

    public function headings(): array
    {
        return [
            'ID', 'Kritik', 'Saran', 'Created At', 'Updated At',
        ];
    }

    public function dateFormat(): string
    {
        return 'YYYY-MM-DD HH:MM:SS'; // Optional: you can format the date columns if necessary
    }
}
