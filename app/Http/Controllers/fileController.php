<?php

namespace App\Http\Controllers;
use App\file;
use Illuminate\Support\Facades\Response;


class fileController extends Controller
{
       public function show(){
              return view ('test') ; 
       }
       public function store (){
            $data =new  file;
            $data->name=request('name');
            $data->number=request('number');
            $data ->save();
            alert()->info('Your form submited successfully ')->autoclose("2000");
            return back();
        }
}
