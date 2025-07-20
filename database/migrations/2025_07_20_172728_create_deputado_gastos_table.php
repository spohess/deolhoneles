<?php

declare(strict_types=1);

use App\Models\Deputado;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('deputado_gastos', function (Blueprint $table) {
            $table->comment('Tabela de Gastos dos Deputados');

            $table->id()
                ->comment('ID do Gasto do Deputado');

            $table->foreignIdFor(Deputado::class)
                ->constrained()
                ->comment('ID do Deputado relacionado ao gasto');

            $table->integer('ano')
                ->comment('Ano da despesa');

            $table->integer('mes')
                ->comment('Mes da despesa');

            $table->string('tipo_despesa')
                ->comment('Tipo da despesa (ex: Passagens aereas, Combustiveis, etc.)');

            $table->integer('cod_documento')
                ->comment('Codigo unico do documento');

            $table->string('tipo_documento', 64)
                ->comment('Tipo do documento (ex: Nota Fiscal, Recibo, etc.)');

            $table->integer('cod_tipo_documento')
                ->default(0)
                ->comment('Codigo numerico do tipo de documento');

            $table->datetime('data_documento')
                ->nullable()
                ->comment('Data de emissao do documento');

            $table->string('num_documento', 32)
                ->nullable()
                ->comment('Numero do documento fiscal');

            $table->integer('valor_documento')
                ->comment('Valor total do documento em centavos');

            $table->string('url_documento')
                ->nullable()
                ->comment('URL para acesso ao documento digitalizado');

            $table->string('nome_fornecedor', 128)
                ->comment('Nome do fornecedor/prestador de servico');

            $table->string('cnpj_cpf_fornecedor', 14)
                ->comment('CNPJ ou CPF do fornecedor');

            $table->integer('valor_liquido')
                ->comment('Valor liquido pago em centavos (apos descontos)');

            $table->integer('valor_glosa')
                ->comment('Valor glosado/descontado em centavos');

            $table->string('num_ressarcimento', 128)
                ->nullable()
                ->comment('Numero do ressarcimento, se houver');

            $table->integer('cod_lote')
                ->default(0)
                ->comment('Codigo do lote de processamento');

            $table->integer('parcela')
                ->default(0)
                ->comment('Numero da parcela, se aplicavel');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deputado_gastos');
    }
};
