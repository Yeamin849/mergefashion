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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->integer('pro_id')->unique();
            $table->string('pro_cat');
            $table->string('pro_cover');
            $table->string('pro_name');
            $table->longText('content');
            $table->longText('pro_images')->nullable();
            $table->float('discount')->default(0);
            $table->float('r_price');
            $table->float('c_price');
            $table->integer('feature')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
