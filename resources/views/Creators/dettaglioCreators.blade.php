<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('servizi')}}">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chi.siamo')}}">Chi Siamo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <header>
      <h1 class="text-center my-5">Dettaglio Creator</h1>
    </header>

    <main>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <img src="/avatar.png" alt="Foto del creator" class="img-fluid">
          </div>
          <div class="col-12 col-md-6">
            <p class="h2 text-center">{{$creator['name']}} {{$creator['surname']}}</p>
            <p class="h4 text-center">{{$creator['description']}}</p>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aspernatur vel delectus sequi! Voluptate facilis vero animi. Obcaecati voluptate perspiciatis possimus veniam provident at totam libero, aliquid officia autem maxime.</p>
          </div>
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>