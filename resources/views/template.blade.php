<div class="container"> 
        <div class="container mt-5 pt-5 ">
            <img src="{{ $loja->banner }}" alt="{{ $loja->nome }}" class="d-flex justify-content-center" id="image"   width="1256px" height="300px" />
            <div class="row row-cols-2">
              <div class="col-2 mt-4">
                  <img src="{{ $loja->imagem }}" alt="{{ $loja->nome }}" class="rounded-5" width="100px" height="100px"/>
              </div>
              <p class="mt-3 fs-2">{{$loja->nome}}</p>
            </div>
        </div>

        <div class="row row-col mt-4">
          <div class="col-lg-2">
            <img class="" src="../image/lupa.png" alt="lupa" width="25px">
          </div>
          <div class="col-lg-6">
            <input class="form-control" type="text" placeholder="Busque por item ou loja">
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
        <section>
                @yield('conteudo')
        </section>
</div>


