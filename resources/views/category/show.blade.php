@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
      <input type="text" class="form-control" placeholder="SEARCH" style="width: 250px; border-radius: 10px;">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#item1">CLASSIC CARS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#item2">MORTORCYCLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#item3">PLANES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#item4">SHIPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#item5">TRAINS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#item6">TRUCKS&BUSES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#item7">VINTAGE CARS</a>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-8">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link " href="/show/scale">SCALES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/show/vendor">VENDORS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/show/productLine">PRODUCTLINE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/show/pre_order" tabindex="-1">PRE-ORDER</a>
        </li>
      </ul>
      <br>
      <div id="total">
        <div id="item1">
          <h1>CLASSIC CARS</h1>
          <div class="card-columns">
              @foreach($details as $detail)
              @if($detail->productLine == "Classic Cars")
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
          <h1>MORTORCYCLES</h1>
          <div class="card-columns">
              @foreach($details as $detail)
              @if($detail->productLine == "Motorcycles")
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
          <h3>PLANES</h3>
          <div class="card-columns">
              @foreach($details as $detail)
              @if($detail->productLine == "Planes")
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
          <h3>SHIPS</h3>
          <div class="card-columns">
            @foreach($details as $detail)
                    @if($detail->productLine == "Ships")
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
          <h3>TRAINS</h3>
          <div class="card-columns">
              @foreach($details as $detail)
              @if($detail->productLine == "Trains")
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
          <h3>TRUCKS&BUSES</h3>
          <div class="card-columns">
            @foreach($details as $detail)
                    @if($detail->productLine == "Trucks and Buses")
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
          <h3>VINTAGE CARS</h3>
          <div class="card-columns">
              @foreach($details as $detail)
              @if($detail->productLine == "Vintage Cars")
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