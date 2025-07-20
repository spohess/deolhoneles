<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Deputado;
use App\Models\DeputadoGasto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DeputadoGasto>
 */
class DeputadoGastoFactory extends Factory
{
    protected $model = DeputadoGasto::class;

    public function definition(): array
    {
        return [
            'deputado_id' => Deputado::withoutEvents(function () {
                return Deputado::factory();
            }),
            'ano' => fake()->numberBetween(2019, 2025),
            'mes' => fake()->numberBetween(1, 12),
            'tipo_despesa' => fake()->randomElement([
                'COMBUSTIVEIS E LUBRIFICANTES',
                'CONSULTORIA, PESQUISA E TRABALHOS TECNICOS',
                'DIVULGACAO DA ATIVIDADE PARLAMENTAR',
                'EMISSAO BILHETE AEREO',
                'FORNECIMENTO DE ALIMENTACAO DO PARLAMENTAR',
                'HOSPEDAGEM, EXCETO DO PARLAMENTAR NO DISTRITO FEDERAL',
                'LOCACAO OU FRETAMENTO DE AERONAVES',
                'LOCACAO OU FRETAMENTO DE VEICULOS AUTOMOTORES',
                'MANUTENCAO DE ESCRITORIO DE APOIO A ATIVIDADE PARLAMENTAR',
                'PASSAGENS AEREAS',
                'SERVICOS POSTAIS',
                'TELEFONIA',
            ]),
            'cod_documento' => fake()->numberBetween(100000, 999999),
            'tipo_documento' => fake()->randomElement([
                'Nota Fiscal',
                'Recibo',
                'Fatura',
                'Cupom Fiscal',
                'Nota Fiscal Eletronica',
            ]),
            'cod_tipo_documento' => fake()->numberBetween(0, 10),
            'data_documento' => fake()->optional(0.8)->dateTimeBetween('-2 years', 'now'),
            'num_documento' => fake()->optional(0.7)->numerify('######'),
            'valor_documento' => fake()->numberBetween(1000, 500000),
            'url_documento' => fake()->optional(0.6)->url(),
            'nome_fornecedor' => fake()->company(),
            'cnpj_cpf_fornecedor' => fake()->randomElement([
                fake()->cpf(false),
                fake()->cnpj(false),
            ]),
            'valor_liquido' => fake()->numberBetween(1000, 500000),
            'valor_glosa' => fake()->numberBetween(0, 50000),
            'num_ressarcimento' => fake()->optional(0.3)->numerify('RES-######'),
            'cod_lote' => fake()->numberBetween(0, 1000),
            'parcela' => fake()->numberBetween(0, 12),
        ];
    }
}
