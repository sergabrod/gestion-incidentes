@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header text-white bg-primary">Sistema de Gestión de Incidentes</div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="category_id">Categoría</label>
                        <select name="category_id" id="category" class="form-control">
                            <option value="0">Sin categoría</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="severity">Severidad</label>
                        <select name="severity" id="severity" class="form-control">
                            <option value="M">Menor</option>
                            <option value="N">Normal</option>
                            <option value="A">Alta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="asignar_id">Asignar a</label>
                        <select name="asignar_id" id="asignar_id" class="form-control">
                            <option value="0">Sin asginar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Registrar incidencia</button>
                    </div>
                </form>
            </div>
        </div>
@endsection