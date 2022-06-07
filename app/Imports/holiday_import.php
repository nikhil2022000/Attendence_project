<?php

namespace App\Imports;

use App\Models\holiday;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\DefaultValueBinder;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use DateTime;

class holiday_import  extends DefaultValueBinder implements ToModel,WithHeadingRow,WithCustomValueBinder,WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }

public function headingRow(): int
    {
        return 1;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        $first_in= \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date']);
        // $st = $first_in->toDateString();
        $st = $first_in->format('Y-m-d');
       // echo "<pre>";print_r($st);die;
        return new holiday([
           
            'Date' => $st,
            'holiday' => $row['holiday'], 
            
        ]);
    }
}
