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
        Schema::create('sells_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_status')->default(0);
            $table->integer('delivery_status')->default(0);
            $table->integer('location');
            $table->integer('tran_id');
            $table->integer('pro_id');
            $table->string('pro_name');
            $table->string('pro_cover');
            $table->string('size');
            $table->integer('quantity');
            $table->float('r_price');
            $table->float('c_price');
            $table->float('total_price');
            $table->string('client_name');
            $table->string('c_email')->nullable();
            $table->string('c_mobile');
            $table->string('c_address');
            $table->string('c_upazila');
            $table->string('c_zila');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sells_histories');
    }
};
