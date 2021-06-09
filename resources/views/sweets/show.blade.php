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
  
  <section id="menu-item" class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <img src="/img/tiramisu.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 mt-5">
                    <h2 class="mb-3">Ripe Kiwi Jar</h2>
                    <h4 class="mb-3">$3.00</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" id="quantity">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
@endsection