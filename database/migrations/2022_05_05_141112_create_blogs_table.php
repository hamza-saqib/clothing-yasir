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
            $table->id();
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

            $table->foreignId('blog_category_id');
            $table->foreign('blog_category_id')->references('id')->on('blog_categories');
            $table->foreignId('admin_id');
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
