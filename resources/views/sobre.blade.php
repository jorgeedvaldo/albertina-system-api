@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Sobre</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sobre <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Missão</h3>
            <p>Revolucionar o serviço de encomendas usando a tecnologia para facilitar a vida dos nossos clientes, oferecendo a conveniência do primeiro mundo a um preço acessível.</p>
        </div>
        <div class="col-md-6">
            <h3>Visão</h3>
            <p>Ser a indústria de confeteria líder para o serviço de encomendas/pedidos em Angola, ser uma companhia de renome para o dinamismo, inovação, qualidade e excelência.</p>
        </div>
        <div class="col-md-12">
            <h3>Sobre Nós</h3>
            <p>A “Albertina & Filhos, Pastelaria e Fastfood” teve a sua abertura oficialmente nos meados de 2014, está situada nos combatentes, próximo à Escola 147. O espaço actual da pastelaria antes era usado para outros fins. A dona Albertina, sentiu que há necessidade de expandir a sua área financeira e decidiu então abrir a Pastelaria.</p>
            <p>Três anos depois a dona da Empresa, decidiu expandir seus produtos e passou também a comercializar Fastfood (Hambúrguer, Pizza, etc), e devido a demasiada aderência solicitou-se então um sistema capaz de realizar encomendas por um Website.</p>
        </div>
    </div>
</div>
@endsection
