<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oxd_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('role');
            $table->boolean('status')->default('0');
            $table->string('photo');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country')->default('INDIA');
            $table->string('pincode');
            $table->string('account_no');
            $table->string('ifsc_code');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('pan_card_no');
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('oxd_users');
    }
}
