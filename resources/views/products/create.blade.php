@extends('master')

@section('content')

<h1>Add new product</h1>

<form action="/products/store" method="post">

	{!! csrf_field() !!}

	<div>
		<label for="name">Name: </label>
		<input type="text" value="{{ old('name') }}" id="name" name="name" placeholder="Smart Watch">
		@if($errors->first('name'))
			<p>{{ $errors->first('name') }}</p>
		@endif
	</div>
	<div>
		<label for="description">Description: </label>
		<textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
		@if($errors->first('description'))
			<p>{{ $errors->first('description') }}</p>
		@endif
	</div>
	<div>
		<label for="price">Price: $</label>
		<input type="number" step=".01" value="{{ old('price') }}" name="price" id="price">
		@if($errors->first('price'))
			<p>{{ $errors->first('price') }}</p>
		@endif
	</div>
	<div>
		<label for="stock">Stock: </label>
		<input type="number" value="{{ old('stock') }}" name="stock" id="stock">
		@if($errors->first('stock'))
			<p>{{ $errors->first('stock') }}</p>
		@endif
	</div>
	<input type="submit" value="Add new product">
</form>
@endsection