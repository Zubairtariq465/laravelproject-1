<?php

namespace App\Http\Controllers;
use App\Models\NModel;

use Illuminate\Http\Request;

class ProController extends Controller
{
    function search(Request $req)
    {
        $email=$req->email;
        $pwd=$req->pwd;

    $result=NModel::where('email',$email)
    ->where('enrollment', $pwd)
    ->get();

    if($result->isNotEmpty())
    return redirect('formpage')->with('success','User Exist');
else
return redirect('formpage')->with('error','User Not Exist');
    }
}
