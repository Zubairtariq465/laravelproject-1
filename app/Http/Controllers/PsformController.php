<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class PsformController extends Controller
{
    function searchdata(Request $req)
    {
         $enr=$req->t1;
         $res=UserModel::where('enrollment',$enr)->get();

         if($res->count()==0)
         return redirect('formpage')->with('errormsg','Records not Found');
        else
        return view ('userform', ['records'=>$res[0]]);
    }
}
