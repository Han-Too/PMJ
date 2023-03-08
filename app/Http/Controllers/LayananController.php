<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('landingpage.layanan',compact('user'));
    }
}
