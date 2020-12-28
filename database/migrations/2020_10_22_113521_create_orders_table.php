<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oxd_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('member_id');
            $table->string('member_name');
            $table->float('price',8,2);
            $table->integer('product_id');
            $table->integer('plan_id');
            $table->integer('emi');
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oxd_orders');
    }
}
