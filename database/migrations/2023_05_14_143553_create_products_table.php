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
          $table->increments('id');
          $table->string('name', 50);
          $table->string('Category_Name');
          $table->foreign('Category_Name')->references('Category_Name')->on('categories')->onDelete('cascade');
          $table->text('description');
          $table->string('Brand', 55);
          $table->string('image');
          $table->decimal('price', 8, 2);
          $table->decimal('oldprice', 8, 2);
          $table->integer('stock_quantity');
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
