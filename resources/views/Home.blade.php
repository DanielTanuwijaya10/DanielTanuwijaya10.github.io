<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<header>

    <div class="container-fluid py-4">
        <h3 class="m-0 text-center text-white">Giant Book Supplier</h3>
        {{-- <p class="m-0 text-center text-white">Giant Book Supplier</p> --}}
    </div>

</header>



<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

    <ul class="nav d-flex flex-column flex-md-row">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/category/1') }}">Fantasy</a></li>
            <li><a class="dropdown-item" href="{{ url('/category/2') }}">Romance</a></li>
            <li><a class="dropdown-item" href="{{ url('/category/3') }}">Education</a></li>
            <li><a class="dropdown-item" href="{{ url('/category/4')}}">Religion</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/publishers') }}">Publisher</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>

    </ul>


    </div>
  </div>
</nav>

{{-- //ini buat overide --}}
@yield('content')


{{-- <div class="container"> --}}
  <footer class="py-3 my-4 border-top">
    <p class="text-center text-white">© Happy Book Store 2022</p>
  </footer>
</div>

</body>
</html>
