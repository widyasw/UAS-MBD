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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customers_id');
            $table->integer('employees_id');
            $table->date('order_date');
            $table->date('required_date');
            $table->date('shipped_date');
            $table->string('ship_via');
            $table->string('ship_freight');
            $table->string('ship_name');
            $table->text('ship_address');
            $table->string('ship_city');
            $table->string('ship_region');
            $table->string('ship_postal_code');
            $table->string('ship_country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
