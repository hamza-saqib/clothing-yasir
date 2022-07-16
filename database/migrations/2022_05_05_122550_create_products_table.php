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
            $table->string('name');
            $table->decimal('price', 12, 2)->unsigned()->default(0.00);
            $table->decimal('discount', 12, 2)->unsigned()->default(0.00);
            $table->decimal('tax', 12, 2)->unsigned()->default(0.00);
            $table->longText('summary')->nullable();
            $table->longText('description')->nullable();
            $table->integer('opening_qty')->default(0);
            $table->integer('available_qty')->default(0);
            $table->string('slug')->unique();
            $table->integer('sort_order')->default(0);
            $table->string('status')->nullable();
            $table->string('brand')->nullable();
            $table->json('images')->nullable();
            $table->json('sizes')->nullable();
            $table->json('colors')->nullable();
            $table->longText('meta_tag_title')->nullable();
            $table->longText('meta_tag_keywords')->nullable();
            $table->longText('meta_tag_description')->nullable();

            $table->boolean('is_active')->default(false);

            $table->foreignId('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->foreignId('product_sub_category_id')->nullable();
            $table->foreign('product_sub_category_id')->references('id')->on('product_sub_categories')->onDelete('set null');
            $table->foreignId('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('set null');

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
        Schema::dropIfExists('products');
    }
};
