<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use App\Http\Resources\ClienteResource;

class ClienteController extends Controller
{
    public function index()
    {
        return ClienteResource::collection(Cliente::all());
    }

    public function store(Request $request)
    {
       $cliente = new Cliente;

       $cliente->cpf = $request->cpf;
       $cliente->nome = $request->nome;
       $cliente->saldo = $request->saldo;
       $cliente->endereco = $request->endereco;
       $cliente->telefone = $request->telefone;
       $cliente->save();
       return new ClienteResource($cliente);

    }


    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return new ClienteResource($cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        if($request->cpf)
            $cliente->cpf = $request->cpf;
        if($request->nome)
            $cliente->nome = $request->nome;
        if($request->saldo)
            $cliente->saldo = $request->saldo;
        if($request->endereco)
            $cliente->endereco = $request->endereco;
        if($request->telefone)
            $cliente->telefone = $request->telefone;
        $cliente->save();
        return new ClienteResource($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        Cliente::destroy($id);
        return response()->json(['Deletado!']);
    }
}
