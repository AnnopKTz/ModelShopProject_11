@extends('layouts.app')
@section('content')
<div class="orders">
    <input type="text" class="form-control" placeholder="SEARCH" style="width: 250px; border-radius: 10px; margin-left:80%">
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">OrderNumber</th>
                <th scope="col">OrderDate</th>
                <th scope="col">RequiredDate</th>
                <th scope="col">ShippeddDate</th>
                <th scope="col">Comment</th>
                <th scope="col">Status</th>
                <th scope="col">Customer</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($preorders as $order)
            <tr>
                <th scope="row">{{$order->orderNumber}}</th>
                <td>{{$order->orderDate}}</td>
                <td>{{$order->requiredDate}}</td>
                <td>{{$order->shippedDate}}</td>
                <td>{{$order->comments}}</td>
                <td>{{$order->statusType}}</td>
                <td>{{$order->customerNo}}</td>
                <td>
                    <a href="/orders/orderDetail/{{$order->orderNumber}}">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">MORE</button>
                    </a>
                    <!-- Modal -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection