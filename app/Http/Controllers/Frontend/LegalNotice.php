<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LegalNotice extends Controller
{
    public function divorcenotice()
    {
        return view('categories.legalnotice.divorcenotice');
    }
    public function tenantevictionnotice()
    {
        return view('categories.legalnotice.tenantevictionnotice');
    }
    public function refundofsecuritynotice()
    {
        return view('categories.legalnotice.refundofsecuritynotice');
    }
    public function faultyproductnotice()
    {
        return view('categories.legalnotice.faultyproductnotice');
    }
    public function chequebouncenotice()
    {
        return view('categories.legalnotice.chequebouncenotice');
    }
    public function recoverynoticeofdues()
    {
        return view('categories.legalnotice.recoverynoticeofdues');
    }

}