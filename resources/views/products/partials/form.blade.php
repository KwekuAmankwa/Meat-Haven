<div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="">
</div>

{{-- <div class="form-group mb-3">
    <label for="category">Category</label>
    <option value="" id="category">

    </option>
</div> --}}

{{-- <div class="form-group mb-3">
    <label for="price">Price</label>
    <input type="number" id="price" name="price" class="form-control" placeholder="">
</div> --}}

{{-- <div class="form-group mb-3">
    <label for="keys">Keys</label>
    <input type="text" id="keys" name="keys" class="form-control" placeholder="">
</div> --}}

<div class="form-group mb-3">
    <label for="desc">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder=""></textarea>
</div>

@if ($errors->any())
    <div class="mb-3">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group0item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif