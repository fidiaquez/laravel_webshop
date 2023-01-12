<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wusr;

class LoginController extends Controller
{
    public function index(){
        return view('login');
       }
    
}
