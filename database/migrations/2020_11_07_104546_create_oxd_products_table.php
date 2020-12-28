<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOxdProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oxd_products', function (Blueprint $table) {
            $table->id('products_id');
            $table->string('products_name');
            $table->float('products_price', 8, 2);
            $table->longText('products_description');
            $table->integer('products_planid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oxd_products');
    }
}
