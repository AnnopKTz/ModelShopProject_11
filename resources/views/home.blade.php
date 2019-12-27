@extends('layouts.app')

<!-- @section('content') -->

@section('body')
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                style="margin-left: 90%;"><img src="image/cart.png" style="width: 20px;height: 20px;">
            </button>
            <!-- Modal -->
            <div class="modal fade-lg" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ProducCode</th>
                                            <th scope="col">ProductName</th>
                                            <th scope="col">Scale</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Point</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>00000</td>
                                            <td>00000</td>
                                            <td>00000</td>
                                            <td>00000</td>
                                            <td>00000</td>
                                            <td>
                                                <button type="button" class="btn btn-info">EDIT</button>
                                                <button type="button" class="btn btn-danger">CANCLE</button>
                                                <button type="button" class="btn btn-success">ADD</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">CHECKOUT</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="item1" class="table-responsive">
                <h1>CLASSIC CARS</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Status</th>
                            <th scope="col">order</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        @if ($category->productLine==="Classic Cars")
                        <tr>
                            <th scope="row">{{$category->buyPrice}}</th>
                            <td>{{$category->productCode}}</td>
                            <td>{{$category->productName}}</td>
                            <td>{{$category->editStatus}}</td>
                            <td><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                        style="width: 20px;height: 20px;"></button></td>
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
                            <th scope="col">#</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Status</th>
                            <th scope="col">order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine==="Motorcycles")
                            <tr>
                                <th scope="row">{{$category->buyPrice}}</th>
                                <td>{{$category->productCode}}</td>
                                <td>{{$category->productName}}</td>
                                <td>{{$category->editStatus}}</td>
                                <td><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                            style="width: 20px;height: 20px;"></button></td>
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
                            <th scope="col">#</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Status</th>
                            <th scope="col">order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine==="Planes")
                            <tr>
                                <th scope="row">{{$category->buyPrice}}</th>
                                <td>{{$category->productCode}}</td>
                                <td>{{$category->productName}}</td>
                                <td>{{$category->editStatus}}</td>
                                <td><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                            style="width: 20px;height: 20px;"></button></td>
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
                            <th scope="col">#</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Status</th>
                            <th scope="col">order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine==="Ships")
                            <tr>
                                <th scope="row">{{$category->buyPrice}}</th>
                                <td>{{$category->productCode}}</td>
                                <td>{{$category->productName}}</td>
                                <td>{{$category->editStatus}}</td>
                                <td><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                            style="width: 20px;height: 20px;"></button></td>
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
                            <th scope="col">#</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Status</th>
                            <th scope="col">order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine==="Trains")
                            <tr>
                                <th scope="row">{{$category->buyPrice}}</th>
                                <td>{{$category->productCode}}</td>
                                <td>{{$category->productName}}</td>
                                <td>{{$category->editStatus}}</td>
                                <td><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                            style="width: 20px;height: 20px;"></button></td>
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
                            <th scope="col">#</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Status</th>
                            <th scope="col">order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine==="Trucks and Buses")
                            <tr>
                                <th scope="row">{{$category->buyPrice}}</th>
                                <td>{{$category->productCode}}</td>
                                <td>{{$category->productName}}</td>
                                <td>{{$category->editStatus}}</td>
                                <td><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                            style="width: 20px;height: 20px;"></button></td>
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
                            <th scope="col">#</th>
                            <th scope="col">ProductCode</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">Status</th>
                            <th scope="col">order</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($categories as $category)
                            @if ($category->productLine==="Vintage Cars")
                            <tr>
                                <th scope="row">{{$category->buyPrice}}</th>
                                <td>{{$category->productCode}}</td>
                                <td>{{$category->productName}}</td>
                                <td>{{$category->editStatus}}</td>
                                <td><button type="button" class="btn btn-warning"><img src="image/online-store.png"
                                            style="width: 20px;height: 20px;"></button></td>
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
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- @endsection -->


