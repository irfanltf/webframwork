@extends('layout.keren')


@section('title',$title)
@section('sidebar')
@parent
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Muhammad Irfan Lutfi</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#praktikum">Praktikum</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto rounded-circle border border-warning" src="http://localhost/blog/public/img/profile.jpg" alt="">
      <h1 class="text-uppercase mb-0">WEB FRAMWORK</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Ini adalah hasil dari matakuliah pemrograman web framwork menggunamkan Framework Laravel 5.7, yang sudah di design menggunakan framework css bootstrap 4, yang mana pada praktikum ini saya menggunakan template bootstrap 4 dari website <a style="color:white;" href="https://startbootstrap.com">www.getbootsrtrap.com</a></h2>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="praktikum" id="praktikum">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Praktikum</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/cake.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/circus.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/game.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/safe.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">About</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-download mr-2"></i>
          Download Now!
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

 

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Muhammad Irfan Lutfi 2019</small>
    </div>
  </div>

 

  
@endsection

@section('konten')
<p>{{$konten}}</p>
@stop