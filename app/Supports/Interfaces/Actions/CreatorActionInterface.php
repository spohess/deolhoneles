<?php

declare(strict_types=1);

namespace App\Supports\Interfaces\Actions;

use Illuminate\Database\Eloquent\Model;

interface CreatorActionInterface
{
    public function create(array $data): ?Model;
}
