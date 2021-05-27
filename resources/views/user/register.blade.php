@extends('layouts.default')

@section('title', 'Esto es un registro')
@section('content')
<div class="register">
    <div class="register__form">
        <h1>Registrate en Scan 2 Store</h1>
        <hr/>
        <form action="/user" method="POST">
            @csrf
            <div class="register__form__inputs">
                <div class="register__form__inputs__left">
                    <div class="register__form__inputs__field">
                        <label>Nombre</label>
                        <input for='name' name="name" type="text" tabindex="1"/>
                    </div>
                </div>
                <div class="register__form__inputs__right">
                    <div class="register__form__inputs__field">
                        <label>Apellido</label>
                        <input for='lastname' name="lastname" type="text" tabindex="2"/>
                    </div>
                </div>
            </div>
            <div class="register__form__inputs">
                <div class="register__form__inputs__left">
                    <div class="register__form__inputs__field">
                        <label>Correo electronico</label>
                        <input for='email' name="email" type="text" tabindex="3"/>
                    </div>
                </div>
                <div class="register__form__inputs__right">
                    <div class="register__form__inputs__field">
                        <label>Confirmar correo electronico</label>
                        <input for='email' name="emailConfirm" type="text" tabindex="4"/>
                    </div>
                </div>
            </div>
            <div class="register__form__inputs">
                <div class="register__form__inputs__left">
                    <div class="register__form__inputs__field">
                        <label>Contrasena</label>
                        <input for='password' name="password" type="password" tabindex="5"/>
                    </div>
                </div>
                <div class="register__form__inputs__right">
                    <div class="register__form__inputs__conditions">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" tabindex="6">
                            <label class="form-check-label" for="flexCheckDefault">
                              Acepto los terminos y condiciones que puedan aplicarse
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" tabindex="7">Registrarse</button>
        </form>
    </div>
</div>
@endsection
