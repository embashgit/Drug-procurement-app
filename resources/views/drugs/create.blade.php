@extends('layouts.plane')

@section('content')

<div class="container">

	<div class="row" style=" margin-top: 10%">
	<div class="col-sm-8 col-sm-offset-2">
		 @if (session()->has('success_message'))
	 <hr>
            <div class="alert alert-success">
                {{ Session::get('success_message') }}
            </div>
        @endif

            @if (session()->has('error_message'))
            <hr>

            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
</div>
	
		<div class="panel">
			<div class="panel-header">
				New Drugs
			</div>
			



			{!! Form::open(['route'=>'products.store', 'files'=>'true', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}" >
				
				{!! Form::label('name', 'Name: ', ['class'=>'col-sm-2 col-form-label']) !!}
				
				<div class="col-sm-10 ">
					
					{!! Form::text('name', old('name'), ['class'=>'form-control  '] ) !!}
					
					@if ($errors->has('name'))
				   		<span class="help-block"> {{ $errors->first('name') }}</span>
				    @endif

				</div>
				
			</div>
			
			<div class="form-group row{{ $errors->has('description') ? ' has-error' : '' }}" >
				
				{!! Form::label('description', 'Description: ', ['class'=>'control-label col-md-2']) !!}
				
				<div class="col-md-10">
					
					{!! Form::textarea('description', old('description'), ['class'=>'form-control "']) !!}
					
					@if ($errors->has('description'))
				   		<span class="help-block"> {{ $errors->first('description') }}</span>
				    @endif

				</div>
				
			</div>
			<div class="form-group row {{ $errors->has('price') ? ' has-error' : '' }}" >
				
				{!! Form::label('price', 'Drug Price: ', ['class'=>'control-label col-md-2 ']) !!}
				
				<div class="col-md-10">
					
					{!! Form::text('price', old('price'), ['class'=>'form-control "']) !!}
					
					@if ($errors->has('price'))
				   		<span class="help-block"> {{ $errors->first('price') }}</span>
				    @endif

				</div>
				
			</div>
			

			<div class="form-group row{{ $errors->has('qtycarton') ? ' has-error' : '' }}" >
				
				{!! Form::label('qtycarton', 'Quantity in Carton: ', ['class'=>'control-label col-md-2 ']) !!}
				
				<div class="col-md-10">
					
					{!! Form::text('qtycarton', old('qtycarton'), ['class'=>'form-control "']) !!}
					
					@if ($errors->has('qtycarton'))
				   		<span class="help-block"> {{ $errors->first('qtycarton') }}</span>
				    @endif

				</div>
				
			</div>
			<div class="form-group row{{ $errors->has('manufacturer') ? ' has-error' : '' }}" >
				
				{!! Form::label('manufacturer', 'Manufacturer: ', ['class'=>'control-label col-md-2 ']) !!}
				
				<div class="col-md-10 ">
					
					{!! Form::text('manufacturer', old('manufacturer'), ['class'=>'form-control col-md-10"']) !!}
					
					@if ($errors->has('manufacturer'))
				   		<span class="help-block"> {{ $errors->first('manufacturer') }}</span>
				    @endif

				</div>
				
			</div>
			<div class="form-group row {{ $errors->has('supplier') ? ' has-error' : '' }}" >
				
				{!! Form::label('supplier', 'Supplier: ', ['class'=>'control-label col-md-2']) !!}
				
				<div class="col-md-10 ">
					
					{!! Form::text('supplier', old('supplier'), ['class'=>'form-control col-md-10"']) !!}
					
					@if ($errors->has('supplier'))
				   		<span class="help-block"> {{ $errors->first('supplier') }}</span>
				    @endif

				</div>
				
			</div>
			<div class="form-group row {{ $errors->has('image') ? ' has-error' : '' }}" >
				
				{!! Form::label('image', 'Drug image: ', ['class'=>'control-label col-md-2']) !!}
				
				<div class="col-md-10 ">
					
					{!! Form::file('image', old('image'), ['class'=>'form-control col-md-10"']) !!}
					
					@if ($errors->has('image'))
				   		<span class="help-block"> {{ $errors->first('image') }}</span>
				    @endif

				</div>
				
			</div>
			<div class="form-group row {{ $errors->has('produce_at') ? ' has-error' : '' }}" >
				
				{!! Form::label('produce_at', 'Manufacture Date: ', ['class'=>'control-label col-md-2 ']) !!}
				
				<div class="col-md-10">
					
					{{ Form::input('date', 'produce_at', null, ['class'=>'form-control']) }}
				</div>
				<div style="margin-left: 40%">
				

				{!! Form::submit('Save drug', ['class'=>'btn btn-success'])!!}

				</div>
				
			</div>

			{!! Form::close() !!}
			 @if($errors->any())
          <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif
		</div><!--close-panel-->
	</div>
</div>




@endsection


