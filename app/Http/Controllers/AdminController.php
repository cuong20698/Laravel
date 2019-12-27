<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex(){
    	return view('admin.trangchu');
    }

    public function themSP(){}

    public function suaSP(){}

    public function tatHoatDongSP(){}

    public function layDSSP(){}
}
