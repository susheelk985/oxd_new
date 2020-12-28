<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOxdPinrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oxd_pinrequest', function (Blueprint $table) {
            $table->id('request_id');
            $table->bigInteger('user_id');
            $table->bigInteger('plan_id');
            $table->float('deposit_amount', 8, 2);
            $table->date('transaction_date');
            $table->string('payment_options');
            $table->string('imps_mobileno');
            $table->string('transaction_no');
            $table->string('remarks')->nullable();
            $table->string('admin_msg')->nullable();
            $table->boolean('status')->default('0');
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
        Schema::dropIfExists('oxd_pinrequest');
    }
}
