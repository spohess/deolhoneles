<?php

declare(strict_types=1);

namespace App\Services\DadosAbertos;

use App\Supports\Interfaces\ExecutableInterface;
use Illuminate\Support\Arr;

final class DeputadosCollectorService extends CollectorService
{
    public function execute(ExecutableInterface $executable)
    {
        $response = $this->collect(Arr::get($executable->handler(), 'url'));
        logger()->debug(json_encode($response));
    }
}
