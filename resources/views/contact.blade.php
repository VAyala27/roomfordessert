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
          <a href="/about" class="nav-link text-center">About</a>
        </li>
        <li class="nav-item">
          <a href="/menu" class="nav-link text-center">Menu</a>
        </li>
        <li class="nav-item">
          <a href="/supermarket" class="nav-link text-center">Supermarket</a>
        </li>
        <li class="nav-item">
          <a href="/contact" class="nav-link text-center active">Contact</a>
        </li>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Orders
          212.828.8011</button>
        </ul>
      </div>
    </div>
  </nav>
    
  <section id="contact-header" class="py-5">
    <div class="dark-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mx-auto">
                    <div class="contact-header-content">
                        <p class="display-4 my-auto main-2">1st RETAIL SHOP COMING SOON</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="contact" class="py-4 container">
    <form>
        <div class="row d-flex align-items-center">
            <div class=" col-6 col-md-6">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address">
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" placeholder="Message" cols="30"
                        rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mx-auto d-block">Submit</button>
            </div>
            <div class="col-6 col-md-6 map"></div>
        </div>
    </form>
</section>
</div>

