<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class surveyController extends Controller
{
      public function index(){
    	return view('survey');
    }
}
