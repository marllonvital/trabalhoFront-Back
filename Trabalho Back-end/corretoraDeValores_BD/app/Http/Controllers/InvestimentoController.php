<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Investimento;

use App\Http\Resource\InvestimentoResource;

class InvestimentoController extends Controller
{
    public function index()
    {
        return InvestimentoResource::collection(Investimento::all());
    }

    public function store(Request $request)
    {
        $investimento = new Investimento;

        $investimento->tipo = $request->tipo;
        $investimento->nome = $request->nome;
        $investimento->preco = $request->preco;
        $investimento->risco = $request->risco;
        $investimento->liquidez = $request->liquidez;
        $investimento->procedencia = $request->procedencia;
        $investimento->rentabilidade = $request->rentabilidade;
        $investimento->save();
        return new InvestimentoResource($investimento);
    }

    public function show($id)
    {
        $investimento = Investimento::findOrFail($id);
        return new InvestimentoResource($investimento);
    }

    public function update(Request $request, $id)
    {
        $investimento = Investimento::findOrFail($id);
        if($request->tipo)
            $investimento->tipo = $request->tipo;
        if($request->nome)
            $investimento->nome = $request->nome;
        if($request->preco)
            $investimento->preco = $request->preco;
        if($request->risco)
            $investimento->risco = $request->risco;
        if($request->liquidez)
            $investimento->liquidez = $request->liquidez;
        if($request->procedencia)
            $investimento->procedencia = $request->procedencia;
        if($request->rentabilidade)
            $investimento->rentabilidade = $request->rentabilidade;
        $investimento->save();
        return new InvestimentoResource($investimento);
    }

    public function destroy($id)
    {
        $investimento = Investimento::findOrFail($id);
        Investimento::destroy($id);
        return response()->json(['Deletado!']);
    }
}
