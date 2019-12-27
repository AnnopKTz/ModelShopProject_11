@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-4" id="myScrollspy">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#item1">CLASSIC CARS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item2">MORTORCYCLES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item3">PLANES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item4">SHIPS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item5">TRAINS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item6">TRUCKS&BUSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item7">VINTAGE CARS</a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-9 col-8">
            <input type="text" class="form-control" placeholder="SEARCH" style="width: 250px; border-radius: 10px;">
            <div>
            <a href="products/showCart"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                style="margin-left: 90%;"><img src="image/cart.png" style="width: 20px;height: 20px;">
            </button></a>
            @if(isset($cartItems))
        <span class="badge" style="background:yellow">{{$cartItems->totalQuantity}}</span>
            @endif</div>

            <div id="item1" class="table-responsive">
                <h1>CLASSIC CARS</h1>
                <table class="table">
                    <thead>
                        <tr>
                                <th scope="col">ProductCode</th>
                                <th scope="col">ProductName</th>
                                <th scope="col">ProductScale</th>
                                <th scope="col">ProductVendor</th>
                                <th scope="col">MSRP</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        @if ($category->productLine=="Classic Cars" && $category->editStatus != 3)
                        <tr>
                            <th scope="row">{{$category->productCode}}</th>
                            <td>{{$category->productName}}</td>
                            <td>{{$category->productScale}}</td>
                            <td>{{$category->productVendor}}</td>
                            <td>{{$category->MSRP}}</td>
                            <td>{{$category->editStatus}}</td>
                        <td><a href="/products/addToCart/{{$category->productCode}}"><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></a></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="item2" class="table-responsive">
                <h1>MORTORCYCLES</h1>
                <table class="table">
                    <thead>
                        <tr>
                                <th scope="col">ProductCode</th>
                                <th scope="col">ProductName</th>
                                <th scope="col">ProductScale</th>
                                <th scope="col">ProductVendor</th>
                                <th scope="col">MSRP</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine=="Motorcycles" && $category->editStatus != 3)
                            <tr>
                                    <th scope="row">{{$category->productCode}}</th>
                                    <td>{{$category->productName}}</td>
                                    <td>{{$category->productScale}}</td>
                                    <td>{{$category->productVendor}}</td>
                                    <td>{{$category->MSRP}}</td>
                                    <td>{{$category->editStatus}}</td>
                                <td><a href="/products/addToCart/{{$category->productCode}}"><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div id="item3" class="table-responsive">
                <h1>PLANES</h1>
                <table class="table">
                    <thead>
                        <tr>
                                <th scope="col">ProductCode</th>
                                <th scope="col">ProductName</th>
                                <th scope="col">ProductScale</th>
                                <th scope="col">ProductVendor</th>
                                <th scope="col">MSRP</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine=="Planes" && $category->editStatus != 3)
                            <tr>
                                    <th scope="row">{{$category->productCode}}</th>
                                    <td>{{$category->productName}}</td>
                                    <td>{{$category->productScale}}</td>
                                    <td>{{$category->productVendor}}</td>
                                    <td>{{$category->MSRP}}</td>
                                    <td>{{$category->editStatus}}</td>
                                <td><a href="/products/addToCart/{{$category->productCode}}"><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div id="item4" class="table-responsive">
                <h1>SHIPS</h1>
                <table class="table">
                    <thead>
                        <tr>
                                <th scope="col">ProductCode</th>
                                <th scope="col">ProductName</th>
                                <th scope="col">ProductScale</th>
                                <th scope="col">ProductVendor</th>
                                <th scope="col">MSRP</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine=="Ships" && $category->editStatus != 3)
                            <tr>
                                    <th scope="row">{{$category->productCode}}</th>
                                    <td>{{$category->productName}}</td>
                                    <td>{{$category->productScale}}</td>
                                    <td>{{$category->productVendor}}</td>
                                    <td>{{$category->MSRP}}</td>
                                    <td>{{$category->editStatus}}</td>
                                <td><a href="/products/addToCart/{{$category->productCode}}"><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div id="item5" class="table-responsive">
                <h1>TRAINS</h1>
                <table class="table">
                    <thead>
                        <tr>
                                <th scope="col">ProductCode</th>
                                <th scope="col">ProductName</th>
                                <th scope="col">ProductScale</th>
                                <th scope="col">ProductVendor</th>
                                <th scope="col">MSRP</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine=="Trains" && $category->editStatus != 3)
                            <tr>
                                    <th scope="row">{{$category->productCode}}</th>
                                    <td>{{$category->productName}}</td>
                                    <td>{{$category->productScale}}</td>
                                    <td>{{$category->productVendor}}</td>
                                    <td>{{$category->MSRP}}</td>
                                    <td>{{$category->editStatus}}</td>
                                <td><a href="/products/addToCart/{{$category->productCode}}"><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div id="item6" class="table-responsive">
                <h1>TRUCK&BUSES</h1>
                <table class="table">
                    <thead>
                        <tr>
                                <th scope="col">ProductCode</th>
                                <th scope="col">ProductName</th>
                                <th scope="col">ProductScale</th>
                                <th scope="col">ProductVendor</th>
                                <th scope="col">MSRP</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine=="Trucks and Buses" && $category->editStatus != 3)
                            <tr>
                                    <th scope="row">{{$category->productCode}}</th>
                                    <td>{{$category->productName}}</td>
                                    <td>{{$category->productScale}}</td>
                                    <td>{{$category->productVendor}}</td>
                                    <td>{{$category->MSRP}}</td>
                                    <td>{{$category->editStatus}}</td>
                                <td><a href="/products/addToCart/{{$category->productCode}}"><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div id="item7" class="table-responsive">
                <h1>VINTAGE CARS</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">ProductScale</th>
                            <th scope="col">ProductVendor</th>
                            <th scope="col">MSRP</th>
                            <th scope="col">Status</th>
                            <th scope="col">Order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine=="Vintage Cars" && $category->editStatus != 3)
                            <tr>
                                    <th scope="row">{{$category->productCode}}</th>
                                    <td>{{$category->productName}}</td>
                                    <td>{{$category->productScale}}</td>
                                    <td>{{$category->productVendor}}</td>
                                    <td>{{$category->MSRP}}</td>
                                    <td>{{$category->editStatus}}</td>
                                <td><a href="/products/addToCart/{{$category->productCode}}"><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></a></td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection