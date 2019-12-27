@extends('layouts.app')
@section('content')
<div  class="modal-header">
        <a href="/employees">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
            </a>
</div>
<div>
    <form action = "/create" method = "post" >
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table class="table">
        <tbody>
                <tr>
                    <th scope="col">FIRSTNAME</th>
                    <th scope="col"><input type="text" name='firstName' class="form-control" id="formGroupExampleInput" placeholder="FirstName"></th>
                    <th scope="col">LASTNAME</th>
                    <th scope="col"><input type="text" name='lastName' class="form-control" id="formGroupExampleInput" placeholder="LastName"></th>
                </tr>
                <tr>
                    <th scope="col">EXTENSION</th>
                    <th scope="col"><input type="text" name='extension' class="form-control" id="formGroupExampleInput" placeholder="Extension"></th>
                    <th scope="col">JOB TITLE</th>
                    <th scope="col"><select name='jobTitle' class="form-control" id="formGroupExampleInput">
                                    @if(Auth::user()->role == '1')
                                    <option value="President">President</option>
                                    <option value="VP Sales">VP Sales</option>
                                    <option value="VP Marketing">VP Marketing</option>
                                    @endif
                                    @if(Auth::user()->role == '1'||Auth::user()->role == '2'||Auth::user()->role == '4')
                                    <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
                                    <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
                                    <option value="Sales Manager (NA)">Sales Manager (NA)</option>
                                    @endif
                                    @if(Auth::user()->role != '3')
                                    <option value="Sales Rep">Sales Rep</option>
                                    @endif
                                    </select>
                    </th>
                </tr>
                <tr>
                    <th scope="col">EMPLOYEE NUMBER</th>
                    <th scope="col"><input type="number" name='employeeNumber' class="form-control" id="formGroupExampleInput" placeholder="employeeNumber"></th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col"><input type="password" name='password' class="form-control" id="formGroupExampleInput" placeholder="password"></th>
                </tr>
                <tr> 
                    <th scope="col">E-MAIL</th>
                    <th scope="col"><input type="email" name='email' class="form-control" id="formGroupExampleInput" placeholder="E-mail"></th>
                </tr>
                <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">{{ __('CONFIRM') }}</button>
                </div>
            
        </tbody>
    </table>
    </form>
</div>

@endsection