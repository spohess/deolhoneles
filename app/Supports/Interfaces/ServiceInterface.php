<?php

declare(strict_types=1);

namespace App\Supports\Interfaces;

interface ServiceInterface
{
    public function execute(ExecutableInterface $executable);
}
