<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
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
            $table->string('name');
            $table->string('title');
            $table->string('content');
            $table->string('image');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins');
            $table->unsignedBigInteger('id_blogCate');
            $table->foreign('id_blogCate')->references('id')->on('blog_cates');
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
}
