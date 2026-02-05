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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            // nombres y apellidos
            $table->string("first_name")->comment("Primeros nombres de la persona");
            $table->string("last_name")->comment("Apellidos de la persona");
            // documento de identidad
            $table->string("document_number")->comment("documento de la persona como cedula o ti");
            $table->enum("type_document", ["CC", "TI"])->comment("tipo de documento de la persona");
            $table->string("doccument_img")->comment("Foto del documento de identidad en pdf");
            // informacion de contacto
            $table->string("phone_number")->comment("Numero de telefono de la persona");
            $table->string("second_phone_number")->comment("segundo Numero de telefono de la persona");

            // referencia hacia users
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");


            $table->string("CV")->comment("Hoja de vida de la persona en pdf");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
