<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Imports\ImportUser;
use App\Imports\holiday_import;
use App\Models\Attendence;
use App\Models\B_master;
use App\Models\Emplloye;
use App\Models\master_Emp   ;
use DB;
use Excel;
use Mail;
use Illuminate\Http\Request;
use Response;
use DateTime;


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
        Excel::import(new UsersImport, $req->file('file'));
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
                    $total_hours100 = $user->total_hours100;
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
            $fulldata[] = $d;
        }
        $response['data'] = $fulldata;
        $response['success'] = true;
        $response['messages'] = 'Succesfully loaded';
        return Response::json($response);

    }

    public function M_list(Request $req)
    {

        $datecount = DB::table('excel')->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->select(DB::raw('sheet1.Empid '), ('excel.total_hours100'), ('excel.date'), ('excel.id'),('excel.first_in'),('excel.last_out'))
            ->groupBy('sheet1.Empid', 'excel.total_hours100', 'excel.date','excel.first_in','excel.id','excel.last_out')
            ->orderby('date', 'asc')
            ->get();
        //echo'<pre>'; print_r($datecount); die;
        $data = json_decode(json_encode($datecount));
        // echo"<pre>";print_r($vv);die;
 
         foreach ($data as $use) {
         
             $Empid = $use->Empid;
             $date = $use->date;
             $id = $use->id;
             $first_in = $use->first_in;
             $last_out = $use->last_out;
             $total_hours100 = $use->total_hours100;
             $d = array( 'id' => $Empid,'ids' => $id,  'date' => $date,'first_in' => $first_in,'last_out' => $last_out, 'total_hours100' => $total_hours100);
            // echo'<pre>'; print_r($d); 
             $total[] = $d;
  }
        //die;
        $employ = DB::table('excel')
            ->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->select('sheet1.Name', 'sheet1.Empid','sheet1.status')
            ->DISTINCT('sheet1.Empid')
            ->get();

        $data = DB::table('excel')
            ->select('user_id', 'Name', 'date')
            ->get();

            $holiday = DB::table('holiday')
            ->select('Date')
            ->get();
        //echo'<pre>'; print_r($holiday); die;

        return view('Attendence.month_attendence', ['data' => $data, 'Employdata' => $total, 'employ' => $employ,  'holiday' => $holiday,]);
    }

    public function employ_month(Request $req)
    {
      //  echo'<pre>'; print_r($_POST); die;

        $name = $req->get('name');
        $branch = $req->get('branch');
        $month = $req->get('month');
        $year = $req->get('year');

        $dat = DB::table('excel')
            ->Join('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->where('sheet1.Name', 'LIKE', "%" . $name . "%")
            ->where('excel.year', 'LIKE', "%" . $year . "%")
            ->where('excel.month', 'LIKE', "%" . $month . "%")
            ->where('sheet1.Branch', 'LIKE', "%" . $branch . "%")
            ->get();

        $ss = json_decode(json_encode($dat));
       // echo"<pre>";print_r($vv);die;

        foreach ($ss as $empp) {
        
            $Empid = $empp->Empid;
            $Name = $empp->Name;
            $date = $empp->date;
            $status = $empp->status;
            $first_in = $empp->first_in;
           if ($first_in == '00:00:00'){
               $total_hours100 = 0.0;
           }else{
            $total_hours100 = $empp->total_hours100;
            
           }
            $Branch = $empp->Branch;
         if($status == '0'){

            $f = array( 'id' => $Empid, 'Name' => $Name,'status' => $status,  'date' => $date,'first_in' => $first_in, 'total_hours100' => $total_hours100, 'Branch' => $Branch);
            //echo'<pre>'; print_r($first_in); 
            $empdata[] = $f;
         }
 }
 //die;
          


        $response['data'] = $empdata;
        $response['success'] = true;
        $response['messages'] = 'Succesfully loaded';
        return Response::json($response);
       // echo'<pre>'; print_r($d); die;
      }   

      public function master(){
         // dd('hhh');
        $employ = DB::table('sheet1')->get();

    return view('Attendence.Employe_master', ['emp' => $employ]);
      }

      public function adding(Request $req){
    //dd('hhh');
        $model= new B_master;
        $model->Branch=$req->branch;
        $model->save();
        return redirect()->back()->with('message', 'Branch has Been submited Successfully');
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function list_B(){ 
           // dd('dd');
            $list = DB::table('_bmaster_tabel')->get();
           // dd($employ);
           return view('Attendence.Branch_list', ['list' => $list]);
}
        public function delete($id){ 
           // dd('dd');
            $data = B_master::find($id);
            $data->delete();
            return redirect('Branch_list');

            
}
public function edit($id){ 
    
     $data = B_master::find($id);
    // echo'<pre>'; print_r($data); die;

     return response()->json([
         'newcata' => $data,
   ]);
}
public function update(Request $req){ 
   // dd('jj');
    $data=B_master::find($req->id);
    $data->Branch=$req->Branch;
    $data->save();
    return redirect('Branch_list');

}
public function Emp_master(Request $req)
{
   // dd('ff');
   // echo"<pre>";print_r($_FILES);die;
    Excel::import(new ImportUser, $req->file('files'));
    return redirect()->back()->with('message', 'Data successfully Import');
}
public function emp_adding(Request $req){
    //dd('hh');
    //echo"<pre>";print_r($_POST);die;

        $model= new Emplloye;
        $model->Empid=$req->Emp_id;
        $model->Name=$req->Name;
        $model->Shift=$req->Shift;
        $model->Branch=$req->Branch;
        

        $model->save();
        return redirect()->back()->with('message', 'Employe has Been submited Successfully');
}
public function status_update($Empid){
  //  dd('hh');
    //echo"<pre>";print_r($_POST);die;
      $product =  DB::table('sheet1')->select('status')->where('Empid','=',$Empid)->first();
    //echo"<pre>";print_r($product);die;
        if($product->status == '1'){
            $statu = '0';
        }else{
            $statu = '1';
        }
        $val = array('status' => $statu);
  //echo"<pre>";print_r($val);die; 

         DB::table('sheet1')->where('Empid','=',$Empid)->update($val);
         return redirect()->back();
}

public function time_edit($Empid){ 
    
    $data = DB::table('excel')->where('id','=',$Empid)->get();
   // echo'<pre>'; print_r($data); die;

    return response()->json([
        'newcata' => $data,
  ]);
}
public function upd_time(Request $req){ 
  //  echo'<pre>'; print_r($_POST); die;
    
    
   $time= Attendence::find($req->id);
    $time->first_in = $req->first_in;
    $time->last_out = $req->last_out;
if($req->Leave == ''){
    $start_datetime = new DateTime($req->first_in);
	$end_datetime = new DateTime($req->last_out);
	$vv = ($start_datetime)->diff($end_datetime)->format('%h.%i');
    $time->total_hours100 = $vv;
}else{
    $time->total_hours100 = $req->Leave;
}
    $time->save();
   // echo'<pre>'; print_r($time); die;

   return redirect()->back();
}
public function add_holiday(Request $req){ 
    // dd($_FILES);
    Excel::import(new holiday_import, $req->file('fill'));
    return redirect()->back()->with('message', 'Data successfully Import');
   
  }
  public function Emp_mail(){ 
    // dd('FILES');
    $data = DB::table('excel')
    ->leftJoin('sheet1', 'excel.user_id', 'sheet1.Empid')
    ->whereNull('sheet1.Empid')
    ->get();
   // dd($data);
  $dat=['user_id'=>$data[1]->user_id,'date'=>$data[3]->date,'name'=>$data[2]->name,]; 
 // dd($dat);
  $user['to'] = 'vipannikhil2022000@gmail.com';
  Mail::send('match _employe',$dat,function ($messges) use ($user){
  $messges->to( $user['to']);
  $messges->subject('hiii');



  });

  }
}