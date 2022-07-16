<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Meat Haven</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm mb-3">
        <h5 class="my-0 me-md-auto font-weight-normal">Meat Haven</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a href="#" class="p-2 text-dark">Products</a>
            <a href="#" class="p-2 text-dark">Add Products</a>
            <a href="#" class="p-2 text-dark">Categories</a>
            <a href="#" class="p-2 text-dark">Login</a>
        </nav>
    </div>
    <div class="container">
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>