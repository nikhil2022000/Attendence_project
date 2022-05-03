<?php

namespace App\Http\Controllers;

use App\Imports\usersImport;
use DB;
use Excel;
use Illuminate\Http\Request;
use App\Models\Attendence;
use Response;

use Carbon\Carbon;
class Data extends Controller
{
    public function import(Request $req)
    {
        //$vale=$req->data;
        // dd($vale);
        //echo"<pre>";print_r($_FILES);die;
        Excel::import(new usersImport, $req->file('file'));
        return redirect()->back()->with('message', 'Data successfully Import');
    }
    public function fetch(Request $req)
    {
        //dd('sfd');
        $data = DB::table('excel')
            ->leftJoin('sheet1', 'excel.user_id', '=', 'sheet1.empid')
            ->select('excel.user_id', 'excel.name', 'sheet1.shift','sheet1.Branch', 'excel.date', 'excel.first_in', 'excel.last_out', 'excel.in_device', 'excel.out_device', 'excel.total_hours100', )->get();
        return view('Attendence.fetch', ['data' => $data]);
    }
    public function show()
    {
        // dd('sfd');
        $data = DB::table("excel")->where('total_hours100', '<', 8)->get();
        //echo"<pre>";print_r($data);die;

        return view('Attendence.list', ['data' => $data]);
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
                ->where('excel.Name','LIKE',"%".$name."%")
                //->where('excel.date', 'LIKE',"%".$date."%")
                ->where('sheet1.Shift', 'LIKE',"%".$shift."%")
                ->where('sheet1.Branch', 'LIKE',"%".$branch."%")
                ->whereBetween('excel.date',[$date.'00:00:00',$fromto.'23:60:60'])
                ->get();


              $vv=json_decode(json_encode($dat));
              // echo"<pre>";print_r($vv);die;
              
              foreach ($vv as $user) {
                  $id = $user->user_id;
                $name=$user->name;
                $date=$user->date;
                $datafirst_in = date("H:i:s", strtotime($user->first_in)); 
                $datalast_out = date("H:i:s", strtotime($user->last_out)); 
                $in_device=$user->in_device;
                $out_device=$user->out_device;
                $total_hours100=$user->total_hours100;
                $Branch=$user->Branch;
                $Shift=$user->Shift;


                $d = array('user_id'=>$id,'name'=>$name,'date'=>$date,'first_in' => $datafirst_in, 'last_out' => $datalast_out,'in_device' => $in_device,'out_device' => $out_device,'total_hours100' => $total_hours100,'Branch' => $Branch,'Shift' => $Shift,);
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
         
          
           //echo'<pre>'; print_r($dt); die;
        // return view('Attendence.search_employ',['data'=>$data]);
     
        // }
    }
    public function M_list(Request $req)
    {
        //dd('sfd');
        $data = DB::table('excel')->select('name')->get();
        return view('Attendence.month_attendence', ['data' => $data]);
    }
}
