<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CivilDebt extends Controller
{
public function chequebounce()
{
    return view('categories.civildebtmatters.chequebounce');
}
public function civil()
{
    return view('categories.civildebtmatters.civil');
}
public function consumercourt()
{
    return view('categories.civildebtmatters.consumercourt');
}
public function documentation()
{
    return view('categories.civildebtmatters.documentation');
}
public function recovery()
{
    return view('categories.civildebtmatters.recovery');
}

}


