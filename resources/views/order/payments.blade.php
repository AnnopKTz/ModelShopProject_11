@extends('layouts.indexapp')
@section('body')
<div class="orders">
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
        <ul>
             @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
         </ul>
        </div>
        @endif
    <table class="table">
                
                 <form action="/payments/addPayment" method="post">
                    @csrf<tr>
                    <th scope="col"><input type="text" class="form-control" name="customerID" placeholder="customerID"></th>
                    <th scope="col"><input type="text" class="form-control" name="checkNumber" placeholder="checkNumber"></th>
                    <th scope="col"><input type="text" class="form-control" name="paymentDate" placeholder="paymentDate"></th>
                    <th scope="col"><input type="text" class="form-control" name="amount" placeholder="amount"></th>
                    <th scope="col"><input type="submit" class="btn btn-primary"></th>
                    </tr>
                </form>
            
            
        <thead>
            <tr>
                <th scope="col">customerID</th>
                <th scope="col">checkNumber</th>
                <th scope="col">paymentDate</th>
                <th scope="col">amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr>
                <th scope="row">{{$payment->customerID}}</th>
                <td>{{$payment->checkNumber}}</td>
                <td>{{$payment->paymentDate}}</td>
                <td>{{$payment->amount}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection