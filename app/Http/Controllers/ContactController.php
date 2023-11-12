<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $con = "Contact";
        return view('/contact')->with('con',$con);
    }
}
