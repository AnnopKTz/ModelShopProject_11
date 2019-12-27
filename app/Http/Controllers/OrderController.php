<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(){
        $orders = DB::table('orders')->join('order_status', function($join){
            $join->on('orders.status','=','order_status.statusID');
        })->where('status','<','7')->orderBy('orderNumber')->get();
        return view('order.order',compact("orders"));
    }

    public function preOrder(){
        $preorders = DB::table('orders')->join('order_status', function($join){
            $join->on('orders.status','=','order_status.statusID');
        })->where('status','>=','7')->orderBy('orderNumber')->get();
        return view('order.preorder',compact("preorders"));
    }
    
    public function detail($orderNumber){
        $moredetail = DB::table('orderdetails')->join('products',function ($join){
            $join->on('orderdetails.productCode','=','products.productCode');
        })->where('orderNumber',"=",$orderNumber)->get();
        $id = $orderNumber;
        $addresses = DB::table('addresses')->join('orders',function ($join){
            $join->on('addresses.customerNo','=','orders.customerNo');
        })->where('orders.orderNumber',"=",$orderNumber)->get();
        $status = DB::table('order_status')->where('statusID','<','7')->get();
        $points = DB::table('orders')->select('point')->where('orderNumber','=',$orderNumber)->get();
        $prices = DB::table('orderdetails')->selectRaw('SUM(priceEach) as totals')->where('orderNumber','=',$orderNumber)->get();
        $crrstatus = DB::table('order_status')->join('orders', function ($join){
            $join->on('orders.status','=','order_status.statusID');
        })->where('orders.orderNumber',"=",$orderNumber)->get();
        return view('order.moredetail')
                ->with(compact("prices"))
                ->with(compact("crrstatus"))
                ->with(compact("id"))
                ->with(compact("status"))
                ->with(compact("addresses"))
                ->with(compact("moredetail"))
                ->with(compact("points"));
    }
    
    public function payment(){
        $payments = DB::table('payments')->get();
        return view('order.payments',compact("payments"));
    }

    public function addPayment(Request $request){
        $validatedData = $request->validate([
            'customerID' => 'required',
            'checkNumber' => 'required',
            'amount' => 'required',
        ]);
        DB::table('payments') ->insert(['customerID'=>$request->customerID,'checkNumber'=>$request->checkNumber,'paymentDate'=>$request->paymentDate,'amount'=>$request->amount]);
        return redirect('/payments');
    }

    public function editType($orderNumber,$statusType){
        DB::table('orders')->where('orderNumber','=',$orderNumber)->update(['status'=>$statusType]);
        return redirect()->action('OrderController@detail',$orderNumber);
    }
}