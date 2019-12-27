@extends('layouts.app')
@section('content')
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CheckOut</h5>
                            <div style="display:flex;margin-right:20%">
                                <p><b>CustomerID</b></p>
                                <input class="form-control" type="text" placeholder="CustomerID">
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </div>
                            <a href="/">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button></a>
                        </div>
                        <div class="modal-body">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ProducCode</th>
                                            <th scope="col">ProductName</th>
                                            <th scope="col">Scale</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItem->items as $item)
                                        <tr>
                                                <td>{{$item['data'][0]->productCode}}</td>
                                                <td>{{$item['data'][0]->productName}}</td>
                                                <td>{{$item['data'][0]->productScale}}</td>
                                                <td>
                                                        <a class="cart_quantity_up" href="/products/increaseItem/{{$item['data'][0]->productCode}}"> + </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item['quantity']}}" autocomplete="off" size="2">
                                                        <a class="cart_quantity_up" href="/products/decreaseItem/{{$item['data'][0]->productCode}}"> - </a>
                                                </td>
                                                <td>{{$item['totalEach']}}</td>
                                                <td>
                                                    <a href="/products/removeItem/{{$item['data'][0]->productCode}}" onclick="return confirm('Do yo want to remove ?')"><button type="button" class="btn btn-danger">X</button></a>
                                                </td>
                                            </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div style="width: 50%; color: darkcyan; display: flex;">
                                    <form>
                                            <div class="form-group" style="display: flex;">
                                              <label for="formGroupExampleInput"><b>Shipping Address</b></label>
                                              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="address">
                                            </div>
                                            <div class="form-group" style="display: flex;">
                                              <label for="formGroupExampleInput2"><b>Billing Address</b></label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="address">
                                            </div>
                                    </form>
                                    <div class="totalPrice" style="float: right; margin-left: 15%; ">
                                        <li><b>TotalQuantity  :<span> {{$cartItem->totalQuantity}}</span></b></li>
                                        <li><b>TotalPrice  : {{$cartItem->totalPrice}}</b></li>
                                        <li><b>Point  : {{$cartItem->totalPoint}}</b></li>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">CONFIRM</button>
                        </div>
                    </div>
                </div>
@endsection