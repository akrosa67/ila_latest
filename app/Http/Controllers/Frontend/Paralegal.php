<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;


class Paralegal extends Controller{
    public function index()
    {
        return view('paralegal.index');
    }
}