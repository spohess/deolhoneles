<?php

declare(strict_types=1);

namespace App\Services\DadosAbertos;

use App\Actions\DeputadoCreatorAction;
use App\Supports\Interfaces\ExecutableInterface;
use App\Transformers\APIDeputadoToDeputadoTransformer;
use Illuminate\Support\Arr;

final class DeputadosCollectorService extends CollectorService
{
    public function __construct(
        private APIDeputadoToDeputadoTransformer $transformer,
        private DeputadoCreatorAction $action,
    ) {}

    public function execute(ExecutableInterface $executable)
    {
        $deputados = $this->collect(Arr::get($executable->handler(), 'url'));

        foreach (Arr::get($deputados, 'dados') as $deputado) {
            $this->action->create(
                $this->transformer->transform($deputado),
            );
        }
    }
}
