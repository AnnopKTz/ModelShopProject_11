@extends('layouts.indexapp')
@section('body')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customer">customerNumber : {{$details[0]->customerNumber}} </h5>
                <a href="/customers"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            </div>
            <div class="modal-body">
                <div>
                    <form action="/customers/editCustomer/{{$details[0]->customerNumber}}" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <input type = "hidden" name = "customerNumber" value = "{{$details[0]->customerNumber}}">
                    <table class="table">
                        <tbody>
                                <tr>
                                    <th scope="col">CustomerNumber</th>
                                    <th scope="col"><div>{{$details[0]->customerNumber}}</div></th>
                                </tr>
                                <tr>
                                        <th scope="col">TotalPoint</th>
                                        <th scope="col"><div>{{$details[0]->totalPoint}}</div></th>
                                </tr>
                                <tr>
                                    <th scope="col">CustomerName</th>
                                    <th scope="col"><input type="text" class="form-control" name="customerName" placeholder="{{$details[0]->customerName}}" value="{{$details[0]->customerName}}"></th>
                                </tr>
                                <tr>
                                    <th scope="col">ContactFirstName</th>
                                    <th scope="col"><input type="text" class="form-control" name="contractFirstname" placeholder="{{$details[0]->contractFirstname}}" value="{{$details[0]->contractFirstname}}"></th>
                                </tr>
                                <tr>
                                    <th scope="col">ContactLastName</th>
                                    <th scope="col"><input type="text" class="form-control" name="contractLastname" placeholder="{{$details[0]->contractLastname}}" value="{{$details[0]->contractLastname}}"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Phone</th>
                                    <th scope="col"><input type="text" class="form-control" name="phone" placeholder="{{$details[0]->phone}}" value="{{$details[0]->phone}}"></th>
                                </tr>
                                <tr>
                                    <th scope="col">CreditLimit</th>
                                    <th scope="col"><input type="text" class="form-control" name="creditLimit" placeholder="{{$details[0]->creditLimit}}" value="{{$details[0]->creditLimit}}"></th>
                                </tr>
                                <tr>
                                        <th scope="col">SaleRepEmployeeNumber</th>
                                       <th scope="col"><div>{{$details[0]->salesRepEmployeeNumber}}</div></th>
                                   </tr>
                            
                        </tbody>
                    </table>
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-success">CONFIRM</button>
                    </div>
                    </form>
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
                            <tbody>
                                <form>
                                    <tr>
                                        <th scope="col">AddressLine</th>
                                        <th scope="col">City</th>
                                        <th scope="col">State</th>
                                        <th scope="col">PostalCode</th>
                                        <th scope="col">Country</th>
                                        <th scope="col"></th>
                                    </tr>
                                </form>
                                    <form action="/customers/addAddresses/{{$details[0]->customerNumber}}" method="post">
                                    <tr>
                                        {{csrf_field()}}
                                        <th scope="col"><input type="text" class="form-control" name="addressLine" placeholder="AddressLine"></th>
                                        <th scope="col"><input type="text" class="form-control" name="city" placeholder="City"></th>
                                        <th scope="col"><input type="text" class="form-control" name="state" placeholder="State"></th>
                                        <th scope="col"><input type="text" class="form-control" name="potalCode" placeholder="PostalCode"></th>
                                        <th scope="col"><input type="text" class="form-control" name="country" placeholder="Country"></th>
                                        <th scope="col"><button type="submit" class="btn btn-primary">ADD</button></th>
                                    </tr>
                                    </form>
                                    
                                        @foreach ($addresses as $address)
                                        <form  action="/customers/editAddress/{{$address->addressesID}}" method="post">
                                        <tr>
                                                {{csrf_field()}}
                                            <th scope="col"><input type="text" class="form-control" name="addressLine" placeholder="{{$address->addressLine}}" value="{{$address->addressLine}}"></th>
                                            <th scope="col"><input type="text" class="form-control" name="city" placeholder="{{$address->city}}" value="{{$address->city}}"></th>
                                            <th scope="col"><input type="text" class="form-control" name="state" placeholder="{{$address->state}}" value="{{$address->state}}"></th>
                                            <th scope="col"><input type="text" class="form-control" name="potalCode" placeholder="{{$address->postalCode}}" value="{{$address->postalCode}}"></th>
                                            <th scope="col"><input type="text" class="form-control" name="country" placeholder="{{$address->country}}" value="{{$address->country}}"></th>
                                            <th scope="col">
                                                <button type="submit" class="btn btn-warning">EDIT</button>
                                                @if(count($addresses)>1)
                                            <a href="/customers/deleteAddress/{{$address->addressesID}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                                @endif
                                            </th>
                                        </form>
                                        </tr>                                               
                                        @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
       
@endsection