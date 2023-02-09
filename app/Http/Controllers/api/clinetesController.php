<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorageClientesRequest as RequestsStorageClientesRequest;
use App\Models\api\Clientes;
use Illuminate\Http\StorageClientesRequest;

class clinetesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsStorageClientesRequest $request)
    {
        //
        $clinente = Clientes::create([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'cpf'=>$request->cpf,
            'placa_carro'=>$request->placa
        ]);

        if($clinente){
            return "Sucesso!";
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
        $cliente = Clientes::find($id);

        return $cliente;
    }

    public function showPlaca($numero)
    {
        //

        $cliente = Clientes::where('placa_carro', 'like', '%'.$numero)->get();

        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsStorageClientesRequest $request, $id)
    {
        //
        $cliente = Clientes::find($id);
        $cliente->update([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'cpf'=>$request->cpf,
            'placa_carro'=>$request->placa
        ]);

        return $cliente;
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
        $cliente = Clientes::find($id);
        $cliente->delete();

        return "deletado";
    }
}
