<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Investimento;

class InvestimentoResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tipo' => $this->tipo,
            'nome' => $this->nome,
            'preco' => $this->preco,
            'rentabilidade' => $this->rentabilidade,
            'procedencia' => $this->procedencia,
        ];
    }
}
