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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('title');
            $table->string('author_name')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('description')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('meta_tag_title')->nullable();
            $table->longText('meta_tag_keywords')->nullable();
            $table->longText('meta_tag_description')->nullable();

            $table->string('thumbnail_alt')->nullable();
            $table->string('image_alt')->nullable();

            $table->boolean('is_active')->default(true);

            $table->bigInteger('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->references('id')->on('blog_categories');
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
        Schema::dropIfExists('blogs');
    }
};
