@extends('layouts.app')

	@section('content')

			<div class="conatiner" style="width:100%;background-color: #fff;margin-top:6%">
				
				<div class="col-sm-5 col-md-5 col-xl-5">
					<div style="padding-left: 4%">	
					<img src="{{ $details->image }}" width="350" height="350"><br>
					
					
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-xl-4">
				<div>
				<h4>{{ $details->producttitle }}</h4>
				<h5>Category:<a href="#"> {{ $details->category }}</a></h5>
				<h5>Brand:<a href="#">{{ $details->brand }}</a></h5>
				<h5>MRP:&#x20b9;{{ $details->mrp }}/-</h5>
				<h5>Offer Price:&#x20b9;{{ $details->offer }}/-</h5>
				<h5>Heighlights:</h5>

				@foreach(explode(',', $details->description) as $info)
    {{ $info }}<br>
@endforeach
				<!-- <p>{{ $details->description }}</p> -->
				<a href="{{ $details->url }}" target="_blank" style="padding-right: 50px"><button class="btn btn-primary">Buy</button></a><a href="{{ $details->url }}" target="_blank"><button class="btn btn-warning">Add to Wishlist</button></a>
				</div>
				</div>

				<div class="col-sm-3 col-md-3 col-xl-3">
					
				<h4>{{ $details->description }}</h4>
				</div>

			</div>
	@endsection