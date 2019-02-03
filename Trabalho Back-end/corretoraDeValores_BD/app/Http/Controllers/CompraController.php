<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Compra;

use App\Http\Resources\CompraResource;

class CompraController extends Controller
{

    public function index()
    {
        return CompraResource::collection(Compra::all());
    }

    public function store(Request $request)
    {
        $compra = new Compra;
        
        $compra->idCliente = $request->idCliente;
        $compra->dataInicial = $request->dataInicial;
        $compra->dataResgate = $request->dataResgate;
        $compra->idInvestimento = $request->idInvestimento;
        $compra->save();
        return new CompraResource($compra);
    }

    public function show($id)
    {
        $compra = Compra::findOrFail($id);
        return new CompraResource($compra);

    public function update(Request $request, $id)
    {
        $compra = Compra::findOrFail($id);
        if($request->idCliente)
            $compra->idCliente = $request->idCliente;
        if($request->dataInicial)
            $compra->dataInicial = $request->dataInicial;
        if($request->dataResgate)
            $compra->dataResgate = $request->dataResgate;
        if($request->idInvestimento)
            $compra->idInvestimento = $request->idInvestimento;
        $compra->save();
        return new CompraResource($compra);
    }

    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        Compra::destroy($id);
        return response()->json(['Deletado!']);
    }
}
