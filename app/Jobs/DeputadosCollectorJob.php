<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Services\DadosAbertos\DeputadosCollectorService;
use App\Services\DadosAbertos\Structures\DeputadosCollectorExecutable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class DeputadosCollectorJob implements ShouldQueue
{
    use Queueable;

    public function __construct(
        private DeputadosCollectorService $service,
        private array $args,
    ) {}

    public function handle(): void
    {
        $executable = new DeputadosCollectorExecutable($this->args);
        $this->service->execute($executable);
    }
}
