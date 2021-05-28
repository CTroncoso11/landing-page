@extends('layouts.default')

@section('title', 'Esto es un registro')
@section('content')
    <div class="register">
        <div class="register__form">
            <h1>Registrate en Scan 2 Store</h1>
            <hr />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="register__form__inputs">
                    <div class="register__form__inputs__left">
                        <div class="register__form__inputs__field">
                            <label>Nombre</label>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus />
                        </div>
                    </div>
                    <div class="register__form__inputs__right">
                        <div class="register__form__inputs__field">
                            <label>Apellido</label>
                            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus  />
                        </div>
                    </div>
                </div>
                <div class="register__form__inputs">
                    <div class="register__form__inputs__left">
                        <div class="register__form__inputs__field">
                            <label>Correo electronico</label>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
                    </div>
                    <div class="register__form__inputs__right">
                        <div class="register__form__inputs__field">
                            <label>Confirmar correo</label>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
                    </div>
                </div>
                <div class="register__form__inputs">
                    <div class="register__form__inputs__left">
                        <div class="register__form__inputs__field">
                            <label>Contrasena</label>
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
                    </div>
                    <div class="register__form__inputs__right">
                        <div class="register__form__inputs__field">
                            <label>Confirmar contrasena</label>
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                        </div>
                    </div>
                </div>
                <button type="submit" tabindex="7">Registrarse</button>
            </form>
        </div>
    </div>
@endsection
