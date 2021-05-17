@extends('layouts.default')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido al registro</title>

</head>
<div class="register">
    @include('header.header')
    <div class="register__form">
        <div class="register__form__title">
            Registro de usuario
        </div>
        <div class="register__form__container">
            <div class="register__form__container__left">
                <div class="register__form__container__left__name">
                    <h1>Nombre</h1>
                    <input placeholder="Cristian"/>
                </div>
                <div class="register__form__container__left__mail">
                    <h1>Correo electronico</h1>
                    <input placeholder="@tipo.com"/>
                </div>
                <div class="register__form__container__left__password">
                    <h1>Contrasena</h1>
                    <input placeholder="*************"/>
                </div>
            </div>
            <div class="register__form__container__right">
                <div class="register__form__container__right__lastname">
                    <h1>Apellido</h1>
                    <input placeholder="Troncoso"/>
                </div>
                <div class="register__form__container__right__confirmMail">
                    <h1>Confirmar correo</h1>
                    <input placeholder="@tipo.com"/>
                </div>
                <div class="register__form__container__right__fiability">
                    <h1>Fiabilidad</h1>
                    <div class="register__form__container__right__fiability__progress">
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary">Registrarse</button>
    </div>
</div>
