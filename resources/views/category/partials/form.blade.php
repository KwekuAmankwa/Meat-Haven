

<div class="form-group mb-3">
    <label for="name">Category Name</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="">
</div>

@if ($errors->any())
        <div class="mb-3">
            <ul class="list-group">
                @foreach ($errors->all() as $error )
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif