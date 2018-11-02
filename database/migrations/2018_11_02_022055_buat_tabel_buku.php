<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function(Blueprint $table)
		{
		$table->increments('id');
		$table->string('title');
		$table->string('author');
		$table->date('date_published');
		$table->integer('number_of_pages');
		$table->enum('type_of_book', ['novel', 'documentation', 'other']);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('buku');
    }
}

