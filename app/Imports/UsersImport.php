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

         //echo "<pre>";print_r($last);die;
                                    $start= date("H:i:s", strtotime($time));
									$end = date("H:i:s", strtotime($last));
									//$new_time = "09:00 am";
         //echo "<pre>";print_r($start);die;

									$start_datetime = new DateTime($start);
									$end_datetime = new DateTime($end);
									$vv = ($start_datetime)->diff($end_datetime)->format('%h.%i');
								if($start == '00:00:00' || $end == '00:00:00' ){
                                    $ss = '0.0';
                                }else{
                                  $ss = $vv;
                                }


         if($row['user_id']==null){
  
         }else{
        return new Attendence([
            'user_id' => $row['user_id'],
            'name' => $row['name'], 
            'date'=> $st,
           'first_in' => $start,
          'last_out' => $end,
          'in_device'=> $row['in_device'],   
          'out_device' => $row['out_device'],   
          'total_hours100'  => $ss,   
          'Month' => $_POST['month'],
            'year' => $_POST['year']
        ]);
    }
}
}

