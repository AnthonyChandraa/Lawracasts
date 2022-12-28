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
        Schema::create('course_details', function (Blueprint $table) {
            $table->uuid('course_id');
            $table->string('title');
            $table->string('video_url');
            $table->boolean('is_published');
            $table->integer('like_count');
            $table->integer('episode')->nullable();
            $table->timestamps();

            $table->primary(['course_id', 'title', 'video_url']);
            $table->foreign('course_id')->references('id')->on('course_headers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_details');
    }
};
