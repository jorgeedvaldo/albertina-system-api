@extends('layouts.app')
@section('nav-home', 'off')

@section('content')
<section class="home-slider js-fullheight owl-carousel bg-white">
    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
      <div class="container-fluid p-0">
        <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text mt-md-5">
                    <h1 class="mb-4">Comida Crocante <br> e Natural</h1>
                  <p>A Albertina & Filhos traz um cardápio elaborado com um toque inovador, distinguido na
                    confecção com excelência e nas rápidas entregas. A Albertina & Filhos é mais que uma
                    pastelaria comum, os nossos serviços de cofeteria são os melhores já vistos.</p>
                    <div class="thumb mt-4 mb-3 d-flex">
                        <a href="#" class="thumb-menu pr-md-4 text-center">
                            <div class="img" style="background-image: url(images/menu-1.jpg);"></div>
                            <h4>Hamburgers</h4>
                        </a>
                        <a href="#" class="thumb-menu pr-md-4 text-center">
                            <div class="img" style="background-image: url(images/menu-2.jpg);"></div>
                            <h4>Cervejas nacionais</h4>
                        </a>
                        <a href="#" class="thumb-menu pr-md-4 text-center">
                            <div class="img" style="background-image: url(images/menu-3.jpg);"></div>
                            <h4>Melhores pizzas</h4>
                        </a>
                    </div>
                    <p><a href="/loja" class="btn btn-primary px-4 py-3 mt-3">Fazer Pedido</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
      <div class="container-fluid p-0">
        <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text mt-md-5">
                    <h1 class="mb-4">Nós Amamos <br> Comidas Deliciosas</h1>
                  <p>A Albertina & Filhos traz um cardápio elaborado com um toque inovador, distinguido na
                    confecção com excelência e nas rápidas entregas. A Albertina & Filhos é mais que uma
                    pastelaria comum, os nossos serviços de cofeteria são os melhores já vistos.</p>
                    <div class="thumb mt-4 mb-3 d-flex">
                        <a href="#" class="thumb-menu pr-md-4 text-center">
                            <div class="img" style="background-image: url(images/menu-1.jpg);"></div>
                            <h4>Hamburgers</h4>
                        </a>
                        <a href="#" class="thumb-menu pr-md-4 text-center">
                            <div class="img" style="background-image: url(images/menu-2.jpg);"></div>
                            <h4>Cervejas nacionais</h4>
                        </a>
                        <a href="#" class="thumb-menu pr-md-4 text-center">
                            <div class="img" style="background-image: url(images/menu-3.jpg);"></div>
                            <h4>Melhores pizzas</h4>
                        </a>
                    </div>
                    <p><a href="/loja" class="btn btn-primary px-4 py-3 mt-3">Fazer Pedido</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>


      <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(images/about.jpg); position: relative">

                  </div>
                  <div class="col-sm-7 wrap-about py-5 ftco-animate">
            <div class="heading-section mt-5 mb-4">
                <div class="pl-lg-5 ml-md-5">
                    <span class="subheading">Sobre</span>
                  <h2 class="mb-4">Bem vindo ao Albertina & Filhos</h2>
              </div>
            </div>
            <div class="pl-lg-5 ml-md-5">
                          <p>A “Albertina & Filhos, Pastelaria e Fastfood” teve a sua abertura oficialmente nos meados de 2014, está situada nos combatentes, próximo à Escola 147. O espaço actual da pastelaria antes era usado para outros fins. A dona Albertina, sentiu que há necessidade de expandir a sua área financeira e decidiu então abrir a Pastelaria.

                            Três anos depois a dona da Empresa, decidiu expandir seus produtos e passou também a comercializar Fastfood (Hambúrguer, Pizza, etc), e devido a demasiada aderência solicitou-se então um sistema capaz de realizar encomendas por um Website.</p>
                          <h3 class="mt-5">Especial da Casa</h3>
                          <div class="thumb my-4 d-flex">
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                      <div class="img" style="background-image: url(images/lunch-4.jpg);"></div>
                      <h4>Magoga - Frango com Batatas</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                      <div class="img" style="background-image: url(images/lunch-7.jpg);"></div>
                      <h4>Torre de Cerveja Luandina</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                      <div class="img" style="background-image: url(images/lunch-6.jpg);"></div>
                      <h4>Hambúrguer Suculento</h4>
                  </a>
              </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row d-md-flex align-items-center justify-content-center">
              <div class="col-lg-10">
                  <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="6">0</strong>
                      <span>Anos de Experiência</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="20000">0</strong>
                      <span>Clientes</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="564">0</strong>
                      <span>Nossas Vendas/Encomendas</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="2190">0</strong>
                      <span>Dias de Trabalho</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      </div>
  </section>

  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Especialidades</span>
          <h2 class="mb-4">Nosso Menu</h2>
        </div>
      </div>

      <div class="row">
            @foreach($Produtos as $Produto)
                <div class="col-md-4">
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" id="ImgProduto" style="background-image: url(images/Produtos/{{$Produto['UrlImagem']}}), url(images/Produtos/product.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                              <div class="one-half">
                                <h3>{{$Produto['Nome']}}</h3>
                              </div>
                              <div class="one-forth">
                                <span>AOA {{$Produto['Preco']}}</span>
                              </div>
                            </div>
                            <p><span>{{$Produto['Descricao']}}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
      </div>

      <div class="row">
          <div class="col-md-12 text-center ftco-animate">
              <p><a href="/loja" class="btn btn-black py-3 px-5">Ver todos os Produtos</a></p>
          </div>
      </div>
    </div>
  </section>
@endsection
