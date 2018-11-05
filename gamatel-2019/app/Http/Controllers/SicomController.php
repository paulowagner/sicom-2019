<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SicomController extends Controller
{
    public function index()
    {
    	return view('sicom.index');
    }
}
