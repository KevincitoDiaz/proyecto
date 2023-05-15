@extends('layouts.auth')

@section('content')
    <div class="container-registro">
        <div class="row-justify-content-center-registro">
            <div class="imagen-formulario">

            </div> 
            <div class="col-md-12-registro">
                <div class="card-registro">
                    <div class="card-header-registro">!Registrate¡</div>

                    <div class="card-body-registro">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row-mb-3-registro">
                                <label for="name">Nombre completo</label>
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="row-mb-3-registro">
                                <label for="email">{{ __('Correo electronico') }}</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row-mb-3-contraseña">
                                <label for="password">{{ __('Contraseña') }}</label>

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="row-mb-3-registro">
                                <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>


                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="row-mb-0-registro">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-btn-primary-btn-block-registro">
                                        {{ __('Registrate') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
