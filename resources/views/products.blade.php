@extends('master')

@section('content')

	<h1>Products</h1>

	<h2>What's hot right now</h2>

	@foreach($mostPopularProducts as $product)
		<p>{{ $product }}</p>
	@endforeach

	<h2>Latest products</h2>

	@foreach($products as $product)
		<p>{{ $product['name'] }} at {{ $product['price'] }} each</p>
	@endforeach


@endsection
