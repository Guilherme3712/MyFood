<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Food</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="bg-body-tertiary">

    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid" >
          <img src="image/myFood.png" width="100px" alt="myFood" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" 
          aria-controls="navbarTogglerdDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Entregador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="estabelecimentos">Restaurante e Mercado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Carreiras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">iFood Card</a>
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
    
    <div class="row pt-5">
      <div class="col-12 text-center pt-5 mt-5">
        <h2>Tudo pra facilitar seu dia a dia</h2>
        <h6 style="color: gray;">O que você precisa está aqui. Peça e receba onde estiver.</h6>
      </div>
    </div>

    <div class="text-center">
      <div class="row">
        <div class="col">
          <img src="image/pino-de-localizacao.png" alt="pinmap" width="30px">
            <input class="w-50" type="text" placeholder="Endereço de entrega e número"/>
            <button class="btn btn-danger">Buscar</button>
        </div>
      </div>
    </div>


    <div class="d-flex flex-column flex-md-row align-items-center justify-content-md-center gap-4">
      <a href="estabelecimentos">
        <div class="border-none m-3" id="card-red">
          <img src="image/pexels-valeria-boltneva-1639565-removebg E.png" class="rounded-4" alt="Hamburguer">
        </div>
      </a>
      <div class="border-none m-3" id="card-green">
        <img src="image/pexels-alexas-fotos-6932338-removebg D.png" class="rounded-4" alt="Carrinho de Compras">
      </div>
    </div>
    
  </div>

  <div class="container">
    <div class="container justify-content-center row row-cols-1 row-cols-md-3 g-4 d-flex p-5 mt-3">

      <div class="col">
        <div class="d-flex flex-column align-items-center text-decoration-none border-none" id="gpBebida">
          <figure class="boxBebida rounded-3 pe-4">
            <img id="imgBebida" src="image/licor.png" class="card-img-top ms-4" alt="Bebidas">
          </figure>
          <div class="card-body">
            <h5 class="card-title">Bebidas</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="d-flex flex-column align-items-center text-decoration-none border-none" id="gpMaleta">
          <figure class="boxMaleta rounded-3 pe-4">
            <img id="imgMaleta" src="image/maleta-de-medico.png" class="card-img-top ms-4" alt="Maleta de médico">
          </figure>
          <div class="card-body">
            <h5 class="card-title">Farmácia</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="d-flex flex-column align-items-center text-decoration-none border-none" id="gpTigela">
          <figure class="boxTigela rounded-3 pe-4">
            <img id="imgTigela" src="image/tigela-de-cachorro.png" class="card-img-top ms-4"   alt="igela de cachorro">
          </figure>
          <div class="card-body">
            <h5 class="card-title">Pet Shop</h5>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <hr class-="mb-3">
  </div> 

  <main class="container">
   
    <h2>Os melhores restaurantes</h2>
    <div class="row row-cols-1 row-cols-md-5 g-4 mt-3">
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/Mcdonald.png" class="card-img-top" alt="...">
          </a>  
        </div>
      </div>
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/coco Bambu.png" class="card-img-top" alt="...">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/china.png" class="card-img-top" alt="...">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/habbibs.png" class="card-img-top" alt="...">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/outback.png" class="card-img-top" alt="...">
          </a>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
      <div class="col">
        <div>
          <a href="#">
            <img src="image/landing-banner1.png" class="card-img-top" alt="...">
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="#">
            <img src="image/landing-banner2.png" class="card-img-top" alt="...">
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="#">
            <img src="image/landing-banner3.png" class="card-img-top" alt="...">
          </a>
        </div>
      </div>
    </div>

    <hr class="mt-5">

    <h2>Melhores Mercados</h2>
    <div class="row row-cols-1 row-cols-md-5 g-4">
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/dia.png" class="card-img-top mt-2" alt="...">
          </a>  
        </div>
      </div>
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/big.png" class="card-img-top mt-2 " alt="...">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="border-none">
          <a href="#">
            <img src="image/eataly.png" class="card-img-top mt-2 " alt="...">
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
        <div class="col">
          <div class="border-none ms-auto">              
            <a href="#">
              <img src="image/entregador.png" class="card-img-top" alt="...">
            </a>         
          </div>
        </div>
        <div class="col">
          <div class="border-none me-auto">       
            <a href="#">     
              <img src="image/cadastre.png" class="card-img-top" alt="...">
            </a>  
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="container">
      <div class="row rol-cols-8 mt-5">
        <div class="col">
          <div class="justify-content-center">
            <h2 class="col-4">Você tem fome de quê?</h2>
            <p class="col-6">Descubra como é ser um FoodLover e faça parte da nossa revolução!</p>
            <button class="btn btn-danger rounded-3 p-3 ps-5 pe-5">
                <span>Saiba Mais</span>
            </button>
          </div>
        </div>
        <div class="col">
          <img src="image/pessoas.png" alt="Pessoas">
        </div>
      </div>
    </div>

    <a class="d-flex justify-content-center mt-5" href="#">
      <img src="image/ifood-benefits-desktop.png" alt="Beneficios">
    </a>

  </main>

  <div id="iniciofooter"></div>

  <footer>
    <div class="container p-4 pb-0">
      <div class="row">
        <h2 class="fs-5">Explore por cidades</h2>
        <a href="#" class="text-end text-decoration-none text-danger">Ver todas</a>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0 ">
            <li><a href="#" class="text-decoration-none text-secondary">Belo Horizonte</a></li>   
            <li><a href="#" class="text-decoration-none text-secondary">Brasília</a></li>
            <a href="#"  class="text-decoration-none text-secondary">
              <li><a href="#" class="text-decoration-none text-secondary" >Campinas</a></li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Curitiba</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Goiânia</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Guarulhos</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>João Pessoa</li>
            </a>
            <a href="#" class="text-decoration-none text-secondary">
              <li>Natal</li>
            </a>
            <a href="#" class="text-decoration-none text-secondary">
              <li>Niterói</li>
            </a>
            <a href="#" class="text-decoration-none text-secondary">
              <li>Porto Alegre</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Ribeirão Preto</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Rio de Janeiro</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Salvador</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Santo André</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Santos</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0">
            <a href="#" class="text-decoration-none text-secondary">
              <li>São Bernado do Campo</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>São Caetano do Sul</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>São Paulo</li>
            </a>
          </ul>
        </div>
        <hr class="mb-4 mt-3">
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <h2 class="fs-6 pb-3">iFood</h2>
          <ul class="list-unstyled mb-0">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Site Institucional</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Fale Conosco</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Carreiras</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>iFood Colômbia</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <h2 class="fs-6 pb-3">Descubra</h2>
          <ul class="list-unstyled mb-0 ">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Cadastre seu Restaurante ou Mercado</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>iFood Shop</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>iFood Card</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>blog iFood Empresas</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5 ">
          <h2 class="fs-6 pb-3">Social</h2>
          <a href="#"><img src="images/facebook.png" alt="" width="30px"></a>
          <a href="#"><img src="images/twitter.png" alt="" width="30px"></a>
          <a href="#"><img src="images/youtube.png" alt="" width="30px"></a>
          <a href="#"><img src="images/instagram.png" alt="" width="30px"></a>
        </div>
      </div>
      <hr class="mb-4 mt-3">
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
        <ul class="list-unstyled mb-0 ">
          <a href="#"  class="text-decoration-none text-secondary">
            <li>© Copyright 2021 - iFood - Todos os direitos reservados iFood com Agência de Restaurantes Online S.A.</li>
          </a>
          <a href="#"  class="text-decoration-none text-secondary">
            <li>iFood Shop</li>
          </a>
          <a href="#"  class="text-decoration-none text-secondary">
            <li>iFood Card</li>
          </a>
          <a href="#"  class="text-decoration-none text-secondary">
            <li>blog iFood Empresas</li>
          </a>
        </ul>
      </div>
    </div>
  </footer>
    
  <script src="js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>