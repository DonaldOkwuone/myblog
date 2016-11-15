<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category')->nullable();
            $table->string('title');
            $table->string('body');
            $table->string('author', 100);
            $table->string('image', 255);
            $table->string('hits', 100)->default(1);
            $table->timestamp('added_on');
			$table->tinyInteger('published');
             
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
       Schema::drop('posts');
    }
}
