<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<x-layout title='Visualizar Loja'>
    <div class="container mt-5 pt-5">
        <h3 class="mt-5">Famosos no MyFood</h3>
        <div class="d-grid d-md-block mt-5">
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Ordenar</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Pra retirar</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Entrega Grátis</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Vale-refeição</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Distância</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Entrega Parceira</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Super Restaurantes</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Filtros</button>
            <button class="btn btn-light border border-1 rounded-pill mx-3" type="button">Limpar</button>
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row gap-1">
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                    <div class="cards">
                      <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/lanches_HC15.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                      <div class="card-body">
                        <p class="card-title">Lanches</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                      <div class="cards">
                        <img src="https://static.ifood-static.com.br/image/upload/t_low/discoveries/pizzas_KxCO.png?imwidth=96" class="card-img-top" alt="Imagem 1">
                        <div class="card-body">
                          <p class="card-title">Pizza</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-1 col-md-6 p-5 m-5">
                      <div class="cards">
                        <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/bagcupones1_eqF1.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                        <div class="card-body">
                          <p class="card-title">Promoções</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-1 col-md-6 p-5 m-5">
                      <div class="cards">
                        <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/pratofeito_cjw1.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                        <div class="card-body">
                          <p class="card-title">Prato Feito</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-1 col-md-6 p-5 m-5">
                      <div class="cards">
                        <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/brasileira_1XfT.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                        <div class="card-body">
                          <p class="card-title">Brasileira</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-1 col-md-6 p-5 m-5">
                      <div class="cards">
                        <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/vegetariana_XGvO.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                        <div class="card-body">
                          <p class="card-title">Vegetariana</p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
      
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                    <div class="cards">
                      <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/japonesa_FP14.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                      <div class="card-body">
                        <p class="card-title">Japonesa</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                    <div class="cards">
                      <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/acai_WTXp.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                      <div class="card-body">
                        <p class="card-title">Açaí</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                    <div class="cards">
                      <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/arabe_8LSW.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                      <div class="card-body">
                        <p class="card-title">Árabe</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                    <div class="cards">
                      <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/italiana_Y4je.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                      <div class="card-body">
                        <p class="card-title">Italiana</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                    <div class="cards">
                      <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/docesebolos_RfHb.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                      <div class="card-body">
                        <p class="card-title">Doces & Bolos</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-6 p-5 m-5">
                    <div class="cards">
                      <img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/pastel2_qeWo.png?imwidth=128" class="card-img-top" alt="Imagem 1">
                      <div class="card-body">
                        <p class="card-title">Pastel</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>

        <div class="row row-cols-3 g-3">
        @foreach ($lojas as $loja)
                <div class="col">
                    <a href="{{ route('lojas.show', $loja->id)}}" class="text-decoration-none">
                        <div class="card mb-3 border-0 bg-white rounded shadow" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $loja->imagem }}" alt="{{ $loja->nome }}" class="img-fluid rounded-start"/>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-decoration-none">{{ $loja->nome }}</h5>
                                        <p class="card-text">
                                            {{ $loja->categoria }}
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted"></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        @endforeach
        </div>
    </div>

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

</x-layout>