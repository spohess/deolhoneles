<?php

declare(strict_types=1);

namespace App\Observers;

use App\Jobs\DeputadoGastosCollectorJob;
use App\Models\Deputado;
use App\Models\DeputadoGasto;

class DeputadoObserver
{
    public function created(Deputado $deputado): void
    {
        $job = app()->make(DeputadoGastosCollectorJob::class, [
            'deputado' => $deputado,
        ]);
        dispatch($job);
    }
}
