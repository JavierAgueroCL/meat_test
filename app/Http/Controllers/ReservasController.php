<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Mecanicos;


class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mecanico_id' => 'required|integer',
            'name' => 'required',
            'email' => 'required|email',
            'fecha_reserva' => 'required|date'
        ]);

        if ($validator->fails()) {
            return response()->json( $validator->messages()->get('*'), 500);
        } else {
            $mecanico = Mecanicos::find($request->mecanico_id);

            if($mecanico) {

                return $mecanico->reservas()->create([
                    'mecanico_id' =>$request->mecanico_id,
                    'nombre' =>$request->name,
                    'email' =>$request->email,
                    'fecha_reserva' => $request->fecha_reserva
                ]);
            }

            return response()->json(['error' => 'No existe el Mecanico '.$request->sucursal_id], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
