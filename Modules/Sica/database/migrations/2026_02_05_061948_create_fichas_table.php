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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();

            $table->string("number")->comment("Numero de la ficha");
            $table->date("start_date")->comment("Fecha de inicio de la ficha");
            $table->date("start_productive")->comment("Fecha de inicio de la ficha");
            $table->date("end_date")->comment("Fecha de fin de la ficha");
            $table->enum("state", ["active", "inactive"])->comment("Estado de la ficha, activa inactiva.");

            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id', 'program_id') // el 2 parametro es un nombre personalizado
                ->references('id')                                    // columna de destino
                ->on('programs')                                      // tabla de destino
                ->onDelete('cascade')                                 // qué pasa al eliminar
                ->onUpdate('cascade');                                // qué pasa al actualizar




            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id') // el 2 parametro es un nombre personalizado
                ->references('id')                                    // columna de destino
                ->on('users')                                      // tabla de destino
                ->onDelete('cascade')                                 // qué pasa al eliminar
                ->onUpdate('cascade');                                // qué pasa al actualizar

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
