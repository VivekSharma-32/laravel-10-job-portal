<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeConrtoller extends Controller
{
    // This method will show our homepage
    public function index()
    {
        return view("front.home");
    }
}
