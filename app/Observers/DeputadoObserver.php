<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Deputado;
use App\Models\DeputadoGasto;

class DeputadoObserver
{
    public function created(Deputado $deputado): void
    {
        DeputadoGasto::factory(15)->create([
            'deputado_id' => $deputado->getKey(),
        ]);
    }
}
