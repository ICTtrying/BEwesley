<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagazijnController extends Controller
{
    public function index()
    {
        return view('magazijn.magazijn');
    }
}
