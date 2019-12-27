@extends('layouts.app')
@section('content')
<div class="Employees">
        <div style="margin-left: 80%; display:flex">
            <a href="/registerEmp"><button type="button" class="btn btn-success" style="margin-left:20%">ADD</button></a>
        </div>
        <h1>PRESIDENT</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">EmployeeID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Extension</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jobtitle</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
            @foreach ($employees as $employee)
            @if($employee->jobTitle==="President")
                <tr>
                    <th scope="row">{{$employee->employeeNumber}}</th>
                    <td>{{$employee->firstName}}</td>
                    <td>{{$employee->lastName}}</td>
                    <td>{{$employee->extension}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->jobTitle}}</td>
                    <td>
                    @if(Auth::user()->role == '1')
                    <a href="/employees/updateEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a href="/customers/deleteEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-danger" onclick="return confirm('Do you want to DELETE {{$employee->employeeNumber}} ? ')" >DELETE</button></a>
                    {{-- @else
                    <a><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a><button type="button" class="btn btn-danger">DELETE</button></a> --}}
                    @endif
                    </td>
                </tr>
            @endif  
            @endforeach
        </tbody>
    </table>
    <h1>VP</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">EmployeeID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Extension</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jobtitle</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
            @foreach ($employees as $employee)
            @if(strpos(($employee->jobTitle),"VP") !== false)
                <tr>
                    <th scope="row">{{$employee->employeeNumber}}</th>
                    <td>{{$employee->firstName}}</td>
                    <td>{{$employee->lastName}}</td>
                    <td>{{$employee->extension}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->jobTitle}}</td>
                    <td>
                    @if(Auth::user()->role == '1')
                    <a href="/employees/updateEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a href="/customers/deleteEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-danger" onclick="return confirm('Do you want to DELETE {{$employee->employeeNumber}} ? ')" >DELETE</button></a>
                    {{-- @else
                    <a><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a><button type="button" class="btn btn-danger">DELETE</button></a> --}}
                    @endif
                    </td>
                </tr>
            @endif  
            @endforeach
        </tbody>
    </table>
    <h1>SALES MANAGER</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">EmployeeID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Extension</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jobtitle</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
            @foreach ($employees as $employee)
            @if(strpos(($employee->jobTitle),"Manager") !== false)
                <tr>
                    <th scope="row">{{$employee->employeeNumber}}</th>
                    <td>{{$employee->firstName}}</td>
                    <td>{{$employee->lastName}}</td>
                    <td>{{$employee->extension}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->jobTitle}}</td>
                    <td>   
                    @if(Auth::user()->role == '1'||Auth::user()->role == '2'||Auth::user()->role == '4')
                    <a href="/employees/updateEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a href="/customers/deleteEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-danger" onclick="return confirm('Do you want to DELETE {{$employee->employeeNumber}} ? ')" >DELETE</button></a>
                    {{-- @else
                    <a><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a><button type="button" class="btn btn-danger">DELETE</button></a> --}}
                    @endif
                    </td>
                </tr>
            @endif  
            @endforeach
        </tbody>
    </table>
    <h1>SALES REP</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">EmployeeID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Extension</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jobtitle</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
            @foreach ($employees as $employee)
            @if(strpos(($employee->jobTitle),"Rep") !== false)
                <tr>
                    <th scope="row">{{$employee->employeeNumber}}</th>
                    <td>{{$employee->firstName}}</td>
                    <td>{{$employee->lastName}}</td>
                    <td>{{$employee->extension}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->jobTitle}}</td>
                    <td>   
                    @if(Auth::user()->role != '3')
                    <a href="/employees/updateEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a href="/customers/deleteEmployee/{{$employee->employeeNumber}}"><button type="button" class="btn btn-danger" onclick="return confirm('Do you want to DELETE {{$employee->employeeNumber}} ? ')" >DELETE</button></a>
                    @else
                    <a><button type="button" class="btn btn-success">UPDATE</button></a>
                    <a><button type="button" class="btn btn-danger">DELETE</button></a>
                    @endif
                    </td>
                </tr>
            @endif  
            @endforeach
        </tbody>
    </table>

</div>
@endsection