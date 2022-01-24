<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() { return view('inicio'); }
    public function nuevos() { return view('nuevos'); }
    public function destacados() { return view('destacados'); }
}
