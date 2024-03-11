@extends('auth.template')

@section('content')
    {{-- HEADER -- Heredado de auth}}

{{-- MAIN --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        Añadir receta
                    </div>

                    <div class="card-body text-center d-grid">
                        Aquí puedes añadir tus recetas favoritas
                        {{-- BOTÓN AÑADIR --}}
                        <div class="">
                            <a class="btn btn-success col-3 mt-3" data-bs-toggle="modal"
                                data-bs-target="#addRecetaModal">Añadir</a>
                        </div>

                        {{-- MODAL AÑADIR --}}
                        <div class="modal fade" id="addRecetaModal" tabindex="-1" aria-labelledby="addRecetaModalLabel"
                            aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addRecetaModalLabel">Añadir receta</h5>
                                        <button type="button" class="btn-close bg-danger rounded-5" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('guardar.receta') }}" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="nombre" class="fw-medium">Nombre:</label>
                                                <input type="name" name="nombre" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="ingredientes" class="fw-medium">Ingredientes:</label>
                                                <input type="name" name="ingredientes" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="tiempo" class="fw-medium">Tiempo (minutos):</label>
                                                <input type="number" name="tiempo" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="utensilios" class="fw-medium">Utensilios:</label>
                                                <input type="name" name="utensilios" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="descripcion" class="fw-medium">Descripción:</label>
                                                <textarea name="descripcion" class="form-control" required></textarea>
                                            </div>


                                    </div>
                                    <div class="modal-footer justify-content-center bg-dark">
                                        <button type="submit" class="btn btn-success">Add Product</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header text-center">
                        Lista de recetas
                    </div>

                    <div class="card-body text-center d-grid">


                        <table class="table mb-3">
                            <thead>
                                <tr class="">
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Ingredientes</th>
                                    <th scope="col">Tiempo</th>
                                    <th scope="col">Utensilios</th>
                                    <th scope="col">Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
{{-- No he conseguido que muestre las recetas --}}
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

            {{-- FOOTER --}}
            <footer>
                <div class="text-center py-3 mt-4 border-1 bg-warning">
                    <span class="fw-medium">
                        Proyecto recuperación HLC - Recipex, 2º DAW
                    </span>
                </div>
            </footer>
        @endsection
