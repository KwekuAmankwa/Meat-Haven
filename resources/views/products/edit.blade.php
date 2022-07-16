@extends(layouts.admin)


@section('title','Update Product')


@section('content')

    <form action="" method="">
        @csrf

        @method('PUT')

        @include('products.partials.form')

        <div class="d-grid gap-2">
            <input type="submit" value="Update" class="btn btn-primary btn-block">
        </div>
    </form>
    
@endsection