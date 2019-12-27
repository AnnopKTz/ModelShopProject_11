<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function insert(Request $request){
    //     $first_name = $request->input('first_name');
    //     $last_name = $request->input('last_name');
    //     $extension= $request->input('extension');
    //     $jobTitle= $request->input('jobTitle');
    //     $employeeNumber= $request->input('employeeNumber');
    //     $email = $request->input('email');
    //     $officeCode= $request->input('officeCode');
    //     $reportsTo= $request->input('reportsTo');
    //     $password= $request->input('password');
    //     $data=array('employeeNumber'=>$employeeNumber, 'first_name'=>$first_name,"last_name"=>$last_name,"extension"=>$extension,"email"=>$email, "officeCode"=>$officeCode, "reportsTo"=>$reportsTo, "jobTitle"=>$jobTitle, "password"=>$password);
    //     DB::table('employees')->insert($data);

    //     echo "Add succe";
    // }

}
