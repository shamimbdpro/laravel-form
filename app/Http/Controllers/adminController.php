<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\curd;

class adminController extends Controller
{
 public function __construct()
    {
     $this->middleware('auth');
    }

    public function index(){
      return view('backend/index');

    }

  
    public function curd(){
       $curd=curd::get();
    return view('backend/curd', compact('curd'));
    }
}
