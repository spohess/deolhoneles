<?php

declare(strict_types=1);

namespace App\Services\DadosAbertos\Structures;

use App\Supports\Interfaces\ExecutableInterface;
use Illuminate\Support\Arr;

class DeputadosCollectorExecutable implements ExecutableInterface
{
    public function __construct(
        private array $args,
    ) {}

    public function handler(): array
    {
        return [
            'url' => config('dadosabertos.base_url') .
                '/deputados?&ordem=ASC&ordenarPor=nome&siglaUf=' .
                Arr::get($this->args, 'siglaUf')
        ];
    }
}
