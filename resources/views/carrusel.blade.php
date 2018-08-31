@extends('layouts.app')
@section('content')

<!-- Carousel -->
<div id="carousel-container">
  <div id="productsCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#productsCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#productsCarousel" data-slide-to="1"></li>
      <li data-target="#productsCarousel" data-slide-to="2"></li>
      <li data-target="#productsCarousel" data-slide-to="3"></li>
      <li data-target="#productsCarousel" data-slide-to="4"></li>

    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" >
        <a href="#" data-toggle="modal" data-target="#slide2"><img class="image-responsive" src="images/servicios.png" alt="slider-2"></a>
        <div class="carousel-caption">
          <h3>Servicios mAppu</h3>
          <p>¿Tienes una idea? ¡Háblanos!</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="#" data-toggle="modal" data-target="#slide1"><img class="image-responsive" src="images/appsalamedida.png" alt="slider-1" ></a>
        <div class="carousel-caption">
          <h3>Desarrollo de aplicaciones</h3>
          <p>Conoce un mundo de soluciones</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="#" data-toggle="modal" data-target="#slide3"><img class="image-responsive" src="images/apps-mappu.png" alt="slider-3"></a>
        <div class="carousel-caption">
          <h3>Aplicaciones mAppu</h3>
          <p>Somos profesionales al servicio de tu emprendimiento</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="{{route('somos.mappu')}}"><img class="image-responsive" src="images/somos-mappu.png" alt="slider-3"></a>
        <div class="carousel-caption">
          <h3>Somos mAppu</h3>
          <p>Somos profesionales al servicio de tu emprendimiento</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="{{route('contacto')}}"><img class="image-responsive" src="images/contacto.png" alt="slider-3"></a>
        <div class="carousel-caption">
          <h3>Contacto</h3>
          <p>A sólo un click de distancia</p>
        </div>
      </div>

      <a class="left carousel-control" href="#productsCarousel" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#productsCarousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- /Carousel -->

  @endsection
