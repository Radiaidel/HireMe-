<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('Services.index');
    }

    public function create(){
        return view('Services.create');
    }
}
