@extends('layouts.default')
@section('title', 'Esto es un login')
@section('content')
    <div class="login">
        <div class="login__form">
            <div class="login__form__title">
                INICIAR SESION
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="login__form__container">
                    {{-- Email --}}
                    <div class="login__form__container__mail">
                        <h1>Correo electronico</h1>
                        <div class="login__form__container__mail__field">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                </svg>
                            </i>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                    </div>
                    <div class="login__form__container__password">
                        <h1>Contrasena</h1>
                        <div class="login__form__container__password__field">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                                </svg>
                            </i>
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
                    </div>
                </div>
                <hr />
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <div class="login__form__refer">
                            Olvidaste tu contrasena?
                            <a href="{{ route('password.request') }}">Click aqui!</a>
                        </div>
                    @endif

                    <x-button class="ml-3 btn btn-secondary">
                        {{ __('Iniciar sesion') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
@stop
