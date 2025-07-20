<?php

declare(strict_types=1);

namespace App\Services\DadosAbertos;

use App\Exceptions\CollectionErrorException;
use App\Supports\Interfaces\ServiceInterface;
use Illuminate\Support\Facades\Http;

abstract class CollectorService implements ServiceInterface
{
    public function collect(string $url): array
    {
        return Http::retry(3, 100)
            ->get($url)
            ->throw(CollectionErrorException::class)
            ->json();
    }
}
