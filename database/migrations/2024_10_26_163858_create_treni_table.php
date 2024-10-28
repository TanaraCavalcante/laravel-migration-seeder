<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda")->nullable(false);
            $table->string("stazione_partenza")->nullable(false);
            $table->string("stazione_arrivo")->nullable(false);
            $table->date("giorno_partenza")->nullable(false);
            $table->time("orario_partenza")->nullable(false);
            $table->date("giorno_arrivo")->nullable(false);
            $table->time("orario_arrivo")->nullable(false);
            $table->unsignedInteger("codice_treno")->unique()->nullable(false);
            $table->unsignedInteger("numero_carrozze")->unsigned()->nullable(false);
            $table->boolean("in_orario")->default(true)->nullable(false);
            $table->boolean("cancellato")->default(false)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};