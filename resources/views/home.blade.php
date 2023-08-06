@extends('layouts.plantilla')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="row px-5">
                @foreach ($tragos as $trago)
                    <div class="book m-5">
                        <div class="cover">
                            <h3 class="text-center titulo-trago text-uppercase">{{$trago->nombre}}</h3>
                            <img src="img/coctel.jpg" class="img-fluid img-trago p-0" alt="">
                        </div>
                        <p class="p-0 m-0">Cristaleria: </p> 
                        <span class="text-uppercase mb-1">{{$trago->vaso}}</span>

                        <p class="p-0 m-0">Metodo: </p> 
                        <span class="text-uppercase mb-1">{{$trago->metodo}}</span>

                        <a href="{{ route('trago.show', ['id' => $trago->id]) }}" class="btn btn-primary mt-5">Preparar</a>
                    </div>
                @endforeach
            </div>    
        </div>
    </div>



@endsection