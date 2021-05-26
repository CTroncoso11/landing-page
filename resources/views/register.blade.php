@extends('layouts.default')

@section('title', 'Esto es un registro')
@section('content')
    <div class="register">
        <div class="register__form">
            <div class="register__form__title">
                Registro de usuario
            </div>
            <div class="register__form__container">
                <div class="register__form__container__left">
                    <div class="register__form__container__left__name">
                        <h1>Nombre</h1>
                        <input placeholder="Cristian" />
                    </div>
                    <div class="register__form__container__left__mail">
                        <h1>Correo electronico</h1>
                        <input placeholder="@tipo.com" type="email" />
                    </div>
                    <div class="register__form__container__left__password">
                        <h1>Contrasena</h1>
                        <input placeholder="*************" type="password" />
                    </div>
                </div>
                <div class="register__form__container__right">
                    <div class="register__form__container__right__lastname">
                        <h1>Apellido</h1>
                        <input placeholder="Troncoso" />
                    </div>
                    <div class="register__form__container__right__confirmMail">
                        <h1>Confirmar correo</h1>
                        <input placeholder="@tipo.com" type="email" />
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
@stop
