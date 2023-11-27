<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

        public function index()
        {
    $title = "Day la tieu de";
    return view('test')->with('title, $title');
        }
}
