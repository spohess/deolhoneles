<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $uri
 * @property string $nome
 * @property string $sigla_partido
 * @property string $sigla_uf
 * @property int $id_legislatura
 * @property string $url_foto
 * @property string $email
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Collection $gastos
 */
class Deputado extends Model
{
    /** @use HasFactory<DeputadoFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'uri',
        'nome',
        'sigla_partido',
        'sigla_uf',
        'id_legislatura',
        'url_foto',
        'email',
    ];

    public function gastos(): HasMany
    {
        return $this->hasMany(DeputadoGasto::class);
    }
}
