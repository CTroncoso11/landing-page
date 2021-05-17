@extends('layouts.default')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio de sesion</title>

</head>
<div class="login">
    @include('header.header')
    <div class="login__form">
        <div class="login__form__title">
            Iniciar sesion
        </div>
        <div class="login__form__container">
            <div class="login__form__container__mail">
                <h1>Correo electronico</h1>
                <input placeholder="@tipo.com"/>
            </div>
            <div class="login__form__container__password">
                <h1>Contrasena</h1>
                <input placeholder="*************"/>
            </div>
        </div>
        <button type="button" class="btn btn-secondary">Iniciar sesion</button>
        <hr/>
        <div class="login__form__refer">
            Todavia no tienes cuenta?
            <a href="/register">Crea una ahora!</a>
        </div>
    </div>
</div>
