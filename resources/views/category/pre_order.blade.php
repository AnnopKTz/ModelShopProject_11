@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="row">

        <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="/show/scale">SCALES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/vendor">VENDORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/productLine">PRODUCTLINE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/show/pre_order" tabindex="-1">PRE-ORDER</a>
                </li>
            </ul>
            <br>
                <h1>PRE-ORDERS</h1>
                <div class="card-columns">
                        @foreach($details as $detail)
                        @if($detail->editStatus == 4)
                        <div class="card border-info mb-3">
                            <img class="card-img-top" src="/image/sadaharu.gif" style="width:300px">
                            <div class="card-body text-info">
                            <h5 class="card-title">Product : {{$detail->productName}}</h5>
                            <p class="card-text">Price : {{$detail->MSRP}}</p>
                            <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                            </div>
                        </div>
                        @endif
                        @endforeach
        </div>
    </div>
</div>
@endsection