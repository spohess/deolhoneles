<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Deputado;
use App\Services\DadosAbertos\DeputadoGastosCollectorService;
use App\Services\DadosAbertos\Structures\DeputadoGastosCollectorExecutable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class DeputadoGastosCollectorJob implements ShouldQueue
{
    use Queueable;

    public function __construct(
        private DeputadoGastosCollectorService $service,
        private Deputado $deputado,
        private ?string $next = null,
    ) {}

    public function handle(): void
    {
        $executable = new DeputadoGastosCollectorExecutable([
            'deputado' => $this->deputado,
            'next' => $this->next,
        ]);
        $this->service->execute($executable);
    }
}
