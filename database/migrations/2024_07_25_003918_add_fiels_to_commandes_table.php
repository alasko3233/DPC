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
        Schema::table('commandes', function (Blueprint $table) {
            $table->integer('qte')->nullable();
            $table->decimal('montant')->nullable();
            $table->boolean('is_paid')->default(0);
            $table->boolean('validate')->default(0);
            $table->boolean('is_delivery')->default(0);
            $table->string('phone')->nullable();
            $table->string('fournisseur_id')->nullable();
            $table->boolean('for_client')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commandes', function (Blueprint $table) {
            //
        });
    }
};
