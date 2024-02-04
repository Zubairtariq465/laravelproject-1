<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserprocessModel;

class formController extends Controller
{
    function getdata(Request $req)
    {
        // dd($req->all());
        $name=$req->t1;
        $email=$req->t2;

        $tbl=new UserprocessModel;
        $tbl->name=$name;
        $tbl->email=$email;
        $tbl->save();

        return redirect ('userformpage')->with ('msg','Data Succesfully Inserted');
        
        
    }


}
