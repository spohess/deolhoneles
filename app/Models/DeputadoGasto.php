<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\DeputadoGastoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $deputado_id
 * @property int $ano
 * @property int $mes
 * @property string $tipo_despesa
 * @property int $cod_documento
 * @property string $tipo_documento
 * @property int $cod_tipo_documento
 * @property Carbon|null $data_documento
 * @property string|null $num_documento
 * @property int $valor_documento
 * @property string|null $url_documento
 * @property string $nome_fornecedor
 * @property string $cnpj_cpf_fornecedor
 * @property int $valor_liquido
 * @property int $valor_glosa
 * @property string|null $num_ressarcimento
 * @property int $cod_lote
 * @property int $parcela
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Deputado $deputado
 */
class DeputadoGasto extends Model
{
    /** @use HasFactory<DeputadoGastoFactory> */
    use HasFactory;

    protected $fillable = [
        'deputado_id',
        'ano',
        'mes',
        'tipo_despesa',
        'cod_documento',
        'tipo_documento',
        'cod_tipo_documento',
        'data_documento',
        'num_documento',
        'valor_documento',
        'url_documento',
        'nome_fornecedor',
        'cnpj_cpf_fornecedor',
        'valor_liquido',
        'valor_glosa',
        'num_ressarcimento',
        'cod_lote',
        'parcela',
    ];

    public function deputado(): BelongsTo
    {
        return $this->belongsTo(Deputado::class);
    }
}
