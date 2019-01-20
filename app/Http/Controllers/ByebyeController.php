<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ByebyeController extends Controller
{

    public function index()
    {
        return view('byebye.index');
    }
}