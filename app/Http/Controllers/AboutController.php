<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $ab = "About";
        return view('/about')->with ('ab' , $ab);
    }
}
