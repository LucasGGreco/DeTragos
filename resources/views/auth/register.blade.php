@extends('layouts.plantilla')

@section('content')
<div class="row justify-content-center">
    <div class="col-auto vh-100 d-flex align-content-center flex-column justify-content-center align-items-center">
        <div class="form-container mx-auto mt-5 ">
            <p class="title">Crea tu cuenta</p>
            <form action="{{route("validar-registro")}}" method="POST" class="form">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="input-group">
                    <label for="name">Tu nombre</label>
                    <input type="text" name="name" id="name">
                </div>
                <button type="submit" class="sign btn btn-primary my-4">Registrarme</button>
            </form>
        </div>
    </div>
</div>
@endsection