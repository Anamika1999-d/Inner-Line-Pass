<?php

namespace App\Http\Controllers;

use App\ApplicationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Mail\ForwarderRemarksmail;
use Illuminate\Support\Facades\Mail; 


class AfForwarderController extends Controller
{
    public function index(){
        $application_forms=ApplicationForm::where([
            ['Remarks_from_Forwarder','=','NULL'],
        ])->get();
        $data=ApplicationForm::where([
            ['Remarks_from_Officer','!=','Accepted'],
            ['Remarks_from_Officer','!=','NULL'],
            ['Remarks_from_Forwarder','=','NULL'],
        ])->get();
        return view('/application_form/AF_Forwarder',['application_forms'=>$application_forms],['datas'=>$data]);
    }
    public function show($id){
        $application_forms= ApplicationForm::find($id);
        return view('/application_form/AF_Forwarder2')->with('application_forms', $application_forms);

    }
    public function download1($id){
        $application_forms= ApplicationForm::find($id);
        $filename = $application_forms->Doc1;
        //dd($filename);
        $file_path =public_path()."/storage/public/documents/".$filename;
        //for download
        //dd($file_path);
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
    public function download2($id){
        $application_forms= ApplicationForm::find($id);
        $filename = $application_forms->Doc2;
        //dd($filename);
        $file_path =public_path()."/storage/public/documents/".$filename;
        //for download
        //dd($file_path);
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
    public function update(Request $request , $id)
    {
        $status= ApplicationForm::find($id);
        $status->Remarks_from_Officer='NULL';

        if($request->has('Accept')){
            $status->Remarks_from_Forwarder = 'Accepted';
            $status->Forwarder_UpdatedAt= $status->updated_at;

            $status->save();
            return redirect('/Home_page');
        }
        elseif($request->has('Reject')){
            return view ('Remarks/remarksForwarder',['application_forms'=>$status]);
        }
    }
    public function update1(Request $request , $id){
        $status= ApplicationForm::find($id);
        
        $status->Remarks_from_Forwarder =request('Remarks_from_Forwarder');
        $status->Forwarder_UpdatedAt= $status->updated_at;
        $status->save();
        Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
        // ApplicationForm::where('id', $id)->delete();
        return redirect('/Home_page');
    }
}
