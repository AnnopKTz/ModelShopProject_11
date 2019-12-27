@extends('layouts.indexapp')
@section('body')
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="product">Stock-Detail : {{$products[0]->productCode}}</h5>
                <a href="/products"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            </div>
            <div class="modal-body">
                <div>
                    <table class="table" style="display: flex">
                        <tbody>
                            <tr>
                                <th scope="col">ProducCode</th>
                                <td>{{$products[0]->productCode}}</td>
                            </tr>
                            <tr>
                                <th scope="col">ProductName</th>
                                <td>{{$products[0]->productName}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Catagory</th>
                                <td>{{$products[0]->productLine}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Vendor</th>
                                <td>{{$products[0]->productVendor}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Description</th>
                                <td>{{Str::limit($products[0]->productDescription,30)}}</td>
                            </tr>
                            <tr>
                                <th scope="col">BuyPrice</th>
                                <td>{{$products[0]->buyPrice}}</td>
                            </tr>
                            <tr>
                                <th scope="col">MSRP</th>
                                <td>{{$products[0]->MSRP}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">EDIT PRODUCT</button>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <table class="table">
                                <tbody>
                                <form action="/products/editProduct/{{$products[0]->productCode}}" method="post">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <input type = "hidden" name = "productCode" value = "{{$products[0]->productCode}}">
                                        <tr>
                                            <th scope="col">ProductName
                                            <th>
                                            <th scope="col"><input type="text" class="form-control" name="productName" placeholder="{{$products[0]->productName}}" value="{{$products[0]->productName}}"></th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Category
                                            <th>
                                            <th scope="col"><input type="text" class="form-control" name="productLine" placeholder="{{$products[0]->productLine}}" value="{{$products[0]->productLine}}"></th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Vender
                                            <th>
                                            <th scope="col"><input type="text" class="form-control" name="productVendor" placeholder="{{$products[0]->productVendor}}" value="{{$products[0]->productVendor}}"></th>
                                        </tr>
                                        <tr>
                                                <th scope="col">Scale<th>
                                                <th scope="col"><input type="text" class="form-control" name="productScale" placeholder="{{$products[0]->productScale}}" value="{{$products[0]->productScale}}"></th>
                                            </tr>
                                        <tr>
                                            <th scope="col">Description
                                            <th>
                                            <th scope="col"><input type="text" class="form-control" name="productDescription" placeholder="{{$products[0]->productDescription}}" value="{{$products[0]->productDescription}}"></th>
                                        </tr>
                                        <tr>
                                            <th scope="col">BuyPrice
                                            <th>
                                            <th scope="col"><input type="text" class="form-control" name="buyPrice" placeholder="{{$products[0]->buyPrice}}" value="{{$products[0]->buyPrice}}"></th>
                                        </tr>
                                        <tr>
                                            <th scope="col">MSRP
                                            <th>
                                            <th scope="col"><input type="text" class="form-control" name="MSRP" placeholder="{{$products[0]->MSRP}}" value="{{$products[0]->MSRP}}"></th>
                                        </tr>
                                        <tr>
                                                <th scope="col">Quantity
                                                <th>
                                                <th scope="col"><input type="text" class="form-control" name="quantityInStock" placeholder="{{$products[0]->quantityInStock}}" value="{{$products[0]->quantityInStock}}"></th>
                                            </tr>
                                    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">UPDATE</button>
                                    </div>
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-exam-modal-lg">INSERT IMAGES</button>
                <div class="modal fade bd-exam-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div style="width: 400px; height: 400px; background-color:gray; margin-left:25%;margin-top:2%">
                            </div>
                        <div class="modal-footer">
                                        <button type="button" class="btn btn-success">UPLOAD</button>
                        </div>
                    </div>
                </div>
            </div>
</div> 
@endsection