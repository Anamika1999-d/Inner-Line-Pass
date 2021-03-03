<?php

namespace App\Http\Controllers;

use App\ApplicationForm;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function search(){
        $search=$_GET['Search'];
        
        $application_forms=ApplicationForm::where('Application_No','LIKE','%'.$search.'%')->first();
        return view('checkurStatus',['data'=>$application_forms]);
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
        else{
            return redirect('/index');
        }
    }
}
