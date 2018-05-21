@extends('layouts.plane')

@section('content')
<div class="container">
	
  <div  style="margin-top:80px " class="panel">
  <div style="border: 1px solid grey; background: #212121; color:#fafafa; " class="card-title">
    
    <div class="row">
    <h2 class="col-md-11" >{{strtoupper($drug->name)}}</h2>
    <a href="#myModal" style="margin-top: 5px" role="button"  class="col-md-1 " data-toggle="modal"><button class="btn btn-default"><strong>Availability</strong></button></a>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                
                <div class="modal-title card-img-top"  ><img style="margin-left:150px;" id="logo" src="/uploads/images/{{ $drug->image }}" width="100" height="50" alt="Your Logo">
                </div>
            </div><!-- end modal-header -->
             <div class="modal-body">
                 <div style="color: black" class="card ">
                    
                    <div class="card-header"><h3>Number of Drugs in Store</h3></div>
                    <div class="card-body">
                      <h2>{{ $drug->in_store }}</h2>
                    </div>
                   <div class="card-footer" style="height: 60px">
                            
                        <button style="" data-dismiss="modal" class="btn btn-default pull-left">close</button>
                        

                        	
                         {!! Form::close() !!}
                        </div>
                </div><!--ENDPANEL-->
            </div><!--modal-body-->
          </div><!--endmodal-content--> 
        </div><!--enddialog-->
     </div><!--modal fade-->     
    	
    </div>
    
  </div>
  <div class="card-body">
    <div class="row">
     <div class="col-md-3">
    <img class="card-img-top" src="/uploads/images/{{ $drug->image }}" alt="drug image">
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
      	<p style="margin-bottom:40px; margin-top: 30px">Date Manufactured: <span><strong>{{ $drug->produce_at }}</strong></span></p>

       <p>Expiring Date: <br> <span> <strong>{{ $drug->expire_on }}</strong></span></p>

       <p> Date Procured: <br> <span> <strong>{{ $drug->updated_at }}</strong></span></p>
       
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
    <a href="{{ route('procure', [ 'id'=>$drug->id]) }}">Procure Drug</a>
  </div>
  
 
 </div>

</div>
@endsection

