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
        Schema::create('pashes', function (Blueprint $table) {
            $table->id();
            $table->string("number")->comment("Numero de la fase");
            $table->date("start_date")->comment("Fecha de inicio de la fase");
            $table->date("end_date")->comment("Fecha de fin de la fase");
            $table->enum("state", ["active", "inactive"])->comment("Estado de la fase, activa inactiva.");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pashes');
    }
};
