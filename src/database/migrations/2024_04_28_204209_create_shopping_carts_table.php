<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('city');
            $table->string('name');
            $table->string('phone');
            $table->string('postal_code');
            $table->string('lastname');
            $table->string('document')->unique();
            $table->string('email');
            $table->string('address');
            $table->string('complement');
            $table->float('total')->nullable();
            $table->json('items')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_carts');
    }
};
