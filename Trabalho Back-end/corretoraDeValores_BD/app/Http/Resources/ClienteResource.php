<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Cliente;

class ClienteResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'nome' => $this->nome,
            'cpf'=> $this->cpf,
            'telefone'=> $this->telefone,
        ];
    }
}
