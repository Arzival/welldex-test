@extends('layouts.app')

@section('content')
<div class="title">
    <h1>Operación Aduanera</h1>
</div>
<div>
    <a class="btn btn-outline-primary" href="{{ route('operacion.create') }}">Crear</a>
</div>
@endsection