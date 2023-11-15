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
        Schema::create('pessoas_desaparecidas', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 100)->default('não informado');
            $table->string('eyeColor', 50)->default('não informado');
            $table->string('skinColor', 50)->default('não informado');
            $table->char('gender')->default('-');
            $table->string('desappearingCity', 50)->default('não informado');
            $table->string('state', 2)->default('não informado');
            $table->float('weight');
            $table->date('birthDate');
            $table->date('desappearingDate');
            $table->integer('currentAge');
            $table->integer('age');
            $table->string('status', 50);
            $table->string('fatherName', 50)->default('não informado');
            $table->string('motherName',50)->default('não informado');
            $table->float('height');
            $table->text('otherFeatures', 200)->default('não informado');
            $table->text('circumstances', 200)->default('não informado');
            $table->text('motivations', 200)->default('não informado');
            $table->string('policeStationPhoneNumber', 20)->default('não informado');
            $table->string('familyOrFriendsPhoneNumber', 20)->default('não informado');
            $table->string('email', 30)->default('não informado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas_desaparecidas');
    }
};
