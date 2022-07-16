@extends(layouts.admin)


@section('title','New Product')


@section('content')

    <form action="" method="">
        @csrf

        @include('products.partials.form')

        <div class="d-grid gap-2">
            <input type="submit" value="Create" class="btn btn-primary btn-block">
        </div>
    </form>
    
@endsection