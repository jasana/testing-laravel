@extends('master')

@section('content')

	<h1>Products</h1>

	<a href="/products/create">Add new product</a>

	<h2>What's hot right now</h2>

	@foreach($mostPopularProducts as $product)
		<p>{{ $product }}</p>
	@endforeach

	<h2>Latest products</h2>

	@foreach($products as $product)
		<h4><a href="/products/{{ $product->id }}"> {{  $product->name }}</a></h4>
	@endforeach


@endsection
