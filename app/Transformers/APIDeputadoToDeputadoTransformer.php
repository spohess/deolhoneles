<?php

declare(strict_types=1);

namespace App\Transformers;

use App\Supports\Interfaces\TransformerInterface;
use Illuminate\Support\Arr;

class APIDeputadoToDeputadoTransformer implements TransformerInterface
{
    public function transform(array $data): array
    {
        return [
            'id' => Arr::get($data, 'id'),
            'uri' => Arr::get($data, 'uri'),
            'nome' => Arr::get($data, 'nome'),
            'sigla_partido' => Arr::get($data, 'siglaPartido'),
            'sigla_uf' => Arr::get($data, 'siglaUf'),
            'id_legislatura' => Arr::get($data, 'idLegislatura'),
            'url_foto' => Arr::get($data, 'urlFoto'),
            'email' => Arr::get($data, 'email'),
        ];
    }
}
