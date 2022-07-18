
@extends('layouts.admin')

@section('title', $product->name)

@section('content')
   
   
    <h1>{{ $product->name}}</h1>
    <p>{{ $product->description }}</p>
    <p>Added {{ $product->created_at->diffForHumans() }}</p>

    @if(now()->diffInMinutes($product->created_at) < 5)
    <div class="alert alert-info">New!</div>
    @endif
@endsection