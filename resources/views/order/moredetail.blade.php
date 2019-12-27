@extends('layouts.app')
@section('content')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="order">OrderNumber : {{$id}}</h5>
                                <a href="/orders">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                                </a>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">ProducCode</th>
                                                <th scope="col">ProductName</th>
                                                <th scope="col">Scale</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($moredetail as $detail)
                                            <tr>
                                                        <th scope="row">{{$detail->orderNumber}}</th>
                                                        <td>{{$detail->productCode}}</td>
                                                        <td>{{$detail->productName}}</td>
                                                        <td>{{$detail->productScale}}</td>
                                                        <td>{{$detail->priceEach}}</td>
                                                    
                                            </tr>
                                             @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                                <div style="width: 50%; color: darkcyan; display: flex;">
                                        <form>
                                                @foreach ($addresses as $address)
                                                <div class="form-group" style="display: flex;">
                                                  <label for="formGroupExampleInput"><b>Shipping Address</b></label>
                                                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="{{$address->addressLine}}">
                                                </div>
                                                <div class="form-group" style="display: flex;">
                                                  <label for="formGroupExampleInput2"><b>Billing Address</b></label>
                                                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="{{$address->addressLine}}">
                                                </div>
                                                @endforeach
                                        </form>
                                        <div class="totalPrice" style="float: right; margin-left: 15%; ">
                                            <p><b>TotalPrice  : {{$prices[0]->totals}}</b></p>
                                            <p><b>Point  : {{$points[0]->point}}</b></p>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <div class="dropdown">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              {{$crrstatus[0]->statusType}}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                @foreach ($status as $show)
                                            <a class="dropdown-item" href="/orders/editType/{{$crrstatus[0]->orderNumber}},{{$show->statusID}}">{{$show->statusType}}</a>
                                                @endforeach
                                            </div>
                                          </div>
                            </div>
                        </div>
@endsection