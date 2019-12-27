@extends('layouts.indexapp')
@section('body')
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
                <a href="/customers"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            </div>
            <div class="modal-body">
                <div>
                    <table class="table">
                            <form action="/customers/storeCustomer/{{Auth::user()->name}}" method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <input type = "hidden" name = "salesRepEmployeeNumber" value = "{{Auth::user()->name}}">
                            
                                <table class="table">
                                    <tbody>
                                            <tr>
                                                <th scope="col">CustomerName</th>
                                                <th scope="col"><input type="text" class="form-control" name="customerName" placeholder="CustomerName"></th>
                                            </tr>
                                            <tr>
                                                <th scope="col">ContactFirstName</th>
                                                <th scope="col"><input type="text" class="form-control" name="contractFirstname" placeholder="ContactFirstName" ></th>
                                            </tr>
                                            <tr>
                                                <th scope="col">ContactLastName</th>
                                                <th scope="col"><input type="text" class="form-control" name="contractLastname" placeholder="ContactLastName" ></th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Phone</th>
                                                <th scope="col"><input type="text" class="form-control" name="phone" placeholder="Phone" ></th>
                                            </tr>
                                            <tr>
                                                <th scope="col">CreditLimit</th>
                                                <th scope="col"><input type="text" class="form-control" name="creditLimit" placeholder="CreditLimit" ></th>
                                            </tr>
                                        
                                    </tbody>
                                </table>
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">CONFIRM</button>
                                </div>
                        </form>
                </div>
            </div>
        </div>

        {{-- add from add adddress + confirm button for address--}}
@endsection