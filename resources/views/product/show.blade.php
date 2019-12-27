@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6" id="cat">
        <div class="btn-group-vertical" style="position: sticky;">
            <button type="button" class="btn" data-toggle="collapse" data-target="#CA"><i>CLASSIC CARS</i></button>
            <button type="button" class="btn" data-toggle="collapse" data-target="#MT"><i>MOTORCYCLES</i></button>
            <button type="button" class="btn" data-toggle="collapse" data-target="#PL"><i>PLANES</i></button>
            <button type="button" class="btn" data-toggle="collapse" data-target="#SH"><i>SHIPS</i></button>
            <button type="button" class="btn" data-toggle="collapse" data-target="#TR"><i>TRAINS</i></button>
            <button type="button" class="btn" data-toggle="collapse" data-target="#TB"><i>TRUCKS & BUSES</i></button>
            <button type="button" class="btn" data-toggle="collapse" data-target="#VC"><i>VINTAGE CARS</i></button>
        </div>
    </div>
    <div class="col-md-6 " >
        <div id="cards" >
                <div class="card" style="margin-top:15%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
                      <div class="card" style="margin-top:15%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
                      <div class="card" style="margin-top:15%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
        </div>
        <div id="cards" >
                <div class="card" style="margin-top:5%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
                      <div class="card" style="margin-top:5%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
                      <div class="card" style="margin-top:5%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
        </div>
        <div id="cards" >
                <div class="card" style="margin-top:5%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
                      <div class="card" style="margin-top:5%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
                      <div class="card" style="margin-top:5%;">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h4><b>John Doe</b></h4>
                          <p>Architect & Engineer</p>
                        </div>
                      </div>
        </div>
          
    </div>
  </div>
@endsection
