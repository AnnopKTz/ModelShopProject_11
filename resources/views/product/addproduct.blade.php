@extends('layouts.app')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="addcus">INFORMMATION</h5>
                <a href="/products"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
        </div>
        <form action="/products/storeProduct" method="post">
            <div class="modal-body">
                <table class="table">
                    <tbody>
                            {{csrf_field()}}
                            <tr>
                                <th scope="col">ProductCode</th>
                                <th scope="col"><input type="text" class="form-control" name="productCode"  placeholder="ProductCode"></th>
                            </tr>
                            <tr>
                                <th scope="col">ProductName</th>
                                <th scope="col"><input type="text" class="form-control" name="productName" placeholder="ProductName"></th>
                            </tr>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col"><input type="text" class="form-control" name="productLine" placeholder="Category"></th>
                            </tr>
                            <tr>
                                    <th scope="col">Scale</th>
                                    <th scope="col"><input type="text" class="form-control" name="productScale" placeholder="Scale"></th>
                                </tr>
                            <tr>
                                <th scope="col">Vender</th>
                                <th scope="col"><input type="text" class="form-control" name="productVendor" placeholder="Vender"></th>
                            </tr>
                            <tr>
                                <th scope="col">Description</th>
                                <th scope="col"><input type="text" class="form-control" name="productDescription" placeholder="Description"></th>
                            </tr>
                            <tr>
                                    <th scope="col">Quantity</th>
                                    <th scope="col"><input type="text" class="form-control" name="quantityInStock" placeholder="Quantity"></th>
                                </tr>
                            <tr>
                                <th scope="col">BuyPrice</th>
                                <th scope="col"><input type="text" class="form-control" name="buyPrice" placeholder="BuyPrice"></th>
                            </tr>
                            <tr>
                                <th scope="col">MSRP</th>
                                <th scope="col"><input type="text" class="form-control" name="MSRP" placeholder="MSRP"></th>
                            </tr>
                            <tr>
                                <th scope="col">PRE-ORDER</th>
                                <th scope="col"> <input type="checkbox" class="btn btn-warning" name="editStatus" value="4">PRE-ORDER</button></th>
                            </tr>
                        
                    </tbody>
                </table> 
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-exam-modal-lg">INSERT IMAGES</button>
                <div class="modal fade bd-exam-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div style="width: 400px; height: 400px; background-color:gray; margin-left:25%;margin-top:2%"></div>
                            <div class="modal-footer">
                                        <button type="button" class="btn btn-success">UPLOAD</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection