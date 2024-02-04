<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function processdata(Request $req)
    {
      echo $req->t1. " ". $req->t2;  
    }
}
