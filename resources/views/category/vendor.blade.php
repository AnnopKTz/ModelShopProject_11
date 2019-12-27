@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-4" id="myScrollspy">
            <input type="text" class="form-control" placeholder="SEARCH" style="width: 250px; border-radius: 10px;">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#item1">Autoart Studio Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item2">Carousel DieCast Legends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item3">Classic Metal Creations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item4">Exoto Designs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item5">Gearbox Collectibles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item6">Highway 66 Mini Classics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item7">Min Lin Diecast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item8">Motor City Art Classics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item9">Red Start Diecast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item10">Second Gear Diecast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item11">Studio M Art Models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item12">Unimax Art Galleries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#item13">Welly Diecast Productions</a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-9 col-8">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/show/scale">SCALES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/show/vendor">VENDORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/productLine">PRODUCTLINE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/pre_order" tabindex="-1">PRE-ORDER</a>
                </li>
            </ul>
            <br>
            <div id="total">
                <div id="item1">
                    <h1>Autoart Studio Design</h1>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Autoart Studio Design")
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

                <div id="item2">
                    <h1>Carousel DieCast Legends</h1>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Carousel DieCast Legends")
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
                    <h3>Classic Metal Creations</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Classic Metal Creations")
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
                    <h3>Exoto Designs</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Exoto Designs")
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
                    <h3>Gearbox Collectibles</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Gearbox Collectibles")
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
                    <h3>Highway 66 Mini Classics</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Highway 66 Mini Classics")
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
                    <h3>Min Lin Diecast</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Min Lin Diecast")
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
                    <h3>Motor City Art Classics</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Motor City Art Classics")
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

                <div id="item9">
                    <h3>Red Start Diecast</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Red Start Diecast")
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

                <div id="item10">
                    <h3>Second Gear Diecast</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Second Gear Diecast")
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

                <div id="item11">
                    <h3>Studio M Art Models</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Studio M Art Models")
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

                <div id="item12">
                    <h3>Unimax Art Galleries</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Unimax Art Galleries")
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
                
                <div id="item13">
                    <h3>Welly Diecast Productions</h3>
                    <div class="card-columns">
                            @foreach($details as $detail)
                            @if($detail->productVendor == "Welly Diecast Productions")
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
</div>
@endsection