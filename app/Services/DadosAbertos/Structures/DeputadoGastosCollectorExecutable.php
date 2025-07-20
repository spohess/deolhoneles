<?php

declare(strict_types=1);

namespace App\Services\DadosAbertos\Structures;

use App\Models\Deputado;
use App\Supports\Interfaces\ExecutableInterface;
use Illuminate\Support\Arr;
use Symfony\Component\Routing\Exception\InvalidParameterException;

class DeputadoGastosCollectorExecutable implements ExecutableInterface
{
    public function __construct(
        private array $args,
    ) {}

    public function handler(): array
    {
        $deputado = Arr::get($this->args, 'deputado');
        throw_if(
            !$deputado instanceof Deputado,
            InvalidParameterException::class,
            'Deputado fornecido não é válido',
        );

        $next = Arr::get($this->args, 'next');
        if (!$next) {
            return [
                'deputado' => $deputado,
                'url' => config('dadosabertos.base_url') . '/deputados/'
                    . $deputado->getKey() . '/despesas?ordem=ASC&ordenarPor=ano',
            ];
        }

        return [
            'deputado' => $deputado,
            'url' => $next,
        ];
    }
}
