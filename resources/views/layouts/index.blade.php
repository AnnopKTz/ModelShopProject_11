<!DOCTYPE html>
<html lang="en">

<head>
    <title>ModelShop.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            position: relative;
            margin-top: 5%;
        }
        ul.nav-pills {
            top: 20%;
            left: 5%;
            position: fixed;
        }
        div.col-8 div {
            height: auto;
            color: gray;
        }
        table.table {
            color: grey;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#F8F9F9 ;">
        <a class="navbar-brand" href="/">
            <img src="image/002.png" width="30" height="30" class="d-inline-block align-top" alt="">
            ModelShops.com
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse -flex justify-content-end" id="navbarTogglerDemo02">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">ORDERS</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" >ORDERS</a>
                        <a class="dropdown-item" >PREORDERS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >PAYMENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >CUSTOMERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >EMPLOYESS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">LOGIN</a>
                </li>

            </ul>

        </div>
    </nav>
    <div id="page-content-wrapper">
        <div class ="contrainer-fluid">
            @if(Session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{Session()->get('success')}}
            </div>
            @endif
            @if(Session()->has('warning'))
            <div class="alert alert-warning" role="alert">
                {{Session()->get('warning')}}
            </div>
            @endif
            @if(Session()->has('danger'))
            <div class="alert alert-danger" role="alert">
                {{Session()->get('danger')}}
            </div>
            @endif
            @yield('body')
        </div>
    </div>
</body>

</html>