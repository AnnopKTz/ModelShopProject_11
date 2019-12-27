@extends('layouts.app')
@section('content')

<div class="Customer">
    <div class="d-flex justify-content-between">
        <input type="text" class="form-control" placeholder="SEARCH" style="width: 250px; border-radius: 10px; margin-left:2%">
        <a href="/customers/addCustomer"><button type="button" class="btn btn-success" style="margin-right:5%" data-toggle="modal" data-target="#addprod">ADD</button></a>
    </div>
    <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CustomerNumber</th>
                    <th scope="col">CustomerName</th>
                    <th scope="col">CreditLimit</th>
                    <th scope="col">Point</th>
                    <th scope="col">Phone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                <th scope="row">{{$customer->customerNumber}}</th>
                    <td>{{$customer->customerName}}</td>
                    <td>{{$customer->creditLimit}}</td>
                    <td>{{$customer->totalPoint}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>
                    <a href="/customers/CustomerDetail/{{$customer->customerNumber}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">MORE</button></a>
                    <a href="/customers/deleteCustomer/{{$customer->customerNumber}}">
                    <button type="button" class="btn btn-danger" onclick="return confirm('Do you want to DELETE {{$customer->customerNumber}} ? ')" >DELETE</button></a>
                    </td>
                </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection