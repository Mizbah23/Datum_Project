<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class careerController extends Controller
{
    public function index(){
    	return view('career');
    }
}
