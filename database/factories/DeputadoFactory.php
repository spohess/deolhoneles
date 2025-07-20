<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Deputado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Deputado>
 */
class DeputadoFactory extends Factory
{
    protected $model = Deputado::class;

    public function definition(): array
    {
        return [
            'id' => fake()->unique()->numberBetween(1, 99999),
            'uri' => fake()->url(),
            'nome' => fake()->name(),
            'sigla_partido' => fake()->randomElement([
                'PT',
                'PL',
                'PSDB',
                'MDB',
                'PP',
                'PDT',
                'PSB',
                'REPUBLICANOS',
                'UNIÃO',
                'PSOL',
                'PCdoB',
                'PV',
                'CIDADANIA',
                'AVANTE',
                'PMN',
            ]),
            'sigla_uf' => fake()->randomElement([
                'AC',
                'AL',
                'AP',
                'AM',
                'BA',
                'CE',
                'DF',
                'ES',
                'GO',
                'MA',
                'MT',
                'MS',
                'MG',
                'PA',
                'PB',
                'PR',
                'PE',
                'PI',
                'RJ',
                'RN',
                'RS',
                'RO',
                'RR',
                'SC',
                'SP',
                'SE',
                'TO',
            ]),
            'id_legislatura' => fake()->numberBetween(50, 57),
            'url_foto' => fake()->imageUrl(200, 200, 'people', true, 'Faker'),
            'email' => fake()->safeEmail(),
        ];
    }
}
