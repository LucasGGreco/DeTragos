@extends('layouts.plantilla')

@section('content')

    <div class="row justify-content-center">
        <div class="col-7 ps-5">
            <div class="ms-5">
                <h1 class="text-uppercase"> {{$trago->nombre}} </h1>
                <p class="my-0">
                    {{ isset($trago->descripcion_corta) ? $trago->descripcion_corta : 'No hay descripción disponible' }}  
                </p>
                <p class="mt-0">
                    Para mas informacion consulte la WIKI de
                    <a href="">Negroni</a>
                </p>
                <h3>Ingredientes:</h3>
                <ul class="ms-5">
                   
                    @foreach ($ingredientes_id_array as $in)
                        @foreach ($ingredientes as $i)

                            @if ($i->id == $in)
                                <li>{{$i->ingrediente}}</li>
                            @endif

                        @endforeach
                    @endforeach
                </ul>

                <p class="fw-bold"> Garnish: 
                    <span class="fw-normal">
                        {{ isset($trago->garnish) ? $trago->garnish : 'Este trago no lleva una decoracion' }}  
                    </span>
                </p>

                <h3>Preparacion:</h3>
                <p>
                    Llena un vaso old-fashioned o un vaso bajo con hielo para enfriarlo. <br>
                    Agrega la ginebra, el vermut rojo y el Campari en el vaso. <br>
                    Remueve suavemente los ingredientes en el vaso durante unos segundos para mezclarlos. <br>
                    Si deseas una decoración, exprime el aceite de una rodaja de naranja sobre la bebida o agrega un twist de naranja. <br>
                    Sirve el Negroni en un vaso corto con hielo y decora con la rodaja de naranja si lo deseas.
                </p>

            </div>
        </div>

        <div class="col-3 border py-2">
            
            <img src="http://127.0.0.1:8000/img/negroni.png" class="img-fluid" alt="">
            
            <p class="mt-4">Cristaleria:
                <span class="text-uppercase fw-bold">{{$trago->vaso}}</span>
            </p>
            <p class="mb-4">Metodo:
                <span class="text-uppercase fw-bold">{{$trago->metodo}}</span>
            </p>

        </div>
    </div>

@endsection