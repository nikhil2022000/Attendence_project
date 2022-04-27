<?php

namespace App\Http\Controllers;

use App\Imports\usersImport;
use DB;
use Excel;
use Illuminate\Http\Request;
use Response;

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
        ->leftJoin('sheet1','excel.user_id','=','sheet1.empid')
        ->select('excel.user_id','excel.name','sheet1.shift','excel.date','excel.first_in','excel.last_out','excel.in_device','excel.out_device','excel.total_hours100',)->get();
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
        // echo"<pre>";print_r($_POST);die;
        //$data=DB::table('excel')->get();
        $name = $req->get('name');
        $date = $req->get('date');
        $shift = $req->get('shift');

        //echo"<pre>";print_r($name);

        // echo"<pre>";print_r($data);die;

        $data = DB::table('excel')
        ->Join('sheet1','excel.user_id','=','sheet1.empid')
        ->where('excel.name',$name)
       ->OrWhere('excel.date', $date)
       ->OrWhere('sheet1.Shift', $shift)->get();
        // echo"<pre>";print_r($data);die;
        // return view('Attendence.search_employ',['data'=>$data]);
        $response['data'] = $data;
        $response['success'] = true;
        $response['messages'] = 'Succesfully loaded';
        return Response::json($response);
    }
    
}
