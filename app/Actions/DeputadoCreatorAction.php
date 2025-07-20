<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Deputado;
use App\Supports\Interfaces\Actions\CreatorActionInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Arr;

class DeputadoCreatorAction implements CreatorActionInterface
{
    public function create(array $data): ?Model
    {
        try {
            return Deputado::create($data);
        } catch (UniqueConstraintViolationException $e) {
            logger()->info('Deputado com ID: ' . Arr::get($data, 'id') . ' já existe na base de dados');
        }

        return null;
    }
}
