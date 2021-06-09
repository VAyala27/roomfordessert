@extends('layouts.layout')

@section('content')
<nav class="navbar navbar-expand-sm navbar-light bg-transparent">
  <div class="container">
    <a href="/" class="navbar-brand"><img src="/img/logo.jpeg" alt="logo" height="75px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="/" class="nav-link text-center">Home</a>
        </li>
        <li class="nav-item">
          <a href="/about" class="nav-link text-center">About</a>
        </li>
        <li class="nav-item">
          <a href="/menu" class="nav-link text-center active">Menu</a>
        </li>
        <li class="nav-item">
          <a href="/supermarket" class="nav-link text-center">Supermarket</a>
        </li>
        <li class="nav-item">
          <a href="/contact" class="nav-link text-center">Contact</a>
        </li>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Orders
          212.828.8011</button>
        </ul>
      </div>
    </div>
  </nav>
  
  <section id="menu" class="py-5">
    <div class="container">
      <h1 class="text-center">Cakes</h1>
      <div class="row">
        @foreach($sweets as $sweet)
        <div class="col-md-3 col-sm-6 text-center">
          <img src="{{$sweet->img}}" class="img-fluid py-4 menu-item" alt="{{$sweet->name}}" height="300px" width="300px">
          <h5>{{$sweet->name}}</h5>
          <h5>${{$sweet->price}}</h5>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- <section id="menu" class="py-5">
    <div class="container">
      <h1 class="text-center">Cakes</h1>
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item1.jpeg" class="img-fluid py-4" alt="">
          <h5>Tiramisu</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item2.jpeg" class="img-fluid py-4" alt="">
          <h5>Guava Tres Leches</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item3.jpeg" class="img-fluid py-4" alt="">
          <h5>Caramel Tres Leches</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item4.jpeg" class="img-fluid py-4" alt="">
          <h5>Pineapple Tres Leche</h5>
          <h5>$3.00</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item5.jpeg" class="img-fluid py-4" alt="">
          <h5>Red Velvet Cake</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item6.jpeg" class="img-fluid py-4" alt="">
          <h5>Bread Pudding</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item7.jpeg" class="img-fluid py-4" alt="">
          <h5>Triple Mousse</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item8.jpeg" class="img-fluid py-4" alt="">
          <h5>Almond Cake</h5>
          <h5>$3.00</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item9.jpeg" class="img-fluid py-4" alt="">
          <h5>New York Cheesecake</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item10.jpeg" class="img-fluid py-4" alt="">
          <h5>Chocolate Tres Leche</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item11.jpeg" class="img-fluid py-4" alt="">
          <h5>Chocolate Mousse</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item12.jpeg" class="img-fluid py-4" alt="">
          <h5>Chocolate Lava Cake</h5>
          <h5>$3.00</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item13.jpeg" class="img-fluid py-4" alt="">
          <h5>Tropical Sweet Potato</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item14.jpeg" class="img-fluid py-4" alt="">
          <h5>Tres Leches</h5>
          <h5>$3.00</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <img src="/img/menu-item15.jpeg" class="img-fluid py-4" alt="">
          <h5>Traditional Flan</h5>
          <h5>$3.00</h5>
        </div>

      </div>
    </div>
  </section> --}}
@endsection