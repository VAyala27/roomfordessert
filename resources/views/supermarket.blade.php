@extends('layouts.layout')

@section('content')
<nav class="navbar navbar-expand-sm navbar-light bg-transparent">
  <div class="container">
    <a href="/" class="navbar-brand"><img src="img/logo.jpeg" alt="logo" height="75px"></a>
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
          <a href="/menu" class="nav-link text-center">Menu</a>
        </li>
        <li class="nav-item">
          <a href="/supermarket" class="nav-link text-center active">Supermarket</a>
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
    
  <div class="container">
    <section id="products">
        <div class="row my-5">
            <div class="col-5 mx-auto col-md-3">
                <img class="img-fluid" src="img/tres_leches.jpg" alt="">
            </div>
            <div class="col-5 mx-auto col-md-3">
                <h4 class="mb-3">Tres Leches</h4>
                <p>A traditional Latin favorite, this sponge-cake soaked in a sea of three milks is deliciously
                    light and airy.</p>
            </div>
            <div class="col-5 mx-auto col-md-3">
                <img class="img-fluid" src="img/Tiramisu.jpg" alt="">
            </div>
            <div class="col-5 mx-auto col-md-3">
                <h4 class="mb-3">Tiramisu</h4>
                <p>An Italian favorite with delicate layers of mascarpone mousse and espresso sponge cake, lightly
                    dusted with espresso powder</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-5 mx-auto col-md-3">
                <img class="img-fluid" src="img/Guava_Tres_Leches.jpg" alt="">
            </div>
            <div class="col-5 mx-auto col-md-3">
                <h4 class="mb-3">Guava Tres Leches</h4>
                <p>Dulce de Leche paired with rich cream and a soft sponge cake, topped with a sweet tropical guava
                    glaze.</p>
            </div>
            <div class="col-5 mx-auto col-md-3">
                <img class="img-fluid" src="img/Traditional_Flan.jpg" alt="">
            </div>
            <div class="col-5 mx-auto col-md-3">
                <h4 class="mb-3">Traditional Flan</h4>
                <p>A creamy flan melted in silky sweetened condensed milk, with a radiant amber caramel finish.</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-5 mx-auto col-md-3">
                <img class="img-fluid" src="img/coming_soon.jpg" alt="">
            </div>
            <div class="col-5 mx-auto col-md-3">
                <h1 class="text-danger">Coming Soon</h1>
                <h4>Tres Leches</h4>
                <p>Two pound 8" Cake</p>
            </div>
            <div class="col-5 mx-auto col-md-3 d-flex align-items-center justify-content-">
                <img class="img-fluid" src="img/desert-package.jpeg" alt="">
                <a href="#">Checkout the rest of our dessert Menu.</a>
            </div>
        </div>
    </section>
</div>
@endsection