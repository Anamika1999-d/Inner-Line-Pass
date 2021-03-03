<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SMSController extends Controller
{ 
    public function Firstsms(){
        Nexmo::message()->send([
            'to'   => '6909485604',
            'from' => '8259046200',
            'text' => 'who r u?',
        ]);
         echo 'send';
   }
}
