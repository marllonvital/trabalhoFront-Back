<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Compra;

class CompraResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'idCliente' => $this->idCliente,
            'dataInicial' => $this->dataInicial,
            'dataResgate' => $this->dataResgate,
        ];
    }
}
