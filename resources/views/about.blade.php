@extends('layouts.layout')

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
          <a href="/about" class="nav-link text-center active">About</a>
        </li>
        <li class="nav-item">
          <a href="/menu" class="nav-link text-center">Menu</a>
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
    
@section('content')
<section id="showcase">
    <div class="showcase-content dark-overlay">
      <div class="row">
        <div class="col-md-6 text-center mx-auto">
          <h1 class="display-3 main">About Us</h1>
          <figure>
            <blockquote class="blockquote">
              <p class="mb-0">"Life is short... always leave Room for Dessert"</p>
              <footer class="blockquote-footer">President, <cite title="Source Title">Javier Montas</cite>
              </footer>
            </blockquote>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section id="service" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <p class="lead">My early beginnings in the culinary arts began at age 19 in a small restaurant in
            the Dominican Republic. Time passed and my talents opened doors in some of New York’s finest
            dining establishments. I had the honor of working alongside renowned Pastry Chef Claudia
            Fleming, in restaurants such as Gramercy Tavern, Per Se, Sushi Samba and Barbounia. Years later,
            my Caribbean roots continue to be the inspiration for creating my desserts; fresh, pure,
            colorful and unprocessed ingredients in their most natural form. I invite you to savor our
            entire line of refined island-inspired desserts, for an indulgence that will spoil your taste
            buds… quite simply; you must leave Room for Dessert.</p>

          <h4>-Vladimir Lopez Pastry Chef</h4>
        </div>
      </div>
    </div>
  </section>
@endsection