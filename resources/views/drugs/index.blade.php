@extends('layouts.manage')

@section('content')
<div class="container">
    <div id="main" " class="row text-center">
    	@foreach($drugs as $drug)
        <div style="margin-top: 40px" class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="/cardon/img/fud-logo.jpeg" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $drug->name }}</h4>
              <p class="card-text">{{$drug->description}}</p>
              <p>{{ $drug->expire_on }}</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Cost Per Pack : ${{ $drug->cost_pack }}</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection



