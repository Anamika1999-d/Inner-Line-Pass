<?php

namespace App\Http\Controllers;
use PDF;
use App\ApplicationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Mail\finalmail;
use Illuminate\Support\Facades\Mail; 

class AfOfficerController extends Controller
{
    public function index(){
        $application_forms=ApplicationForm::where([
            ['Remarks_from_Forwarder','=','Accepted'],
            ['Remarks_from_Officer','=','Null'],
        ])->get();
        
        //$application_forms=DB::select('select * from application_forms where  Remarks_from_Forwarder= ?', ['Accepted']);
        return view('/application_form/AF_Officer',['application_forms'=>$application_forms]);
    }
    public function show($id){
        $application_forms= ApplicationForm::find($id);
        return view('/application_form/AF_Officer2')->with('application_forms', $application_forms);

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
    public function update(Request $request , $id){
        $status= ApplicationForm::find($id);

        if($request->has('Accept')){
            $status->Remarks_from_Officer = 'Accepted';
            $status->Pass_No="ILP00".time();
            $status->Officer_UpdatedAt=$status->updated_at;
            $status->DigitalSign='Signed';
            $status->save();
            Mail::to($status->Email)->send(new finalmail($status));
            $passno='CERTI'.$status->Pass_No;
            return view('certificate.ilp',compact('status','passno'));
        
        }
        elseif($request->has('Reject')){
            return view ('Remarks/remarksOfficer',['application_forms'=>$status]);
        }
    }
    public function update1(Request $request , $id){
        $status= ApplicationForm::find($id);

        $status->Remarks_from_Forwarder ='NULL';
        $status->Remarks_from_Officer =request('Remarks_from_Officer');
        $status->Officer_UpdatedAt=$status->updated_at;
        $status->save();
        return redirect('/List');
    }
    public function mypdf($id){
        $status = ApplicationForm:: find($id);
        $status->ILP_Downloaded='downloaded';
        
        $status->save();
        $passno=$status->Pass_No;
        //dd ($passno);
        $pdf = PDF::loadView('certificate.ilp',compact('status','passno'));
        $fileName ="";
        try{
            $fileName = $status->Application_No;
        }
        catch(Exception $e)
        {
            $fileName = 'myInfo';
        }
        //  
        
         return $pdf->stream();
        //  return $pdf->download($fileName.'.pdf');
    }
}
