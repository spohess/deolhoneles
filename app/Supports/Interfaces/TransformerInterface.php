<?php

declare(strict_types=1);

namespace App\Supports\Interfaces;

interface TransformerInterface
{
    public function transform(array $data): array;
}
