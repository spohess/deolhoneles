<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Deputado;
use App\Supports\Interfaces\Actions\CreatorActionInterface;
use Illuminate\Database\Eloquent\Model;

class DeputadoCreatorAction implements CreatorActionInterface
{
    public function create(array $data): ?Model
    {
        return Deputado::create($data);
    }
}
