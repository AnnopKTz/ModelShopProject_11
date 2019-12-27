<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{

    public function showEmployee(){
        $employees = DB::table('employees')->get();
        return view('person.employee',compact("employees"));
    }

    public function showCustomer(){
        $customers = DB::table('customers')->get();
        return view('person.customer',compact("customers"));
    }

    public function addCustomer(){
        return view('person.addcustomer');
    }
    
    public function keepCustomer(Request $request,$employeeNumber){
        dd($request);
        $validatedData = $request->Svalidate([
            'customerName' => 'required',
            'contractFirstname'=>'required',
            'contractLastname'=> 'required',
            'phone'=>'required',
            'creditLimit'=>'required',
        ]);
        DB::table('customers')->insert(['customerName'=>$request->customerName,'contractFirstname'=>$request->contractFirstname,'contractLastname'=>$request->contractLastname,'phone'=>$request->phone,'creditLimit'=>$request->creditLimit,'salesRepEmployeeNumber'=>$employeeNumber]);
        return redirect('/customers');
    }

    public function deleteCustomer($customerNumber){
        DB::table('customers')->where('customerNumber','=',$customerNumber)->delete();
        return redirect('/customers');
    }

    public function deleteAddress($addressesID){
        $customerNumbers = DB::table('addresses')->where('addressesID','=',$addressesID)->get();
        $customerNumber = $customerNumbers[0]->customerNo;
        DB::table('addresses')->where('addressesID','=',$addressesID)->delete();
        return redirect()->action('PersonController@customerDetail',$customerNumber);
    }

    public function deleteEmployee($employeeNumber){
        DB::table('employees')->where('employeeNumber','=',$employeeNumber)->delete();
        return redirect('/employees');
    }

    public function customerDetail($employeeNumber){
        $details = DB::table('customers')->where('customerNumber','=',$employeeNumber)->get();
        $addresses = DB::table('customers')->join('addresses', function($join){
            $join->on('customers.customerNumber','=','customerNo');
        })->where('customerNumber','=',$employeeNumber)->get();
        return view('person.editcustomer')
                ->with(compact("details"))
                ->with(compact("addresses"));
    }

    public function updateEmployee($employeeNumber){
        $details = DB::table('employees')->where('employeeNumber','=',$employeeNumber)->get();
        return view('person.editemployee',compact("details"));
    }

    public function addAddress(Request $request, $customerNumber){
        $validatedData = $request->validate([
            'addressLine' => 'required',
            'city' => 'required',
            'country'=>'required',
        ]);
        DB::table('addresses')->insert(['customerNo'=>$customerNumber,'addressLine'=>$request->addressLine,'city'=>$request->city,'state'=>$request->state,'postalCode'=>$request->potalCode,'country'=>$request->country]);
        return redirect()->action('PersonController@customerDetail',$customerNumber);
    }

    public function editAddress(Request $request, $addressesID){
        $customerNumbers = DB::table('addresses')->where('addressesID','=',$addressesID)->get();
        $customerNumber = $customerNumbers[0]->customerNo;
        DB::table('addresses')->where('addressesID','=',$addressesID)->update(['customerNo'=>$customerNumber,'addressLine'=>$request->addressLine,'city'=>$request->city,'state'=>$request->state,'postalCode'=>$request->potalCode,'country'=>$request->country]);
        return redirect()->action('PersonController@customerDetail',$customerNumber);
    }

    public function insert(Request $request){
        $validatedData = $request->validate([
            'employeeNumber' => 'required|unique:employees',
            'password' => 'required|min:4',
        ]);
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $extension= $request->input('extension');
        $jobTitle= $request->input('jobTitle');
        $employeeNumber = $request->input('employeeNumber');
        $password = $request->input('password');
        
        switch ($jobTitle){
            case "President":
                $role = 1;
                break;
            case "Sale Manager (EMEA)":
                $role = 6;
                break;
            case "Sales Rep":
                $role = 3;
                break;
            case "Sales Manager (APAC)":
                $role = 5;
                break;
            case "Sales Manager (NA)":
                $role = 7;
                break;
            case "VP Marketing":
                $role = 4;
                break;
            case "VP Sales":
                $role = 2;
                break;
        }
        $email = $request->input('email');
        $current_date_time = date('Y-m-d H:i:s');
        $dataUser=array('name'=>$employeeNumber, 'password'=> Hash::make($password), 'email'=>$email, 'role'=>$role, 'employeeNum'=>$employeeNumber);
        //'password' => Hash::make($data['password']),
        $data=array('firstName'=>$firstName,"lastName"=>$lastName,"extension"=>$extension,"email"=>$email, "jobTitle"=>$jobTitle, "created_at"=> $current_date_time, "updated_at"=> $current_date_time, 'employeeNumber'=>$employeeNumber);
        DB::table('employees')->insert($data);
        DB::table('users')->insert($dataUser);
        
        return redirect('/employees');
    }

    public function update(Request $request ){
        $employeeNumber = $request->input('employeeNumber');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $extension= $request->input('extension');
        $jobTitle= $request->input('jobTitle');
        $email = $request->input('email');
        $current_date_time = date('Y-m-d H:i:s');
        $data=array('firstName'=>$firstName,"lastName"=>$lastName,"extension"=>$extension,"email"=>$email, "jobTitle"=>$jobTitle, "updated_at"=> $current_date_time);
        DB::table('employees')->where('employeeNumber','=',$employeeNumber)->update($data);
        
        return redirect('/employees');
    }

    public function insertCustomer(Request $request){
        $salesRepEmployeeNumber = $request->input('salesRepEmployeeNumber');
        $customerName = $request->input('customerName');
        $contractFirstname = $request->input('contractFirstname');
        $contractLastname= $request->input('contractLastname');
        $phone= $request->input('phone');
        $creditLimit = $request->input('creditLimit');
        $current_date_time = date('Y-m-d H:i:s');
        $data=array('customerName'=>$customerName,"contractFirstname"=>$contractFirstname,"contractLastname"=>$contractLastname,"phone"=>$phone, "creditLimit"=>$creditLimit, "salesRepEmployeeNumber"=> $salesRepEmployeeNumber);
        DB::table('customers')->insert($data);
        
        return redirect('/customers');
    }

    public function editCustomer(Request $request){
        $customerNumber = $request->input('customerNumber');
        DB::table('customers')->where('customerNumber','=',$customerNumber)->update(['customerName'=>$request->customerName,'contractFirstname'=>$request->contractFirstname,'contractLastname'=>$request->contractLastname,'phone'=>$request->phone,'creditLimit'=>$request->creditLimit]);
        return redirect('/customers');
    }

    public function storeCustomer(Request $request,$id){
        $validatedData = $request->validate([
            'customerName'=>'required',
            'contractLastname' => 'required',
            'contractFirstname' => 'requored',
            'phone'=>'required',
            'creditLimit'=>'required',
        ]);
        DB::table('customers')->insert(['customerName'=>$request->customerName,'contractLastname'=>$request->contractLastname,'contractFirstname'=>$request->contractFirstname,'phone'=>$request->phone,'creditLimit'=>$request->creditLimit,'salesRepEmployeeNumbe'=>$id]);

        return redirect('/customers');
    }
}
