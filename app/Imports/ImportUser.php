<?php

namespace App\Imports;

use App\Models\master_Emp;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\DefaultValueBinder;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use DateTime;

class ImportUser extends DefaultValueBinder implements ToModel,WithHeadingRow,WithCustomValueBinder,WithStartRow
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
        return new master_Emp([
            'sno' => $row['sno'],
            'Branch' => $row['branch'],
            'Empid' => $row['empid'], 
            'Name' => $row['name'], 
            'Shift' => $row['shift'], 
            'status' => 0 , 
        ]); 
    }
}
