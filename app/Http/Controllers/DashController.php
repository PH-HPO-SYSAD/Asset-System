<?php

namespace App\Http\Controllers;
use Hash;
use Input;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
   public function index() {
   		return view('index');
   }

   public function pincode(){
   		return view('user.pincode');
   }

   public function register() {
   		return view('user.register');
   }
}
