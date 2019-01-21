<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
      $items = DB::table('people')->get();
      return view('hello.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
      $id = $request->id;
      $item = DB::table('people')->where('id', $id)->first();
      return view('hello.show', ['item' => $item]);
    }
}