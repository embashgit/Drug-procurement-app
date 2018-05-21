 @extends('layouts.plane')
 @section('content')

<div class="container">

	<div style="margin-top: 80px" class="ROW">
		
    	<div class="card">
    		<div style="border: 1px solid grey; background: #212121; color:#fafafa; " class="card-title"><h1>Procurement</h1> </div>
    		<div class="card-body">
    			<h2 class="pull-left">Drug Description</h2>
    			<hr>
    		<p style="text-align: justify;font-size: 1.5em">{{$drug->description}}</p>	
    		</div>
    	</div>
	</div>
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

    <div class="row clearfix" style="margin-top: 5%">

    	
    	<div class="col-md-12 table-responsive">
    		 {!! Form::model($drug, ['method'=> 'PUT',  'class'=>'form-horizontal form-label-left','route' => ['procure.update', 'id'=>$drug->id]]) !!}
			<table class="table table-bordered table-hover table-sortable" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
						{!! Form::label('name', 'Drug Name: ', ['class'=>'control-label']) !!}
						</th>
						<th class="text-center">
						{!! Form::label('produce_at', 'Date Manufactured: ', ['class'=>'control-label']) !!}
						</th>
						<th class="text-center">
						{!! Form::label('expire_on', 'Expiring: ', ['class'=>'control-label']) !!}
						</th>
						<th class="text-center">
							{!! Form::label('qtypack', 'Quantity in Pack: ', ['class'=>'control-label']) !!}

						</th>
						<th class="text-center">
							{!! Form::label('qtycarton', 'Quantity in carton: ', ['class'=>'control-label']) !!}

						</th>
    					<th class="text-center">
						 {!! Form::label('supplier', 'Supplier: ', ['class'=>'control-label']) !!}
						</th>
        				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
        					{!! Form::label('in_store', 'Drugs in Store: ', ['class'=>'control-label']) !!}
        					
									
									@if ($errors->has('in_store'))
								   		<span class="help-block"> {{ $errors->first('in_store') }}</span>
								    @endif
						</th>
					</tr>
				</thead>
				<tbody>
    				<tr id='addr0' data-id="0" class="hidden">
						<td data-name="name">
						   {!! Form::text('name', null, ['class'=>'form-control']) !!}
									
									@if ($errors->has('name'))
								   		<span class="help-block"> {{ $errors->first('name') }}</span>
								    @endif
						</td>
						<td data-name="produce_at">
						    {!! Form::date('produce_at', null, ['class'=>'form-control']) !!}
									
									@if ($errors->has('produce_at'))
								   		<span class="help-block"> {{ $errors->first('produce_at') }}</span>
								    @endif
						</td>
						<td data-name="expire_on">
						    {!! Form::date('expire_on', null, ['class'=>'form-control']) !!}
									
									@if ($errors->has('expire_on'))
								   		<span class="help-block"> {{ $errors->first('expire_on') }}</span>
								    @endif
						</td>
						<td data-name="qtypack">
						    {!! Form::text('qtypack', null, ['class'=>'form-control']) !!}
									
									@if ($errors->has('qtypack'))
								   		<span class="help-block"> {{ $errors->first('qtypack') }}</span>
								    @endif
						</td>
						<td data-name="qtypack">
						    {!! Form::text('qtycarton', null, ['class'=>'form-control']) !!}
									
									@if ($errors->has('qtycarton'))
								   		<span class="help-block"> {{ $errors->first('qtycarton') }}</span>
								    @endif
						</td>
    					<td data-name="supplier">
						  {!! Form::text('supplier', null, ['class'=>'form-control']) !!}
									
									@if ($errors->has('supplier'))
								   		<span class="help-block"> {{ $errors->first('supplier') }}</span>
								    @endif

						</td>
                        <td data-name="">
                        	 {!! Form::text('in_store', null, ['class'=>'form-control']) !!}
                           
                        </td>
                  
                       

					</tr>
				</tbody>
			</table>
			 <button type="submit" class='btn btn-success '>Procure Now!</button>
             <a href="{{url('/drugs')}}" class='btn btn-default glyphicon glyphicon-remove '>Cancel</a>
			  @if($errors->any())
          <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif
     
			{!! Form::close() !!}

		</div>
	</div>
<hr>
</div>

  @endsection