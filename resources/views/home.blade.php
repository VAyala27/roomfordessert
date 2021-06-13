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
          <a href="/" class="nav-link text-center active">Home</a>
        </li>
        <li class="nav-item">
          <a href="/about" class="nav-link text-center">About</a>
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

  @if(session()->has('mssg'))
  <div class="mssg alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p class="mssg">{{ session('mssg') }}</p>
  </div>
@endif
