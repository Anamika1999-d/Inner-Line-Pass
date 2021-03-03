<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ( auth()->user()->designation == 'Kiosk Operator'){
            return redirect('/Homepage');
        }
        elseif ( auth()->user()->designation == 'Forwarder'){
            return redirect('/Home_page');
        }
        elseif ( auth()->user()->designation == 'ADC'){
            return redirect('/List');
        }
    }
}
