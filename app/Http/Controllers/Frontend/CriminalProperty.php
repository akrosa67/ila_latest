<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CriminalProperty extends Controller
{
    public function criminal()
    {
        return view('categories.criminalproperty.criminal');
    }
    public function cybercrime()
    {
        return view('categories.criminalproperty.cybercrime');
    }
    public function landlordtenant()
    {
        return view('categories.criminalproperty.landlordtenant');
    }
    public function property()
    {
        return view('categories.criminalproperty.property');
    }
}
