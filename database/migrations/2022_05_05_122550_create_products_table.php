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
            $table->id()->unsigned();
            $table->string('name');
            $table->decimal('price', 12, 2)->unsigned()->default(0);
            $table->decimal('discount', 12, 2)->unsigned()->default(0);
            $table->longText('summary')->nullable();
            $table->longText('description')->nullable();
            $table->integer('opening_qty')->nullable()->default(0);
            $table->integer('available_qty')->nullable()->default(0);
            $table->string('slug')->unique();
            $table->json('images')->nullable();
            $table->longText('meta_tag_title')->nullable();
            $table->longText('meta_tag_keywords')->nullable();
            $table->longText('meta_tag_description')->nullable();

            $table->boolean('is_active')->default(false);

            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->bigInteger('sub_category_id')->nullable()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('product_sub_categories');
            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');

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
