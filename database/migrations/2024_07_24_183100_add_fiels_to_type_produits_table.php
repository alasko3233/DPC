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
        Schema::table('type_produits', function (Blueprint $table) {
            $table->decimal('prix_f')->nullable();
            $table->decimal('prix_v')->nullable();
            $table->decimal('prix_c')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('type_produits', function (Blueprint $table) {
            //
        });
    }
};
