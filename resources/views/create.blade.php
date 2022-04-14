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
                        <div class="form-group">
                            <label for="no_contenedor">Num. Contenedor</label>
                            <input type="text" class="form-control" name="no_contenedor[]" id="no_contenedor">
                        </div>
                        <div class="form-group">
                            <label for="no_contenedor">Tipo</label>
                            <input type="text" class="form-control" name="tipo_contenedor[]" id="tipo_contenedor">
                        </div>
                        <div class="form-group">
                            <label for="dimenciones">Dimenciones</label>
                            <input type="text" class="form-control" name="dimenciones[]" id="dimenciones">
                        </div>
                        <div class="form-group">
                            <label for="no_contenedor">Fecha de Descargo</label>
                            <input type="date" class="form-control" name="fecha_descargo[]" id="fecha_descargo">
                        </div>
                    </div>

                    <div class="col" id="carga_suelta">
                        <div class="form-group">
                            <label for="no_contenedor">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="no_contenedor">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad" id="cantidad">
                        </div>
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
                    <div class="col" id="importacion">
                        <div class="form-group">
                            <label for="pais">Pais de Origen</label>
                            <input type="text" class="form-control" name="pais" id="pais">
                        </div>
                        <div class="form-group">
                            <label for="no_contenedor">Fecha de Arribo</label>
                            <input type="date" class="form-control" name="fecha" id="fecha">
                        </div>
                    </div>
                    <div class="col" id="exportacion">
                        <div class="form-group">
                            <label for="pais">Pais destino</label>
                            <input type="text" class="form-control" name="pais" id="pais">
                        </div>
                        <div class="form-group">
                            <label for="no_contenedor">Fecha de Zarpe</label>
                            <input type="date" class="form-control" name="fecha" id="fecha">
                        </div>

                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
        </form>
    </div>
@endsection
@section('scripts')
@endsection
