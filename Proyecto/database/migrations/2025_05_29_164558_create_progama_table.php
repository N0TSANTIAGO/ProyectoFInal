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
        Schema::create('progama', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 255);
            $table->unsignedBigInteger('departamento_id');
            $table->timestamps();

            $table->foreign('departamento_id')
                  ->references('id')->on('departamento')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progama');
    }
};
