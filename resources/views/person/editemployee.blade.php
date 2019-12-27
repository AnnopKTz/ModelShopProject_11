@extends('layouts.app')
@section('content')
<div class="modal-content">
<div  class="modal-header">
        <div class="modal-header">
                <h5 class="modal-title" id="customer">EMPLOYEE Number : {{$details[0]->employeeNumber}} </h5>
                <a href="/employees"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            </div>
</div>
<div class="modal-body">
    <div>
    <form action = "/employees/updateEmployee/{{$details[0]->employeeNumber}}" method = "post" >
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <input type = "hidden" name = "employeeNumber" value = "{{$details[0]->employeeNumber}}">
    <table class="table">
        <tbody>
            
                <tr>
                    <th scope="col">FIRSTNAME</th>
                    <th scope="col"><input type="text" value="{{$details[0]->firstName}}" name='firstName' class="form-control" id="formGroupExampleInput" placeholder="{{$details[0]->firstName}}"></th>
                    <th scope="col">LASTNAME</th>
                    <th scope="col"><input type="text" value="{{$details[0]->lastName}}" name='lastName' class="form-control" id="formGroupExampleInput" placeholder="{{$details[0]->lastName}}"></th>
                </tr>
                <tr>
                    <th scope="col">EXTENSION</th>
                    <th scope="col"><input type="text" value="{{$details[0]->extension}}"name='extension' class="form-control" id="formGroupExampleInput" placeholder="{{$details[0]->extension}}"></th>
                    <th scope="col">JOB TITLE</th>
                    <th scope="col"><select name='jobTitle' class="form-control" id="formGroupExampleInput">
                                    
                                    @if(Auth::user()->role == '1')
                                    <option value="President">President</option>
                                    <option value="VP Sales">VP Sales</option>
                                    <option value="VP Marketing">VP Marketing</option>
                                    @endif
                                    @if(Auth::user()->role == '1'||Auth::user()->role == '2')
                                    <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                    <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                    <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                    @endif
                                    @if(Auth::user()->role == '1'||Auth::user()->role == '2'||Auth::user()->role == '4')
                                    <option value="Sales Rep">Sales Rep</option>
                                    @endif
                                    </select>
                    </th>
                </tr>
                <tr>
                    <th scope="col">E-MAIL</th>
                    <th scope="col"><input value="{{$details[0]->email}}" type="email" name='email' class="form-control" id="formGroupExampleInput" placeholder="{{$details[0]->email}}"></th>
                </tr>
            
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">{{ __('CONFIRM') }}</button>
            </div>
        </tbody>

    </table>
    </form>
    </div>
</div>
</div>
@endsection