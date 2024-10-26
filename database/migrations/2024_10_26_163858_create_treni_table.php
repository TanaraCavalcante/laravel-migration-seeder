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
        Schema::create('treni', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 150);
            $table->string("stazione_partenza", 150);
            $table->string("stazione_arrivo", 150);
            $table->time("orario_partenza");
            $table->time("orario_arrivo");
            $table->unsignedInteger("codice_treno")->unique();
            $table->unsignedInteger("numero_carrozze");
            $table->boolean("in_orario")->default(true);
            $table->boolean("cancellato")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treni');
    }
};