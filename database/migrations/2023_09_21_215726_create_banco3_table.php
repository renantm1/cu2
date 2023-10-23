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
        Schema::create('banco3', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('email',100);
            $table->string('telefone',100)->nullable();
            $table->string('area',100);
            $table->string('periodo',100);
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banco3');
    }
};