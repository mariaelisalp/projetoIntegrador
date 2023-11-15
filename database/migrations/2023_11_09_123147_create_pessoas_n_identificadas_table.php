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
        Schema::create('pessoas_n_identificadas', function (Blueprint $table) {
            $table->id('idPessoaNI');
            $table->string('name', 100);
            $table->date('registrationDate');
            $table->char('gender');
            $table->text('description');
            $table->integer('estimatedAge');
            $table->string('location', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas_n_identificadas');
    }
};
