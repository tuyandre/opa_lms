<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->tinyInteger('type')->comment('1 - Discount, 2 - Flat Amount');
            $table->float('amount')->comment('Percentage or Amount');
            $table->string('expires_at')->nullable();
            $table->integer('per_user_limit')->default(1)->comment('0 - Unlimited');
            $table->integer('total')->nullable()->comment('Total Coupons to be generated');
            $table->tinyInteger('status')->comment('0 - Disabled, 1 - Enabled, 2 - Expired');
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
        Schema::dropIfExists('coupons');
    }
}
