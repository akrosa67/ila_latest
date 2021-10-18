<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Documentation extends Controller
{
    public function mou()
    {
        return View('categories.documentation.mou');
    }
    public function namechange()
    {
        return View('categories.documentation.namechange');
    }
    public function saledeedregistration()
    {
        return View('categories.documentation.saledeedregistration');
    }
    public function willregistration()
    {
        return View('categories.documentation.willregistration');
    }
    public function powerofattorney()
    {
        return View('categories.documentation.powerofattorney');
    }
}