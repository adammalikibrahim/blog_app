<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/style/style.css')}}">
</head>
<body>
    <nav class="navbar ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">𝘽𝙡𝙤𝙜𝘾𝙖𝙠</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <main class="py-4">
        @yield('content')
    </main>

      <script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
