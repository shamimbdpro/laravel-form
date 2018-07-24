<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curd;

class websiteController extends Controller
{
   public function index(){

   }

   public function student(){
   	return view('frontend/index');
   }


    public function add_data(Request $request){

    $curd=curd::insert([
     'name' => $_POST['name'],
     'username' => $_POST['username'],
     'email' => $_POST['email'],
     'pass' => $_POST['pass'],
     'roll' => $_POST['roll'],
     'gender' => $_POST['gander'],
     'sub' => $_POST['sub'],
     'country' => $_POST['country'],
     
    ]);

    return redirect(route('student'))->with('smg','Data Add Success');

    }


}
