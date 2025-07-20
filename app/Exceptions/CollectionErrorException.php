<?php

declare(strict_types=1);

namespace App\Exceptions;

use DomainException;
use Illuminate\Support\Str;

class CollectionErrorException extends DomainException
{
    protected $code = 500;

    protected $message = 'Erro no processo de coleta';
}
