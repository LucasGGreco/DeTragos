@extends('layouts.plantilla')

@section('content')

    <div class="row">
        <div class="col">
            <h1 class="text-center">DETRAS DEL MOSTRADOR</h1>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-5">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" id="nav-tragos-tab" data-bs-toggle="tab" data-bs-target="#nav-tragos" type="button" role="tab" aria-controls="nav-tragos" aria-selected="true">TRAGOS</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" id="nav-ingredientes-tab" data-bs-toggle="tab" data-bs-target="#nav-ingredientes" type="button" role="tab" aria-controls="nav-ingredientes" aria-selected="true">INGREDIENTES</button>
                </li>

                </li>
                <li class="nav-item">
                    <button class="nav-link" id="nav-usuarios-tab" data-bs-toggle="tab" data-bs-target="#nav-usuarios" type="button" role="tab" aria-controls="nav-usuarios" aria-selected="true">USUARIOS</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" id="nav-wiki-tab" data-bs-toggle="tab" data-bs-target="#nav-wiki" type="button" role="tab" aria-controls="nav-wiki" aria-selected="true">WIKI</button>
                </li>
            </ul>

            <div class="tab-content border border-top-0 pb-5" id="myTabContent">

                <div class="tab-pane fade show active px-5 pb-5 " id="nav-tragos" role="tabpanel" aria-labelledby="nav-tragos-tab">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <h1 class="mt-3 d-inline-block">EDITAR TRAGO</h1><span class="material-icons ms-3 fs-2">edit</span>
                        </div>
                        <div class="col-auto ms-auto my-auto">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                +
                            </button>
                        </div>
                    </div>
                    <div class="row justify-content-center my-2">
                        <div class="col">
                            <form action="">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div> 
                                        <div class="my-3">
                                            <label for="exampleInputEmail1" class="form-label">Garnish:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>   
                                    
                                        <label class="form-label">Cristaleria:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <label class="form-label mt-3">Descripcion corta:</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" style="height: 250px"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label pt-3">Ingredientes:</label>
                                        <select class="form-select" multiple aria-label="multiple select example" style="height: 91%">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">asd</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="form-label mt-3">Descripcion larga:</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" style="height: 250px"></textarea>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pt-4" id="nav-ingredientes" role="tabpanel" aria-labelledby="nav-ingredientes-tab">
                    <h1 class="text-center">INGREDIENTES</h1>
                </div>

                <div class="tab-pane fade pt-4" id="nav-usuarios" role="tabpanel" aria-labelledby="nav-usuarios-tab">
                    <h1 class="text-center">USUARIOS</h1>
                </div>

                <div class="tab-pane fade pt-4" id="nav-wiki" role="tabpanel" aria-labelledby="nav-wiki-tab">
                    <h1 class="text-center">WIKI</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Creacion-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CREAR TRAGO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div> 
                                <div class="my-3">
                                    <label for="exampleInputEmail1" class="form-label">Garnish:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>   
                            
                                <label class="form-label">Cristaleria:</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <label class="form-label mt-3">Descripcion corta:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label pt-3">Ingredientes:</label>
                                <select class="form-select" multiple aria-label="multiple select example" style="height: 91%">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">Three</option>
                                    <option value="3">asd</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <label class="form-label mt-3">Descripcion larga:</label>
                            <div class="form-floating">
                                <textarea class="form-control" style="height: 200px"></textarea>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection