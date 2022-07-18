@extends('layouts.admin')

@section('title', 'Categories')

@section('content')

    <div class="col-sm-8" style="margin: 0 auto;">
        <div class="container mb-3">
            <form action="{{ route('category.store') }}" method="POST">
                
                @csrf
    
                @include('category.partials.form')
    
                <div class="d-grid gap-2">
                    <input type="submit" value="Create" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    
        <div class="container mt-3">
            @each('category.partials.category', $category, 'category')
        </div>
    </div>
    
@endsection




{{-- <div class="mb-3">
    <a href="#" class="btn btn-primary">Edit</a>
    <form class="d-inline" action="" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete!" class="btn btn-primary">
    </form>
</div> --}}