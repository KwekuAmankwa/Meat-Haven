{{-- 
<h3><a href="{{ route('category.show',['category'=> $category->id]) }}">{{ $category->name }}</a></h3> --}}

<div class="d-flex">

    <div class="p-2 flex-grow-1">
        <h4>{{ $category->name }}</h4>
    </div>
    
    <div class="p-2">
        <a href="#" class="btn btn-primary">Edit</a>
    </div>
    <div class="p-2">
        <form class="d-inline" action="" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete!" class="btn btn-primary">
        </form>
    </div>
</div>