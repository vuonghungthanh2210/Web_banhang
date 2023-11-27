<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
}
