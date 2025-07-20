<?php

declare(strict_types=1);

namespace App\Supports\Interfaces\Actions;

interface InserterActionInterface
{
    public function insert(array $args): bool;
}
