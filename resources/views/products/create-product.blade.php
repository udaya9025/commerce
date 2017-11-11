@extends('layouts.app')


	@section('content')

		<div class="container" style="width:50%;background-color: #d0f78c">
			
				
				<h3>Add Product:</h3>	
				{{ Form::open(['url'=> 'add-product','files'=>true]) }}
				<div class="col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">

					<label for="producttitle">Product Title:</label><br>
					<input type="text" name="producttitle" id="producttitle" class="form-control" required>
					<span class="text-danger">{{ $errors->first('producttitle') }}</span>
					</div>

					<div class="form-group">

					<label for="sku">SKU:</label><br>
					<input type="text" name="sku" id="sku" class="form-control" required>
					<span class="text-danger">{{ $errors->first('sku') }}</span>
					</div>

					<div class="form-group">

					<label for="category">Category:</label><br>
					<input type="text" name="category" id="category" class="form-control" required>
					<span class="text-danger">{{ $errors->first('category') }}</span>
					</div>

					<div class="form-group">

					<label for="brand">Brand:</label><br>
					<input type="text" name="brand" id="brand" class="form-control" required>
					<span class="text-danger">{{ $errors->first('brand') }}</span>
					</div>

					<div class="form-group">

					<label for="mrp">MRP:</label><br>
					<input type="text" name="mrp" id="mrp" class="form-control" required>
					<span class="text-danger">{{ $errors->first('mrp') }}</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 col-md-6">
					<div class="form-group">

					<label for="offer">Offer Price:</label><br>
					<input type="text" name="offer" id="offer" class="form-control" required>
					<span class="text-danger">{{ $errors->first('offer') }}</span>
					</div>

					<div class="form-group">

					<label for="quantity">Quantity:</label><br>
					<input type="number" name="quantity" id="quantity" class="form-control" required>
					<span class="text-danger">{{ $errors->first('quantity') }}</span>
					</div>

					<div class="form-group">

					<label for="url">Affiliate URL:</label><br>
					<input type="text" name="url" id="url" class="form-control" required>
					<span class="text-danger">{{ $errors->first('url') }}</span>
					</div>

					<div class="form-group">

					<label for="description">Description:</label><br>
					<textarea name="description" id="description" class="form-control"></textarea>
					<span class="text-danger">{{ $errors->first('description') }}</span>
					</div>

					<div class="form-group">

					<label for="image">Upload Image:</label><br>
					<input type="file" name="image" id="image" class="form-control" >
					<span class="text-danger">{{ $errors->first('image') }}</span>
					</div>

					<div class="form-group">

				</div>	
					<input type="submit"  class="form-control btn btn-primary" required>
					
					</div>

				{{ Form::close() }}
				
		</div>

	@endsection