<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Family extends Controller
{

    public function mutualdivorce()
    {
        return view('categories.family.mutualdivorce');
    }
    public function marriageregistration()
    {
        return view('categories.family.marriageregistration');
    }
    public function courtmarriage()
    {
        return view('categories.family.courtmarriage');
    }
    public function divorcenotice()
    {
        return view('categories.family.divorcenotice');
    }
    public function marriagecounselling()
    {
        return view('categories.family.marriagecounselling');
    }
    public function willdrafting()
    {
        return view('categories.family.willdrafting');
    }

}