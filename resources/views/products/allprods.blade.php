@extends('layouts.app')

	@section('content')

	<div class="container" style="width:80%;background-color: #fff">
	<div class="col-sm-12">
	
		
			@foreach($products as $product)

				<li style="display:inline;padding-right: 3%;margin-bottom: 3%"><a href="{{ url('product/display/'.$product->sku) }}"><img src="{{ $product->image }}" style="width:200px;height:200px;margin-bottom: 6%"></a></li>

 			 				
 			

 			
			@endforeach
		
		
	</div>
	</div>
	@endsection