@extends('layouts.default')
@section('title', 'Esto es un login')
@section('content')
<div class="login">
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
                <input placeholder="*************" type="password"/>
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
@stop
