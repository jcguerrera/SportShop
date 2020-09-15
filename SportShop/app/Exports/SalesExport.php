<?php

namespace App\Exports;

use App\Sale;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SalesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Date',
            'Total_To_Pay',
            'User',
            'Created_At',
            'Updated_At'
        ];
    }
    public function collection()
    {
         $sales = Sale::all();
         return $sales;
        
    }
}