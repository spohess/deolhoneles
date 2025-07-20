<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Jobs\DeputadosCollectorJob;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoadDepoutados extends Component
{
    #[Rule('required', as: 'UF')]
    #[Rule('in:RO', as: 'UF')]
    public $siglaUf = 'RO';

    public function load()
    {
        $this->validate();
        $job = app()->make(DeputadosCollectorJob::class, [
            'args' => ['siglaUf' => $this->siglaUf],
        ]);
        dispatch($job);
    }
}
