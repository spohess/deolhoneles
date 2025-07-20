<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('deputados', function (Blueprint $table) {
            $table->comment('Tabela de Deputados');

            $table->bigInteger('id', false, true)
                ->primary()
                ->comment('ID do Deputado');

            $table->string('uri')
                ->comment('URI do Deputado');

            $table->string('nome', 128)
                ->comment('Nome do Deputado');

            $table->string('sigla_partido', 16)
                ->comment('Sigla do Partido do Deputado');

            $table->string('sigla_uf', 2)
                ->comment('Sigla da Unidade Federativa do Deputado');

            $table->bigInteger('id_legislatura')
                ->comment('ID da Legislatura do Deputado');

            $table->string('url_foto')
                ->comment('Sigla da Unidade Federativa do Deputado');

            $table->string('email')
                ->comment('Email do Deputado');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deputados');
    }
};
