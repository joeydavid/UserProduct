@extends('layouts.frontend')
@section('content')
<section id="first-section" class="pencil">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center a-selector">
                @foreach($banners as $value)
                    <h1 class="mb-1 font">
                      {{ $value->bannertitle }}
                    </h1>
                    <h3 class="mb-5">
                      {{ $value->bannerdescription }}
                    </h3>
                    @endforeach
                    <a class="btn btn-primary btn-xl js-scroll-trigger hover-me" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="second" class="bg-color padding">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="padding">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="bold1">Stylish Portfolio is the perfect theme for your next project!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h5 class="margin">This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at 
                <a href="https://unsplash.com/">Unsplash!</a>
                </h5>
                <div class="text-center">
                    <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="third" class="bg">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="padding">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h6 class="font-color">SERVICES</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="font-bold">What We Offer</h2>
            </div>
        </div>
        <div class="row">
        @foreach($services as $value)
            <div class="col-sm-3">
                <span class="service-icon rounded-circle mx-auto mb-3"> <i class=" {{ $value->icons }} "> </i> </span>
            </div>
        @endforeach
        </div>
        <div class="row">
        @foreach($services as $value)
            <div class="col-sm-3">
                <h4 class="color-bold"><strong> {{ $value->title }} </strong></h4>
                <p class="text-faded mb-0 color-bold"> {!! $value->text !!} </p>
            </div>
        @endforeach
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="padding"></div>
            </div>
        </div>
    </div>
</section>
<section id="fourth" class="scissor">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="bold">
                    <h2>Welcome to your</h2>
                    <h2>next website</h2>
                    <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/template-overviews/stylish-portfolio/">Download Now!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-section bg-white" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Recent Projects</h2>
      </div>
      <div class="row no-gutters">
      @foreach($porfolios as $value)
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>{{ $value->title }}</h2>
                <p class="mb-0">{{ $value->text }}</p>
              </span>
            </span>
            <img src="images/{{ $value->image }}">
          </a>
        </div>
      @endforeach  
      </div>
    </div>
</section>
<section id="sixth" class="bg-primary">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 padding">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 padding-bot">
                <h2 class="mb-4 color-bold">The buttons below are impossible to resist...</h2>
                <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
                <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="map">
<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.19542732192!2d120.62343344491724!3d15.180584750427862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ee0c9a038189%3A0x4f5e639c33cec382!2sSapang+Maisac%2C+Mexico%2C+Pampanga!5e0!3m2!1sen!2sph!4v1565596006369!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <br>
    <small>
      <a href="https://www.google.com/maps/place/Sapang+Maisac,+Mexico,+Pampanga/@15.1805848,120.6234334,16.98z/data=!4m5!3m4!1s0x3396ee0c9a038189:0x4f5e639c33cec382!8m2!3d15.1812629!4d120.6271805"></a>
    </small>
  </section>
<section>
<footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
          <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
          <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
          <i class="fab fa-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright © Your Website 2019</p>
    </div>
  </footer>
</section>
@endsection
