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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('name_product');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->bigInteger('price');
            $table->float('discount');
            $table->integer('quantity');
            $table->integer('quantity_out')->default(0);
            $table->string('img_product')->nullable();
            $table->integer('is_active')->default(1);
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('category_id')->references('id')->on('categories');
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
