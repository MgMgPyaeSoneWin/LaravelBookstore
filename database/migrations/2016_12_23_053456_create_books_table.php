<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_no');
            $table->string('name');
            $table->integer('author_id');
            $table->integer('publisher_id');
            $table->integer('genre_id');
            $table->string('price');
            $table->date('publishing_date');
            $table->string('edition');
            $table->smallInteger('deleted');
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
        //
        Schema::dropIfExists('books');
    }
}
