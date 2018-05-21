@extends('layouts.plane')

@section('content')
<div class="container">
  <div  style="margin-top:80px " class="panel">
  <div style="border: 1px solid grey; background: #212121; color:#fafafa; " class="card-title">
    <h2 >{{ $drug->name }}</h2>
  </div>
  <div class="card-body">
    <div class="row">
     <div class="col-md-3">
    <img class="card-img-top" src="/cardon/img/fud-logo.jpeg " >
  </div>
  <div class="col-md-6">
    <div class="row">
      <div style="border-left: 1px solid grey;" class="col-md-8">
      	<p>Quantity in Pack: <span><strong>{{ $drug->qtypack }}</strong></span></p>
      	<hr>
      	<p>Produce By : <span><strong>{{ $drug->manufacturer }}</strong></span></p>
      	<hr>
      	<p>Cost Per Carton: <span><strong>{{ $drug->cost_carton }}</strong></span></p>
      	<hr>
      	<p>Quantity in Carton: <span> <strong>{{ $drug->qtycarton }}</strong></span></p>
      	<hr>
      	<p>Destination: <span><strong>{{ $drug->destination }}</strong></span></p>
     
    </div>
    <div style="border-left: 1px solid grey;  " class="col-md-4">
      	<p style="margin-bottom:100px; margin-top: 10px">Date Manufactured: <span><strong>{{ $drug->produce_at }}</strong></span></p>

       <p>Expiring Date: <br> <span> <strong>{{ $drug->expire_on }}</strong></span></p>
       
    </div>
    </div>
    
  </div>
  <div style="background: #e0e0e0" class="col-md-3">
  	<head style="margin-bottom: 40px "><h4><strong>Drug Description</strong></h4></head>
    <p style="margin-top: 30px">{{ $drug->description }}</p>
  </div>
  </div>
  </div>
  <div class="card-footer">
    <a href="#" class="btn btn-primary">Cost Per Pack : ${{ $drug->cost_pack }}</a>
  </div>
  
 
 </div>

</div>
@endsection
