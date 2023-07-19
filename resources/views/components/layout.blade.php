<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .cards {
          width: 10rem;
    
        }
      </style>
  </head>
<body>
    {{$slot}}
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
          <div class="container-fluid" >
            <img src="../image/myFood.png" width="70px" alt="myFood" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" 
            aria-controls="navbarTogglerdDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/estabelecimentos">Restaurantes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Mercados</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Bebidas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Farmácias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shopping</a>
                </li>
                <li>   
                        <div class="row row-cols-1 pl-5">
                          <div class="col-lg-1 mt-1">
                            <img src="../image/lupa.png" alt="lupa" width="25px">
                          </div>
                          <div class="col-lg-10 ml-3">
                            <input class="form-control" type="text" placeholder="Busque por item ou loja">
                          </div>
                        </div>
                </li>
              </ul>
            </div>
            <div class="navbar_register">
              <a href="login" class="mx-4 text-decoration-none" style="color: red;">criarconta</a>
              <a href="login"><button type="button" class="btn btn-danger">Entrar</button></a>
            </div>
          </div>
        </nav> 
    </div>
          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>