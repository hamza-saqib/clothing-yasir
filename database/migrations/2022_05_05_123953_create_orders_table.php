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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_amount', 12, 2)->unsigned()->default(0.00);
            $table->decimal('coupon_amount', 12, 2)->unsigned()->default(0.00);
            $table->decimal('tax_amount', 12, 2)->unsigned()->default(0.00);
            $table->decimal('discount', 12, 2)->unsigned()->default(0.00);

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('email')->nullable();
            $table->integer('total_items')->nullable();
            $table->string('status')->default('Pending');
            $table->boolean('is_canceled')->default(false);
            $table->boolean('is_another_shiping_address')->default(false);

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('coupon_id')->nullable();
            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->foreignId('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins');

            $table->timestamp('delivered_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};
