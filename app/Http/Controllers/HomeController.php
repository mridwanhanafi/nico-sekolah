<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function pengalihan(){
        $level= isset(Auth::user()->level) ? Auth::user()->level : '';
        if ($level == 'admin'):
            return redirect()->route('admin_page');
        elseif ($level == 'spv'):
            return redirect()->route('spv_page');
        elseif ($level == 'siswa'):
            return redirect()->route('siswa_page');
        else:
            return redirect()->route('login');
        endif;
    }
}
