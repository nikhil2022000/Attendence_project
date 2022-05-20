<?php

namespace App\Http\Controllers;

use App\Imports\usersImport;
use App\Models\Attendence;
use DB;
use Excel;
use Illuminate\Http\Request;
use Response;


class Data extends Controller
{
    public function import(Request $req)
    {
        // dd($req->month);
        //echo"<pre>";print_r($_POST);die;

        $model = new Attendence;
        $model->month = $req->month;
        $model->year = $req->year;

        // dd($model);
        //echo"<pre>";print_r($_FILES);die;
        Excel::import(new usersImport, $req->file('file'));
        return redirect()->back()->with('message', 'Data successfully Import');
    }
    public function fetch(Request $req)
    {
        //dd('sfd');
        $data = DB::table('excel')
            ->leftJoin('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->select('excel.user_id', 'excel.name', 'sheet1.shift', 'sheet1.Branch', 'excel.date', 'excel.first_in', 'excel.last_out', 'excel.in_device', 'excel.out_device', 'excel.total_hours100', )->get();

        return view('Attendence.fetch', ['data' => $data]);
    }
    public function show()
    {
        // dd('sfd');
        $data = DB::table("excel")
        ->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
         ->select('excel.total_hours100','sheet1.Empid','excel.name','excel.date','excel.first_in','excel.last_out','sheet1.Shift')->get();
               // echo"<pre>";print_r($data);die;
                $vv = json_decode(json_encode($data));
                // echo"<pre>";print_r($vv);die;

                foreach ($vv as $user) {
                    $id = $user->Empid;
                    $name = $user->name;
                    $date = $user->date;
                    $datalast_out = date("H:i:s", strtotime($user->last_out));
                    $datafirst_in = date("H:i:s", strtotime($user->first_in));
                    if($datafirst_in == '00:00:00'){
                        $total_hours100 =0.0;
                    }else{
                    $total_hours100 = $user->total_hours100;
                    }
                    $Shift = $user->Shift;

                    $d = array('user_id' => $id, 'name' => $name, 'date' => $date, 'first_in' => $datafirst_in, 'last_out' => $datalast_out, 'total_hours100' => $total_hours100, 'Shift' => $Shift);
                   // echo'<pre>'; print_r($d); die;
                    //echo"<pre>";print_r($datalast_out);die;
                    //$dt = array_merge($d,$vv);
                    $fulldata[] = $d;

                }
        return view('Attendence.list', ['data' => $fulldata]);
    }
    public function employ(Request $req)
    {

        $name = $req->get('name');
        $date = $req->get('date');
        $fromto = $req->get('fromto');
        $shift = $req->get('shift');
        $branch = $req->get('branch');
        $month = $req->get('month');

        $dat = DB::table('excel')
            ->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->where('excel.Name', 'LIKE', "%" . $name . "%")
        //->where('excel.date', 'LIKE',"%".$date."%")
            ->where('sheet1.Shift', 'LIKE', "%" . $shift . "%")
            ->where('sheet1.Branch', 'LIKE', "%" . $branch . "%")
            ->whereBetween('excel.date', [$date . '00:00:00', $fromto . '23:60:60'])
            ->get();

        $vv = json_decode(json_encode($dat));
        // echo"<pre>";print_r($vv);die;

        foreach ($vv as $user) {
            $id = $user->user_id;
            $name = $user->name;
            $date = $user->date;
            $datafirst_in = date("H:i:s", strtotime($user->first_in));
            $datalast_out = date("H:i:s", strtotime($user->last_out));
            $in_device = $user->in_device;
            $out_device = $user->out_device;
            $total_hours100 = $user->total_hours100;
            $Branch = $user->Branch;
            $Shift = $user->Shift;

            $d = array('user_id' => $id, 'name' => $name, 'date' => $date, 'first_in' => $datafirst_in, 'last_out' => $datalast_out, 'in_device' => $in_device, 'out_device' => $out_device, 'total_hours100' => $total_hours100, 'Branch' => $Branch, 'Shift' => $Shift);
            //echo'<pre>'; print_r($d); die;
            //echo"<pre>";print_r($datalast_out);die;
            //$dt = array_merge($d,$vv);
            $fulldata[] = $d;

        }
        $response['data'] = $fulldata;
        $response['success'] = true;
        $response['messages'] = 'Succesfully loaded';
        return Response::json($response);
        //echo'<pre>'; print_r($d); die;

    }
    public function late_employ(Request $req)
    {

        $name = $req->get('name');
        $date = $req->get('date');
        $fromto = $req->get('fromto');
        $shift = $req->get('shift');
        $branch = $req->get('branch');
        $month = $req->get('month');

        $dat = DB::table('excel')
            ->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->where('excel.Name', 'LIKE', "%" . $name . "%")
        //->where('excel.date', 'LIKE',"%".$date."%")
            ->where('sheet1.Shift', 'LIKE', "%" . $shift . "%")
            ->where('sheet1.Branch', 'LIKE', "%" . $branch . "%")
            ->whereBetween('excel.date', [$date . '00:00:00', $fromto . '23:60:60'])
            ->get();

        $vv = json_decode(json_encode($dat));
       // echo"<pre>";print_r($dat);die;

        foreach ($vv as $user) {
            $id = $user->user_id;
            $name = $user->name;
            $date = $user->date;
            $datalast_out = date("H:i:s", strtotime($user->last_out));
            $datafirst_in = date("H:i:s", strtotime($user->first_in));
            if($datafirst_in =='00:00:00'){
                $total_hours100 = 0.0;
            }else{
                $total_hours100 = $user->total_hours100;
            }
            $in_device = $user->in_device;
            $out_device = $user->out_device; 
            $Branch = $user->Branch;
            $Shift = $user->Shift;

            $d = array('user_id' => $id, 'name' => $name, 'date' => $date, 'first_in' => $datafirst_in, 'last_out' => $datalast_out, 'in_device' => $in_device, 'out_device' => $out_device, 'total_hours100' => $total_hours100, 'Branch' => $Branch, 'Shift' => $Shift);
           // echo'<pre>'; print_r($d);
            //echo"<pre>";print_r($datalast_out);die;
            //$dt = array_merge($d,$vv);
            $fulldata[] = $d;

        }
        //die;
        $response['data'] = $fulldata;
        $response['success'] = true;
        $response['messages'] = 'Succesfully loaded';
        return Response::json($response);
        //echo'<pre>'; print_r($d); die;

    }

    public function M_list(Request $req)
    {

        $datecount = DB::table('excel')->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->select(DB::raw('sheet1.Empid '), ('excel.total_hours100'), ('excel.date'),('excel.first_in'))
            ->groupBy('sheet1.Empid', 'excel.total_hours100', 'excel.date','excel.first_in')
            ->orderby('date', 'asc')
            ->get();
        //echo'<pre>'; print_r($datecount); die;
        $data = json_decode(json_encode($datecount));
        // echo"<pre>";print_r($vv);die;
 
         foreach ($data as $use) {
         
             $Empid = $use->Empid;
             $date = $use->date;
             $first_in = $use->first_in;
            if ($first_in == '00:00:00'){
                $total_hours100 = '0.0';
            }else{
             $total_hours100 = $use->total_hours100;
             
            }
            
          
 
             $d = array( 'id' => $Empid,  'date' => $date,'first_in' => $first_in, 'total_hours100' => $total_hours100);
            // echo'<pre>'; print_r($d); 
             $total[] = $d;
  }
        //die;
        $employ = DB::table('excel')
            ->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->select('sheet1.Name', 'sheet1.Empid')
            ->DISTINCT('sheet1.Empid')
            ->get();

        $data = DB::table('excel')
            ->select('user_id', 'Name', 'date')
            ->get();
       // echo'<pre>'; print_r($total); die;

        return view('Attendence.month_attendence', ['data' => $data, 'Employdata' => $total, 'employ' => $employ]);
    }

    public function employ_month(Request $req)
    {
     //echo'<pre>'; print_r($_POST); die;

        $name = $req->get('name');
        $branch = $req->get('branch');
        $month = $req->get('month');
        // $year = $req->get('year');

        $dat = DB::table('excel')
            ->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->where('sheet1.Name', 'LIKE', "%" . $name . "%")
            // ->where('excel.year', 'LIKE', "%" . $year . "%")
            ->where('excel.month', 'LIKE', "%" . $month . "%")
            ->where('sheet1.Branch', 'LIKE', "%" . $branch . "%")
            ->get();

        $ss = json_decode(json_encode($dat));
       // echo"<pre>";print_r($vv);die;

        foreach ($ss as $empp) {
        
            $Empid = $empp->Empid;
            $Name = $empp->Name;
            $date = $empp->date;
            $first_in = $empp->first_in;
           if ($first_in == '00:00:00'){
               $total_hours100 = '0.0';
           }else{
            $total_hours100 = $empp->total_hours100;
            
           }
            $Branch = $empp->Branch;
         

            $f = array( 'id' => $Empid, 'Name' => $Name,  'date' => $date,'first_in' => $first_in, 'total_hours100' => $total_hours100, 'Branch' => $Branch);
            //echo'<pre>'; print_r($first_in); 
            $empdata[] = $f;
 }
 //die;
          



 //echo'<pre>'; print_r($empdata); die;
        $response['data'] = $empdata;
        $response['success'] = true;
        $response['messages'] = 'Succesfully loaded';
        return Response::json($response);
       // 
     
      
       


    }   

}
