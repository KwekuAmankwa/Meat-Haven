@extends('layouts.admin')

@section('title', 'Products')

@section('content')

    @each('products.partials.product', $products, 'product')


@endsection