<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route :: get ('test', function()
// {
//     echo " laravel 2";
// }
// );
 
//  Route::get('processdata',[Mycontroller:: class,'setdata']);


//  Route::get ('/user/{age}',function($age)
//  {
//     if($age<30)
//         echo "Welcome to portal";
    
//     else
//     echo " You are not Allowed";
//  }
// ); 
// Route::get('/first/{fname}/second/{sname}',function($fname,$sname)
// {
// echo "Hello". " ". $fname." ".$sname;
// }
// );

// Route::get('/{action}/{n1}/{n2}',function($action,$n1,$n2){
// if($action=="add")
// echo "Addition : ".$n1+$n2;
// if($action=="sub")
// echo "Subtraction : ".$n1-$n2;
// if($action=="mul")
// echo "Multiplication : ".$n1*$n2;
// if($action=="div")
// echo "Devission : ".$n1/$n2;

// }

// );

// Route::get('/user/{name?}' ,function ($name='Anonmynous')
// {
// echo "Hello". " " . $name;
// }
// );
 
//  

//  Route::get ('/emp/{id}',function ($id)
//  {
//     echo "Regular Expression in URL Value :" .$id;

//  })->where('id','[0-9]+');

 Route::get ('/name/{name}/age/{age}',function ($name,$age)
 {
    echo "Name:".$name . "  age: ". $age;

 })->where(['name'=>'[A-Za-z]+','age'=>'[0-9]+']); 
 
 Route::fallback(function()
 {
    echo "This URL is Not Allowed in this Application";

 });


