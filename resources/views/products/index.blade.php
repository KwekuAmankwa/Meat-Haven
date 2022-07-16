@extends('layouts.admin')

@section('title', 'Products')

@section('content')

    @each('products.partials.products', $products, 'product')

@endsection