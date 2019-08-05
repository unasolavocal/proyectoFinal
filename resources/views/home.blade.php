@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="bd-example">

                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{ asset('img/img1.jpg') }}" class="d-block w-100" alt="imagen1">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Encontra lo que tu mejor amigo necesita</h5>
                                <p>Alimento balanceado para todas las edades</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('img/peyga.jpg') }}" class="d-block w-100" alt="imagen2">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Hacelo feliz</h5>
                                <p>Trabajamos con las mejores marcas!</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" alt="imagen3">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Encontra eso que estas buscando</h5>
                                <p>Respaldados por las mejores veterinarias del pais!</p>
                              </div>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>


                      <div class="container-fluid">
                        <div class="row mt-3">
                          <div class="col-sm-12 col-md-6">
                              <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Clinicas veterinarias</h5>
                                <p class="card-text">Trabajamos con mas de 150 clinicas a lo largo de todo el pais.</p>
                                <a href="#" class="btn btn-primary">Buscar clinica cercana</a>
                              </div>
                            </div>
                          </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">El alimento que tu amigo necesita</h5>
                                  <p class="card-text">Respaldados por las mejores marcas, tenemos el alimento que tu amigo necesita.</p>
                                  <a href="#" class="btn btn-primary">Buscar alimento</a>
                                </div>
                              </div>
                            </div>
                        </div>    <div class="row mt-3">
                              <div class="col-sm-12 col-md-6">
                                  <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Te vas de viaje?</h5>
                                    <p class="card-text">No te preocupes por tu mascota, contamos con mas de 100 anfitriones que pueden encargarse de el.</p>
                                    <a href="#" class="btn btn-primary">Ver hospedajes</a>
                                  </div>
                                </div>
                              </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Accesorios para mascotas.</h5>
                                      <p class="card-text">Mima a tu mascota con nuestra amplia seleccion de juguetes pensados para el. </p>
                                      <a href="#" class="btn btn-primary">Ver juguetes</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
