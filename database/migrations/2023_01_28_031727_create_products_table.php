<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_name');
            $table->string('product_banner');
            $table->integer('product_soldout_total');
            $table->string('product_condition');
            $table->string('product_description');
            $table->integer('product_price');
            $table->integer('product_stock');
            $table->string('product_status');
            $table->integer('id_category');
            $table->integer('id_seller');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
