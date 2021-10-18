<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CivilLaw extends Controller
{
    public function successioncertificate()
    {
        return view('categories.civillaw.successioncertificate');
    }
    public function propertyverification()
    {
        return view('categories.civillaw.propertyverification');
    }
    public function propertyregistration()
    {
        return view('categories.civillaw.propertyregistration');
    }
    public function giftdeeddrafting()
    {
        return view('categories.civillaw.giftdeeddrafting');
    }
    public function leaseagreementdrafting()
    {
        return view('categories.civillaw.leaseagreementdrafting');
    }
    public function leaseregistration()
    {
        return view('categories.civillaw.leaseregistration');
    }
}