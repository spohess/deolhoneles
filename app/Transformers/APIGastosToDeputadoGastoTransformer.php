<?php

declare(strict_types=1);

namespace App\Transformers;

use App\Supports\Interfaces\TransformerInterface;
use Illuminate\Support\Arr;

class APIGastosToDeputadoGastoTransformer implements TransformerInterface
{
    public function transform(array $data): array
    {
        return [
            'ano' => Arr::get($data, 'ano'),
            'mes' => Arr::get($data, 'mes'),
            'tipo_despesa' => Arr::get($data, 'tipoDespesa'),
            'cod_documento' => Arr::get($data, 'codDocumento'),
            'tipo_documento' => Arr::get($data, 'tipoDocumento'),
            'cod_tipo_documento' => Arr::get($data, 'codTipoDocumento'),
            'data_documento' => Arr::get($data, 'dataDocumento'),
            'num_documento' => Arr::get($data, 'numDocumento'),
            'valor_documento' => Arr::get($data, 'valorDocumento'),
            'url_documento' => Arr::get($data, 'urlDocumento'),
            'nome_fornecedor' => Arr::get($data, 'nomeFornecedor'),
            'cnpj_cpf_fornecedor' => Arr::get($data, 'cnpjCpfFornecedor'),
            'valor_liquido' => Arr::get($data, 'valorLiquido'),
            'valor_glosa' => Arr::get($data, 'valorGlosa'),
            'num_ressarcimento' => Arr::get($data, 'numRessarcimento'),
            'cod_lote' => Arr::get($data, 'codLote'),
            'parcela' => Arr::get($data, 'parcela'),
        ];
    }
}
