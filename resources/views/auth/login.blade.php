@extends('layouts.plantilla')

@section('content')
<div class="row justify-content-center">
    <div class="col-auto vh-100 d-flex align-content-center flex-column justify-content-center align-items-center">
        <img src="img/logo.png" alt="DeTragos.com">
        <div class="form-container mx-auto mt-5 ">
            <p class="title">Login</p>
            <form action="{{route('login')}}" method="POST" class="form">
                @csrf
                <div class="input-group mb-4">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="">
                    <div class="forgot">
                        <a rel="noopener noreferrer" href="#">Contraseña olvidada?</a>
                    </div>
                </div>
                <button type="submit" class="sign btn btn-primary my-4">Entrar</button>
            </form>
            <p class="signup">¿Primera ves aqui?
                <a rel="noopener noreferrer" href="{{route('register.show')}}" class="">Resgistrate</a>
            </p>
        </div>
    </div>
</div>
@endsection