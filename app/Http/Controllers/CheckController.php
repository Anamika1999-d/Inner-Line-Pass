<?php

namespace App\Http\Controllers;
use DB;
use App\ApplicationForm;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function search(){
        $search=$_GET['Search'];
        $application_forms=ApplicationForm::where('Application_No','LIKE',$search)->first();
        if($application_forms){
            return view('checkurStatus',['data'=>$application_forms]);
        }
        return redirect('/Homepage')->with('message', 'Enter the valid Application No');
        
    }
    public function check(){
        $d1=$_GET['Email'];
        $d2=$_GET['ApplicationNo'];
        $application_forms=ApplicationForm::where([
            ['Application_No','=',$d2],
            ['Email','=',$d1],
        ])->first();
        if($application_forms){
            return view('checkurStatus',['data'=>$application_forms]);
        }
            return redirect('/index')->with('message', 'Enter the valid Application No');
    }
    public function show(){
        $data=$_GET['name'];
        $application_forms=ApplicationForm::where([
            ['Applicant_Name','LIKE','%'.$data.'%'],
            ['DigitalSign','=','Signed']
            ])->get();
        
        return view('application_form/List',['data'=>$application_forms]);
    }
}
