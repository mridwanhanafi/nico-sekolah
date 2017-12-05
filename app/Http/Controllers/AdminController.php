<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function addKelasForm(){
    	return view('admin.addKelasForm');
    }

    public function createKelas(Request $request){
    	
    }

    public function addSiswa(){
    	return view('admin.addSiswaForm');
    }
}