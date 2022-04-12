@extends('layouts.app')

@section('content')
    <div class="title">
        <h1>Operación Aduanera</h1>
    </div>
    <div>
        <a class="btn btn-outline-secondary" href="{{ route('welcome') }}">Regresar</a>
    </div>
    <div>
        <form action="{{ route('operacion.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Folio</label>
                        <input type="text" class="form-control" name="folio" id="folio" value="{{ $folio }}"
                            readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Pedimento</label>
                        <input type="text" class="form-control" name="pedimento" id="pedimento" value="01 43 2796 2">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Cliente</label>
                        <input type="text" class="form-control" name="cliente" id="cliente">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Aduana</label>
                        <input type="text" class="form-control" name="aduana" id="aduana">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Patente</label>
                        <input type="text" class="form-control" name="patente" id="patente">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Esatus</label>
                        <input type="text" class="form-control" name="estatus" id="estatus">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Tipo Mercancia</label>
                        <select class="form-control" name="t_mercancia" id="t_mercancia">
                            <option value="">Seleccione</option>
                            <option value="1">Contenedor</option>
                            <option value="2">Carga Suelta</option>
                        </select>
                    </div>
                    
                        <div class="col" id="contenedor">
                            <button type="button" name="add" id="add" class="btn btn-success">Agregar Más</button>
                        </div>
                        <div class="col" id="carga_suelta">
                            soy un carga suelta
                        </div>
                    
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Tipo Operacrion</label>
                        <select class="form-control" name="t_operacion" id="t_operacion">
                            <option value="">Seleccione</option>
                            <option value="1">Importación</option>
                            <option value="2">Exportación</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
        </form>
    </div>
@endsection
@section('scripts')
@endsection
