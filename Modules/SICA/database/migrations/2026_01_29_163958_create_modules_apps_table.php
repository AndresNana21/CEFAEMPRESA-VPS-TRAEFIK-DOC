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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("icon");
            $table->string("slug");
        });


        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("icon");
            $table->string("url");
            $table->string("slug");
            // Referencia hacia el id del modulo al que pertenece
            $table->unsignedBigInteger("module_id");
            $table->foreign("module_id")
                ->references("id")
                ->on("modules")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
        Schema::dropIfExists('modules');
    }
};
