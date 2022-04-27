<?php

namespace App\Imports;

use App\Models\Attendence;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\DefaultValueBinder;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use DateTime;

class UsersImport extends DefaultValueBinder implements ToModel,WithHeadingRow,WithCustomValueBinder,WithStartRow
{
    public function startRow(): int
    {
        return 5;
    }

public function headingRow(): int
    {
        return 4;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    { 
        $first_in= \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date']);
        // $st = $first_in->toDateString();
        $st = $first_in->format('Y-m-d');
        //echo "<pre>";print_r( echo$st);die;
  
         $first= \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['first_in']);
         $last_out= \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['last_out']);
         //
        $time= $first->format('h:i:s A');
        //$time_in_24_hour_format  = date();
        $last=  $last_out->format('h:i:s A');

         //echo "<pre>";print_r($time);die;
         if($row['user_id']==null){
  
         }else{
        return new Attendence([
            'user_id' => $row['user_id'],
            'name' => $row['name'], 
            'date'=> $st,
           'first_in' => $time,
          'last_out' => $last,   
          'in_device'=> $row['in_device'],   
          'out_device' => $row['out_device'],   
          'total_hours100'  => $row['total_hours100'],   
            
        ]);
    }
}
}