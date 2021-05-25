@extends('layouts.default')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>
</head>
<div class="home">
    @include('header.header')
    <div class="home__presentation">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/carousel/archivos.jpg" class="d-block" height="500px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/carousel/upload.jpg" class="d-block" height="500px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/carousel/registro.jpg" class="d-block" height="500px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/carousel/login.jpg" class="d-block" height="500px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <div class="container marketing">

        <div class="row">
            <div class="col-lg-4">
                <img src="/images/icons/home/coding.svg" height="140px" width="140px" />

                <h2>Ultimas tecnologias</h2>
                <p>
                    Scan2Store esta disenada con el rendimiento en mente.
                </p>
                <p><a class="btn btn-secondary" href="/register">Quiero verlo!</a></p>
            </div>
            <div class="col-lg-4">
                <img src="/images/icons/home/analysis.svg" height="140px" width="140px" />

                <h2>Ordena tu informacion</h2>
                <p>Nuestra plataforma te permite ordenar tus archivos por formato, nombre, fecha, y mucho mas!
                </p>
                <p><a class="btn btn-secondary" href="/register">Quiero verlo!</a></p>
            </div>
            <div class="col-lg-4">
                <img src="/images/icons/home/cloud-computing.svg" height="140px" width="140px" />

                <h2>Descargas</h2>
                <p>Baja tus archivos en cualquier momento y lugar con un simple click!</p>
                <p><a class="btn btn-secondary" href="/register">Quiero verlo!</a></p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Administra tus documentos <span class="text-muted">con elegancia.</span>
                </h2>
                <p class="lead">
                    Desde PowerPoints hasta una pelicula familiar, Scan2Store te permite organizar tus archivos en la
                    nube y tener
                    acceso a ellos en cualquier momento y lugar.
                </p>
            </div>
            <div class="col-md-5">
                <img src="/images/icons/home/copy.svg" height="300px" width="300px" />

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Facil de <span class="text-muted">Usar.</span></h2>
                <p class="lead">
                    Facilitamos las cosas para usted, con un par de clicks y podra tener su documento digitalizado
                    en nuestro sistema disponible en una amplia gama de dispositivos.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="/images/icons/home/easy-to-use.svg" height="300px" width="300px" />

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Disponible <span class="text-muted">donde necesites.</span></h2>
                <p class="lead">
                    Sabemos que el tiempo siempre escasea, asi que nos propusimos facilitarte la vida.
                    Lo unico necesario para utilizar Scan2Store es un dispositivo con acceso a internet y listo!
                </p>
            </div>
            <div class="col-md-5">
                <img src="/images/icons/home/international-delivery.svg" height="300px" width="300px" />

            </div>
        </div>

    </div>
</div>
