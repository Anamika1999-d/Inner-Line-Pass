<?php

namespace App\Http\Controllers;

use App\Remark;
use App\ApplicationForm;
use Illuminate\Http\Request;

class remarkController extends Controller
{
    public function index($id){
        $application_forms= ApplicationForm::find($id);

        return view('Remarks/remarksForworder')->with('application_forms', $application_forms);;
    }
    public function store(){
        $remarks= new Remark();

        $remarks->Remarks_from_Forworder=request('Remarks_from_Forworder');
        //$remarks->Remarks_from_Officer=request('Remarks_from_Officer');
        $remarks->save();

        return redirect('/Home_page');
    }
}
