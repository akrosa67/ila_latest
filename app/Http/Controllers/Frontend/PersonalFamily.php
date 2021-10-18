<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;




class PersonalFamily extends Controller{

    public function divorce()
    {
            return view('categories.personalfamily.divorce');
    }
    public function familydispute()
    {
            return view('categories.personalfamily.familydispute');
    }
    public function childcustody()
    {
            return view('categories.personalfamily.childcustody');
    }
    public function muslimlaw()
    {
            return view('categories.personalfamily.muslimlaw');
    }
    public function medicalnegligence()
    {
            return view('categories.personalfamily.medicalnegligence');
    }
    public function motoraccident()
    {
            return view('categories.personalfamily.motoraccident');
    }
    public function willstrust()
    {
            return view('categories.personalfamily.willstrust');
    }
    public function labourservices()
    {
            return view('categories.personalfamily.labourservices');
    }

}