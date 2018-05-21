@extends('layouts.manage')

@section('content')
<div class="panel">
<h1>list of all Drugs in store</h1>
 <ol>
 	@foreach($drugs as $drug)

 	<li>{{ $drug->name }} --- <span><i>Manufacture Date:</i> {{ $drug->produce_at }}</span></li>
 	@endforeach
 </ol>	
</div>


@endsection