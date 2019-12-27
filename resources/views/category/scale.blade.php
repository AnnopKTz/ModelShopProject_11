@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-4" id="myScrollspy">
            <input type="text" class="form-control" placeholder="SEARCH" style="width: 250px; border-radius: 10px;">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#item1">1:10</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item2">1:12</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item3">1:18</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item4">1:24</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item5">1:32</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item6">1:50</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item7">1:700</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item8">1:72</a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-9 col-8">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/show/scale">SCALES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/vendor">VENDORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/productLine">PRODUCTLINE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/pre_order">PRE-ORDER</a>
                </li>
            </ul>
            <div id="item1">
                <h1>1:10</h1>
                <div class="card-columns">
                    @foreach($details as $detail)
                    @if($detail->productScale == "1:10")
                    <div class="card border-info mb-3">
                        <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                        <div class="card-body text-info">
                        <h5 class="card-title">Product : {{$detail->productName}}</h5>
                        <p class="card-text">Price : {{$detail->MSRP}}</p>
                        <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>


                <div id="item2">
                    <h1>1:12</h1>
                    <div class="card-columns">
                            @foreach($details as $detail)
                    @if($detail->productScale == "1:12")
                    <div class="card border-info mb-3">
                        <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                        <div class="card-body text-info">
                        <h5 class="card-title">Product : {{$detail->productName}}</h5>
                        <p class="card-text">Price : {{$detail->MSRP}}</p>
                        <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    </div>
                </div>

                <div id="item3">
                    <h3>1:18</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                    @if($detail->productScale == "1:18")
                    <div class="card border-info mb-3">
                        <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                        <div class="card-body text-info">
                        <h5 class="card-title">Product : {{$detail->productName}}</h5>
                        <p class="card-text">Price : {{$detail->MSRP}}</p>
                        <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    </div>
                </div>

                <div id="item4">
                    <h3>1:24</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                    @if($detail->productScale == "1:24")
                    <div class="card border-info mb-3">
                        <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                        <div class="card-body text-info">
                        <h5 class="card-title">Product : {{$detail->productName}}</h5>
                        <p class="card-text">Price : {{$detail->MSRP}}</p>
                        <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    </div>
                </div>

                <div id="item5">
                    <h3>1:32</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                    @if($detail->productScale == "1:32")
                    <div class="card border-info mb-3">
                        <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                        <div class="card-body text-info">
                        <h5 class="card-title">Product : {{$detail->productName}}</h5>
                        <p class="card-text">Price : {{$detail->MSRP}}</p>
                        <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    </div>
                </div>

                <div id="item6">
                    <h3>1:50</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productScale == "1:50")
                            <div class="card border-info mb-3">
                                <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                                <div class="card-body text-info">
                                <h5 class="card-title">Product : {{$detail->productName}}</h5>
                                <p class="card-text">Price : {{$detail->MSRP}}</p>
                                <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                    </div>
                </div>

                <div id="item7">
                    <h3>1:700</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                    @if($detail->productScale == "1:700")
                    <div class="card border-info mb-3">
                        <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                        <div class="card-body text-info">
                        <h5 class="card-title">Product : {{$detail->productName}}</h5>
                        <p class="card-text">Price : {{$detail->MSRP}}</p>
                        <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    </div>
                </div>
                <div id="item8">
                    <h3>1:72</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                    @if($detail->productScale == "1:72")
                    <div class="card border-info mb-3">
                        <img class="card-img-top" src="/image/sadaharu.gif" style="width:200px;">
                        <div class="card-body text-info">
                        <h5 class="card-title">Product : {{$detail->productName}}</h5>
                        <p class="card-text">Price : {{$detail->MSRP}}</p>
                        <p class="card-text"><small class="text-muted">ProductCode : {{$detail->productCode}}</small></p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection