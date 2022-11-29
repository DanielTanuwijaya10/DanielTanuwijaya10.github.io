<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignid('books_id')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignid('categories_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            // $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_categories');
    }
}
