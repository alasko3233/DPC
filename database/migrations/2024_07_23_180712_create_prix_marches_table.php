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
        Schema::create('prix_marches', function (Blueprint $table) {
            $table->id();
            $table->string('type_id')->nullable();
            $table->decimal('prix_f')->nullable();
            $table->decimal('prix_v')->nullable();
            $table->decimal('prix_c')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prix_marches');
    }
};
