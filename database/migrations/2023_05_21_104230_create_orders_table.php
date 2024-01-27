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
          $table->string('name_commandes');
          $table->string('name');
          $table->string('lastname');
          $table->string('adresse');
          $table->string('ville');
          $table->string('num1');
          $table->string('product_name');
          $table->decimal('product_price');
          $table->integer('product_qte');
          $table->string('Product_image');
          $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
