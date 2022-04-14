<?php

namespace App\Http\Controllers;

use App\Models\Operacion;
use App\Models\Mercancia;
use App\Models\TOperacion;
use Illuminate\Http\Request;

class OperacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //api del index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $folio = Operacion::max('folio');
            $folio = $folio + 1;
            return view('create', compact('folio'));
        } catch (\Throwable $th) {
            //throw $th;
        }
              //PARA USAR EN RESPUESTA DE API
        try {
            $folio = Operacion::max('folio');
            $folio = $folio + 1;
            return response()->json([
                'success' => true,
                'msg' => 'OK',
                'folio' => $folio
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'msg' => 'ERROR FOLIO NO ENCONTRADO',
            ],400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numero_contenedores = count($request['no_contenedor']);
        
        ($request['t_mercancia'] == 1) ? $respuesta = $this->storeContenedoresOperacion($request, $numero_contenedores) : '';

        ($request['t_mercancia'] == 2) ? $respuesta = $this->storeCargaSuelta($request) : '';

        return $respuesta;
        
    }

    private function storeContenedoresOperacion($request,$numero_contenedores)
    {
        $validation = $this->validateContenedor($request, $numero_contenedores);
        if ($validation){
            $operacion = Operacion::create([
                'folio' => $request['folio'],
                'pedimento' => $request['pedimento'],
                'cliente' => $request['cliente'],
                'aduana' => $request['aduana'],
                'patente' => $request['patente'],
                't_mercancia' => $request['t_mercancia'],
                't_operacion' => $request['t_operacion'],
                'estatus' => $request['estatus'],
            ]);
            $toperacion = TOperacion::create([
                'operacion_id' => $operacion->id,
                'fecha' => $request['fecha'],
                'pais' => $request['pais'],
            ]);
            ($numero_contenedores > 0) ? $respContenedores = $this->storeContenedor($request, $operacion, $numero_contenedores) : '';
            ($operacion && $respContenedores) ? $respuesta = $this->respons(true,'DATOS AGREGADOS CONTENEDORES') : $respuesta = $this->respons(false,'ERROR AL AGREGAR DATOS CONTENEDORES');
        } else {
            $respuesta = $this->respons(false,'ERROR DE VALIDACION DE CONTENEDORES');
        }
        return $respuesta;
    }

    private function validateContenedor($request, $numero_contenedores)
    {
        for ($i=0; $i < $numero_contenedores; $i++) { 
            ($request['no_contenedor'][$i] == '' || $request['tipo_contenedor'][$i] == '' || $request['dimenciones'][$i] == '' || $request['fecha_descargo'][$i] == '') ? $validate = false : $validate = true;
        }
        return $validate;
    }

    private function storeContenedor($request, $operacion, $numero_contenedores)
    {
        try {
            for ($i=0; $i < $numero_contenedores; $i++) { 
                Mercancia::create([
                    'operacion_id' => $operacion->id,
                    'no_contenedor' => $request['no_contenedor'][$i],
                    'tipo_contenedor' => $request['tipo_contenedor'][$i],
                    'dimenciones' => $request['dimenciones'][$i],
                    'fecha_descargo' => $request['fecha_descargo'][$i],
                ]);
            }
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }


    private function storeCargaSuelta($request)
    {
        $operacion = Operacion::create([
            'folio' => $request['folio'],
            'pedimento' => $request['pedimento'],
            'cliente' => $request['cliente'],
            'aduana' => $request['aduana'],
            'patente' => $request['patente'],
            't_mercancia' => $request['t_mercancia'],
            't_operacion' => $request['t_operacion'],
            'estatus' => $request['estatus'],
        ]);
        $toperacion = TOperacion::create([
            'operacion_id' => $operacion->id,
            'fecha' => $request['fecha'],
            'pais' => $request['pais'],
        ]);
        $mercancia = Mercancia::create([
            'operacion_id' => $operacion->id,
            'descripcion' => $request['descripcion'],
            'cantidad' => $request['cantidad'],
        ]);
        ($operacion && $toperacion && $mercancia) ? $respuesta = $this->respons(true,'DATOS AGREGADOS CARGA SUELTA') : $respuesta = $this->respons(false,'ERROR AL AGREGAR DATOS CARGA SUELTA');

        return $respuesta;
    }

    private function respons($resp,$msg)
    {
        if ($resp) {
            return response()->json([
                'success' => true,
                'msg' => 'OK '.$msg,
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'ERROR '.$msg,
            ],400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function show(Operacion $operacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Operacion $operacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operacion $operacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operacion $operacion)
    {
        //
    }
}
