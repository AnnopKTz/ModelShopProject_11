@extends('layouts.app')
@section('content')
<div class="products">
    <div class="d-flex justify-content-between">
        <input type="text" class="form-control" placeholder="SEARCH" style="width: 250px; border-radius: 10px; margin-left:2%">
        <a href="/products/addProduct"><button type="button" class="btn btn-success" style="margin-right:5%" data-toggle="modal" data-target="#addprod">ADD</button></a>
    </div>
    <br>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">ProductName</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">EditDate</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$product->productCode}}</th>
                    <td>{{$product->productName}}</td>
                    <td>{{$product->quantityInStock}}</td>
                    <td>{{$product->productLine}}</td>
                    <td>{{$product->editDate}}</td>
                    <td>{{$product->statusType}}</td>
                    <td>
                    @if(($product->editStatus)!=3)
                    <a href="/products/moreProduct/{{$product->productCode}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product">MORE</button></a>
                    <a href="/products/deleteProduct/{{$product->productCode}}"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#product">DELETE</button></a>
                    @endif
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection