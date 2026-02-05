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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string("name")->comment("Nombre de las aplicaciones de el monolito");
            $table->string("description")->comment("Descripcion de las aplicaciones de el monolito");
            $table->string("icon")->comment("Icono de las aplicaciones de el monolito");
            $table->string("url")->comment("Url que llevara al usuario al panel, resource o pagina personalizada.");
            $table->boolean("is_active")->comment("Si la aplicación esta en funcionamiento o no");
            // Relacion hacia modulos
            $table->unsignedBigInteger("module_id");
            $table->foreign("module_id")
                ->references("id")
                ->on("modules")
                ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
    }
};
