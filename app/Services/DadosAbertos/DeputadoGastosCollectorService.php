<?php

declare(strict_types=1);

namespace App\Services\DadosAbertos;

use App\Actions\DeputadoGastoCreatorAction;
use App\Jobs\DeputadoGastosCollectorJob;
use App\Supports\Interfaces\ExecutableInterface;
use App\Transformers\APIGastosToDeputadoGastoTransformer;
use Illuminate\Support\Arr;

final class DeputadoGastosCollectorService extends CollectorService
{
    public function __construct(
        private APIGastosToDeputadoGastoTransformer $transformer,
        private DeputadoGastoCreatorAction $action,
    ) {}

    public function execute(ExecutableInterface $executable): void
    {
        $data = $executable->handler();
        $gastos = $this->collect($data['url']);

        foreach (Arr::get($gastos, 'dados') as $gasto) {
            $this->action->create([
                'deputado_id' => $data['deputado']->getKey(),
                ...$this->transformer->transform($gasto),
            ]);
        }

        $next = Arr::get($gastos, 'links.1.href');
        if (!$next) {
            return;
        }

        $job = app()->make(DeputadoGastosCollectorJob::class, [
            'deputado' => $data['deputado'],
            'next' => $next,
        ]);
        dispatch($job);
    }
}
