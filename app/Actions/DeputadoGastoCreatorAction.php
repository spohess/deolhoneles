<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\DeputadoGasto;
use App\Supports\Interfaces\Actions\CreatorActionInterface;
use Illuminate\Database\Eloquent\Model;

class DeputadoGastoCreatorAction implements CreatorActionInterface
{
    public function create(array $data): ?Model
    {
        return DeputadoGasto::create($data);
    }
}
